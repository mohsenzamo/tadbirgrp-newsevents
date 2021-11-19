<?php

namespace App\Http\Controllers;

use App\Models\news;
use Illuminate\Http\Request;

class newsListController extends Controller
{
    public function newsListViewFunction()
    {
        $newslist = news::all();
        return view('adminView.List.newsList',compact('newslist'));
    }
}
