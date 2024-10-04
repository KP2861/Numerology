@php
    // Initialize an array to hold wallpaper data for each area of concern
    // $wallpapers = [];
@endphp

<div style="height: auto; width:70%; margin:0 auto;">
    <table style="width: 100%">
        <thead>
            <tr>
                <th style="width:100%; padding-bottom:20px;">
                    <h2 style="font-size:28px; text-align: center; color:#8B6C56; font-weight:700;">
                        !! ॐ गं गणपतये नमः !!
                    </h2>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="text-align: center; padding: 0px 0 0 0;">
                    <h2 style="color:#EC4400; font-weight:bold; font-size:28px">
                        Area Of Struggle Prediction
                    </h2>
                </td>
            </tr>
            @foreach ($result['Area of Concern'] as $concern)
                {{-- @php
                    // Get the path to the wallpaper
                    $wallpaperSrc = storage_path($concern['Wallpaper']);
                    // Check if the file exists and encode it to base64 if it does
                    $wallpaper = file_exists($wallpaperSrc) ? 'data:image/png;base64,' . base64_encode(file_get_contents($wallpaperSrc)) : null;
                @endphp --}}

              
                <tr style="width: 100%; padding-top:30px">
                    <td style="text-align: start; vertical-align:top; padding:20px 0 0 0; width:100%">
                        <h5 style="color:#000; font-size:16px">
                            Problem: <span style="font-size:14px; font-weight:normal">{{ $concern['Problem'] ?? 'N/A' }}</span>
                        </h5>
                    </td>
                </tr>
                <tr style="width: 100%; padding-top:30px">
                    <td style="vertical-align:top; text-align:justify; padding: 5px 0 0 0; width:100%">
                        <h5 style="color:#000; font-size:16px">Affirmation:</h5>
                    </td>
                </tr>
                <tr style="width: 100%; padding-top:30px">
                    <td style="vertical-align:top; text-align:justify; padding: 5px 0 0 0; width:100%">
                        <p style="color: #000; font-size:14px">{{ $concern['Affirmation'] ?? 'N/A' }}</p>
                    </td>
                </tr>
                <tr style="width: 100%; padding-top:30px">
                    <td>
                        <table style="width: 100%">
                            <tbody>
                                <tr>
                                    <td style="text-align: start; vertical-align:top; padding: 15px 0 0 0; width:100%">
                                        <h5 style="color:#000; font-size:16px">Wallpaper:</h5>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="vertical-align:top; text-align:justify; padding: 20px 0 0 0; width:100%">
                                        {{-- @if ($wallpaper)
                                            <p>
                                                <img src="{{ $wallpaper }}" alt="wallpaper" style="margin:0px 0px; width:400px">
                                            </p>
                                        @else
                                            <p>N/A</p>
                                        @endif --}}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td style="height: 30px;"></td> <!-- Add some spacing between areas -->
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
