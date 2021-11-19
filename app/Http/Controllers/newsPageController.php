<?php

namespace App\Http\Controllers;

use App\Models\Hashtags;
use App\Models\news;
use App\Models\Subjects;
use Illuminate\Http\Request;

class newsPageController extends Controller
{
    public function newsPageViewFunction($id)
    {
        $newsData = news::where('id', $id)->get();
        $hashtaglist = Hashtags::all();
        $subjectlist = Subjects::all();

        return view('clientView.newsEvents.newsPage',compact(['newsData', 'hashtaglist','subjectlist']));
    }
}
