<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouTube Video Feed</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }

        .video {
            margin: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 10px;
            display: inline-block;
            width: 300px;
        }

        .video img {
            width: 100%;
            border-radius: 5px;
        }

        .error {
            color: red;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <h1>YouTube Video Feed</h1>
    <div id="videoContainer">
        @if (isset($error))
            <div class="error">{{ $error }}</div>
        @else
            @foreach ($videos as $video)
                <div class="video">
                    <a href="{{ $video->link[1]['href'] }}" target="_blank">
                        <img src="{{ $video->children('media', true)->thumbnail['url'] }}"
                            alt="{{ $video->children('media', true)->title }}">
                    </a>
                    <h3>{{ $video->children('media', true)->title }}</h3>
                    <p>{{ $video->children('media', true)->description }}</p>
                </div>
            @endforeach
        @endif
    </div>

</body>

</html>
