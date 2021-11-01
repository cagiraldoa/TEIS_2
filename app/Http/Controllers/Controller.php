<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController

{

public static $quotes = array("https://storage.googleapis.com/bucket-teis/Image-1.jpg",

"https://storage.googleapis.com/bucket-teis/Image-10.jpg",

"https://storage.googleapis.com/bucket-teis/Image-11.png",

"https://storage.googleapis.com/bucket-teis/Image-12.jpg",

"https://storage.googleapis.com/bucket-teis/Image-13.jpg",

"https://storage.googleapis.com/bucket-teis/Image-14.jpg",

"https://storage.googleapis.com/bucket-teis/Image-15.jpg",

"https://storage.googleapis.com/bucket-teis/Image-2.jpg",

"https://storage.googleapis.com/bucket-teis/Image-3.jpg",

"https://storage.googleapis.com/bucket-teis/Image-4.jpeg",

"https://storage.googleapis.com/bucket-teis/Image-5.jpg",

"https://storage.googleapis.com/bucket-teis/Image-6.jpg",

"https://storage.googleapis.com/bucket-teis/Image-7.jpg",

"https://storage.googleapis.com/bucket-teis/Image-8.png",

"https://storage.googleapis.com/bucket-teis/Image-9.jpg",

);

public function index()
{
    $totalQuotes = (count(Controller::$quotes));
    $randomNumber = (rand(0,($totalQuotes-1)));
    $randomQuote = Controller::$quotes[$randomNumber];
    return response("<img width=\"400px\" height=\"400px\" src=\"".$randomQuote."\" alt=\"\">\n<h1>SERVER_IP=>".gethostbyname(gethostname()));
}
}
