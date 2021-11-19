<?php

namespace App\Http\Controllers;

use App\Models\Hashtags;
use App\Models\news;
use App\Models\Subjects;
use Illuminate\Http\Request;

class newsEventsController extends Controller
{
    public function newsEventsViewFunction()
    {
        $newsList = news::all();
        $hashtaglist = Hashtags::all();
        $subjectlist = Subjects::all();
        return view('clientView.newsEvents.news&events',compact(['newsList', 'hashtaglist','subjectlist']));
    }
}
