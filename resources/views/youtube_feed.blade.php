<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouTube Video with Full-Frame Recommendations</title>
    <style>
        .video-container {
            position: relative;
            width: 600px;
            height: 340px;
            margin-bottom: 20px;
            background-color: #000;
        }

        iframe {
            width: 100%;
            height: 100%;
            border: none;
        }

        .recommendation-overlay {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.9);
            display: none;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .slider-container {
            display: flex;
            overflow: hidden;
            width: 100%;
        }

        .slider-content {
            display: flex;
            transition: transform 0.5s ease-in-out;
            gap: 10px;
        }

        /* Increase thumbnail size */
        .slider-content img {
            width: 200px;
            /* Increased width */
            height: 112px;
            /* Increased height */
            cursor: pointer;
            border-radius: 5px;
            transition: transform 0.3s;
            border: 5px solid goldenrod;
            box-shadow: 0 0 10px brown;
        }

        .slider-content img:hover {
            transform: scale(1.05);
            box-shadow: 0 0 15px brown;
        }

        .slider-button {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: rgba(0, 0, 0, 0.7);
            color: white;
            font-size: 30px;
            cursor: pointer;
            border: none;
            z-index: 10;
        }

        .slider-button.left {
            left: 10px;
        }

        .slider-button.right {
            right: 10px;
        }

        .play-button {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 60px;
            color: white;
            background-color: rgba(0, 0, 0, 0.8);
            border-radius: 50%;
            width: 100px;
            height: 100px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            z-index: 1000;
        }

        .play-button.hidden {
            display: none;
        }

        .play-text {
            position: absolute;
            top: calc(50% + 70px);
            left: 50%;
            transform: translateX(-50%);
            font-size: 16px;
            color: white;
            background-color: rgba(0, 0, 0, 0.7);
            padding: 5px 10px;
            border-radius: 8px;
            z-index: 1000;
        }

        .play-text.hidden {
            display: none;
        }
    </style>
</head>

<body>

    <div class="video-container" id="videoContainer">
        <div id="player"></div>
        <div class="play-button" id="customPlayButton">
            <i>&#9658;</i>
        </div>
        <div class="play-text" id="playText">Click to Start Video</div>

        <div class="recommendation-overlay" id="recommendedVideosOverlay">
            <button class="slider-button left" id="leftButton">&#9664;</button>
            <div class="slider-container">
                <div class="slider-content" id="sliderContent"></div>
            </div>
            <button class="slider-button right" id="rightButton">&#9654;</button>
        </div>
    </div>

    <script>
        const YOUTUBE_CHANNEL_ID = "UCo5W6ujSrguqO80idd5Gkyg";
        const RSS2JSON_API_URL =
            `https://api.rss2json.com/v1/api.json?rss_url=https://www.youtube.com/feeds/videos.xml?channel_id=${YOUTUBE_CHANNEL_ID}`;

        let videos = [];
        let currentVideoIndex = 0;
        let player;
        let recommendedVideosDiv = document.getElementById('recommendedVideosOverlay');
        let sliderContent = document.getElementById('sliderContent');
        const customPlayButton = document.getElementById('customPlayButton');
        const playText = document.getElementById('playText');
        const leftButton = document.getElementById('leftButton');
        const rightButton = document.getElementById('rightButton');
        let sliderPosition = 0;

        const tag = document.createElement('script');
        tag.src = "https://www.youtube.com/iframe_api";
        const firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

        function onYouTubeIframeAPIReady() {
            fetchLatestVideos();
        }

        // Function to fetch the latest videos from the YouTube channel
        const fetchLatestVideos = async () => {
            try {
                const response = await fetch(RSS2JSON_API_URL);
                const data = await response.json();

                // Extract video IDs and create an array for videos
                videos = data.items.map(item => ({
                    id: item.link.split("v=")[1],
                    title: item.title
                }));

                // Load the first video using the YouTube Player API
                loadVideo(videos[0].id);
            } catch (error) {
                console.error("Error fetching videos:", error);
            }
        };


        const loadVideo = (videoId) => {
            if (!player) {
                player = new YT.Player('player', {
                    height: '340',
                    width: '600',
                    videoId: videoId,
                    playerVars: {
                        'controls': 0
                    },
                    events: {
                        'onStateChange': onPlayerStateChange
                    }
                });
            } else {
                player.loadVideoById(videoId);
            }

            hideRecommendations();
        };

        const showRecommendations = () => {
            recommendedVideosDiv.style.display = 'flex';
            sliderContent.innerHTML = '';

            videos.forEach((video, index) => {
                if (index !== currentVideoIndex) {
                    const videoThumbnail = document.createElement('img');
                    videoThumbnail.src = `https://img.youtube.com/vi/${video.id}/hqdefault.jpg`;
                    videoThumbnail.alt = video.title;
                    videoThumbnail.onclick = () => {
                        currentVideoIndex = index;
                        loadVideo(video.id);
                    };
                    sliderContent.appendChild(videoThumbnail);
                }
            });

            updateSliderPosition();
        };

        const hideRecommendations = () => {
            recommendedVideosDiv.style.display = 'none';
        };

        function onPlayerStateChange(event) {
            if (event.data === YT.PlayerState.PAUSED) {
                hideRecommendations();
                customPlayButton.classList.remove('hidden');
                playText.classList.remove('hidden');
            } else if (event.data === YT.PlayerState.PLAYING) {
                hideRecommendations();
                customPlayButton.classList.add('hidden');
                playText.classList.add('hidden');
            } else if (event.data === YT.PlayerState.ENDED) {
                showRecommendations();
                customPlayButton.style.display = 'none';
                playText.style.display = 'none';
            }
        }

        customPlayButton.addEventListener('click', function() {
            player.playVideo();
            customPlayButton.classList.add('hidden');
            playText.classList.add('hidden');
        });

        leftButton.addEventListener('click', function() {
            sliderPosition = Math.min(sliderPosition + 1, 0);
            updateSliderPosition();
        });

        rightButton.addEventListener('click', function() {
            sliderPosition = Math.max(sliderPosition - 1, -(videos.length - 1));
            updateSliderPosition();
        });

        const updateSliderPosition = () => {
            const offset = sliderPosition * 210; // Adjust this value if you change the thumbnail size further
            sliderContent.style.transform = `translateX(${offset}px)`;
        };
    </script>
</body>

</html>
