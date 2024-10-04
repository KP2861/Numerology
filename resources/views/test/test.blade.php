<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouTube Video Player Test</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 20px;
            position: relative;
            background-color: #f0f0f0;
            /* Optional: Set a background color for the body */
        }

        #player {
            margin-bottom: 20px;
            position: relative;
            z-index: 1;
            /* Ensure player is above suggestions */
        }

        #suggestions {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 640px;
            display: none;
            /* Initially hidden */
            z-index: 10;
            /* Ensure suggestions are above the player */
            display: flex;
            /* Use flexbox for better layout */
            justify-content: center;
            /* Center suggestions */
            align-items: center;
            /* Center vertically */
            flex-wrap: wrap;
            /* Allow suggestions to wrap */
            padding: 10px;
            /* Add some padding */
        }

        .suggestion {
            margin: 5px;
            cursor: pointer;
            /* Show pointer on hover */
            text-align: center;
            /* Center text in suggestion */
        }

        .suggestion img {
            width: 200px;
            /* Thumbnail width */
            height: 113px;
            /* Thumbnail height */
            border: none;
            /* Remove border from images */
        }

        iframe {
            border: none;
            /* Remove border from iframe */
            background: transparent;
            /* Set background of the iframe to transparent */
        }
    </style>
</head>

<body>

    <h1>YouTube Video Player Test</h1>

    <div id="player"></div>

    <div id="suggestions"></div> <!-- Suggestions container -->

    <script>
        var tag = document.createElement('script');
        tag.src = "https://www.youtube.com/iframe_api";
        var firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

        var player;

        function onYouTubeIframeAPIReady() {
            player = new YT.Player('player', {
                height: '390',
                width: '640',
                videoId: '2EuVSmY3MmI', // Replace with your main video ID
                events: {
                    'onStateChange': onPlayerStateChange
                }
            });
        }

        function onPlayerStateChange(event) {
            console.log("Player state changed: ", event.data);
            if (event.data === YT.PlayerState.ENDED) {
                console.log("Video has ended.");
                showSuggestions();
            } else if (event.data === YT.PlayerState.PLAYING) {
                hideSuggestions(); // Hide suggestions if video is playing
            }
        }

        function showSuggestions() {
            const videoIds = [
                'D5WbLG82-gw',
                '2EuVSmY3MmI',
                'uWN7E0cSSCw',
            ];

            let suggestionHtml = '';
            videoIds.forEach(id => {
                suggestionHtml +=
                    `<div class="suggestion" onclick="loadVideo('${id}')">
                        <img src="https://img.youtube.com/vi/${id}/0.jpg" alt="Video Thumbnail">
                        <div>${id}</div> <!-- Display video ID as a label -->
                    </div>`;
            });

            const suggestionsDiv = document.getElementById('suggestions');
            suggestionsDiv.innerHTML = suggestionHtml;
            suggestionsDiv.style.display = 'flex'; // Show suggestions
        }

        function hideSuggestions() {
            document.getElementById('suggestions').style.display = 'none'; // Hide suggestions
        }

        function loadVideo(videoId) {
            player.loadVideoById(videoId); // Load the selected video in the player
            hideSuggestions(); // Hide suggestions after clicking
        }
    </script>

</body>

</html>
