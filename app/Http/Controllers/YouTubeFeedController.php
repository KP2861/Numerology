<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class YouTubeFeedController extends Controller
{
    public function index()
    {
        $feedUrl = 'https://www.youtube.com/feeds/videos.xml?channel_id=UCo5W6ujSrguqO80idd5Gkyg';

        try {
            $response = Http::withOptions(['verify' => false])->get($feedUrl);

            if ($response->failed()) {
                return view('youtube_feed')->with('error', 'Error fetching videos');
            }

            $xml = simplexml_load_string($response->body());
            return view('youtube_feed', ['videos' => $xml->entry]);
        } catch (\Exception $e) {
            return view('youtube_feed')->with('error', 'Error fetching videos: ' . $e->getMessage());
        }
    }
}
