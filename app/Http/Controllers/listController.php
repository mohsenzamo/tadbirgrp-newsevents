<?php

namespace App\Http\Controllers;

use App\Models\Hashtags;
use App\Models\Subjects;
use Illuminate\Http\Request;

class listController extends Controller
{
    public function subjectListViewFunction()
    {
        $subjectlist = Subjects::all();
        return view('adminView.List.subject-list',compact('subjectlist'));
    }
    public function hashtagListViewFunction()
    {
        $hashtaglist = Hashtags::all();
        return view('adminView.List.hashtag-list',compact('hashtaglist'));
    }
}
