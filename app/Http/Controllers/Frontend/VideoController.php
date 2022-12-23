<?php

namespace App\Http\Controllers\Frontend;

class VideoController extends FrontendController
{
    public function index()
    {
        $compact = [];

        $compact['item'] = [
            'src'       => 'https://vjs.zencdn.net/v/oceans.mp4',
            'poster'    => 'https://image.mux.com/5g1hMA6dKAe8DCgBB901DYB200U65ev2y00/thumbnail.jpg?time=43',
            'type'      => 'video/mp4',
            'chapters'  => [
                ['time' => 0, 'title' => 'Chapter title 01'],
                ['time' => 6, 'title' => 'Chapter title 02'],
                ['time' => 10, 'title' => 'Chapter title 03'],
                ['time' => 40, 'title' => 'Chapter title 04'],
            ],
        ];

        return view('frontend.videos.index', $compact);
    }
}
