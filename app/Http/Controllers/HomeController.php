<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function restaurants(Request $request)
    {
        $content = file_get_contents(public_path('data/dishes.json'));
        $contentToJson = json_decode($content, true);

        $data = collect($contentToJson['dishes']);

        return $data;
    }
}
