<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouTube Video with Full-Frame Recommendations</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #181818;
            /* Dark background for contrast */
        }

        .video-container {
            position: relative;
            width: 600px;
            height: 340px;
            margin: 20px auto;
            background-color: #000;
            overflow: hidden;
            /* Prevent overflow of child elements */
        }

        iframe {
            width: 100%;
            height: 100%;
            border: none;
        }

        .recommendation-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 120px;
            display: none;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 10px;
            z-index: 5;
            /* Above the blur */
        }

        .slider-container {
            display: flex;
            overflow: hidden;
            width: 100%;
            height: 120px;
        }

        .slider-content {
            display: flex;
            transition: transform 0.5s ease-in-out;
            gap: 10px;
        }

        .slider-content img {
            width: 180px;
            height: 108px;
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
            top: 49%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 60px;
            color: white;
            background-color: rgba(0, 0, 0, 0.911);
            border-radius: 50%;
            width: 80px;
            height: 80px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            z-index: 10;
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
            z-index: 10;
        }

        .play-text.hidden {
            display: none;
        }

        /* New class for the blurred background */
        .blurred-background {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5);
            /* Darker color for the blur effect */
            filter: blur(10px);
            z-index: 0;
            /* Behind other elements */
            display: none;
            /* Initially hidden */
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

        <!-- Blurred background for the recommendations -->
        <div class="blurred-background" id="blurredBackground"></div>

        <div class="recommendation-overlay" id="recommendedVideosOverlay">
            <button class="slider-button left" id="leftButton">&#9664;</button>
            <div class="slider-container">
                <div class="slider-content" id="sliderContent"></div>
            </div>
            <button class="slider-button right" id="rightButton">&#9654;</button>
        </div>
    </div>

    <script>
        const YOUTUBE_CHANNEL_ID = "UCo5W6ujSrguqO80idd5Gkyg"; // Replace with your channel ID
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
        const blurredBackground = document.getElementById('blurredBackground');
        let sliderPosition = 0;

        const tag = document.createElement('script');
        tag.src = "https://www.youtube.com/iframe_api";
        const firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

        function onYouTubeIframeAPIReady() {
            fetchLatestVideos();
        }

        const fetchLatestVideos = async () => {
            try {
                const response = await fetch(RSS2JSON_API_URL);
                const data = await response.json();

                videos = data.items.map(item => ({
                    id: item.link.split("v=")[1],
                    title: item.title
                }));

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
            // Hide blur effect when loading a new video
            blurredBackground.style.display = 'none';
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
                        hideRecommendations(); // Hide recommendations when a video is selected
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
                showRecommendations();
                blurredBackground.style.display = 'block'; // Show blur background when paused
                customPlayButton.classList.remove('hidden');
                playText.classList.remove('hidden'); // Show play text when paused
            } else if (event.data === YT.PlayerState.PLAYING) {
                hideRecommendations();
                blurredBackground.style.display = 'none'; // Hide blur background when playing
                customPlayButton.classList.add('hidden');
                playText.classList.add('hidden'); // Hide play text when playing
            } else if (event.data === YT.PlayerState.ENDED) {
                showRecommendations(); // Show recommendations at the end
                blurredBackground.style.display = 'block'; // Show blur effect when video ends
                customPlayButton.style.display = 'none';
                playText.style.display = 'none'; // Hide play text at the end
            }
        }

        customPlayButton.addEventListener('click', () => {
            player.playVideo();
            customPlayButton.classList.add('hidden');
            playText.classList.add('hidden'); // Hide play text when clicked
        });

        leftButton.addEventListener('click', () => {
            sliderPosition += 210; // Adjust based on image width + gap
            updateSliderPosition();
        });

        rightButton.addEventListener('click', () => {
            sliderPosition -= 210; // Adjust based on image width + gap
            updateSliderPosition();
        });

        function updateSliderPosition() {
            sliderContent.style.transform = `translateX(${sliderPosition}px)`;
        }

        // Initialize video slider visibility on load
        window.onload = () => {
            recommendedVideosDiv.style.display = 'none';
        };
    </script>
</body>

</html>
