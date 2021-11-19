<?php

namespace App\Http\Controllers;

use App\Models\Hashtags;
use Illuminate\Http\Request;

class hashtagAdminController extends Controller
{
    public function hashtagFormViewFunction()
    {
        $hashtaglist = Hashtags::all();
        return view('adminView.Form.hashtagFormAdmin',compact('hashtaglist'));
    }

    public function addHashtagFunction(Request $request)
    {
        Hashtags::create([
            'Hashtag' => $request->hashatg,
        ]);
        $hashtaglist = Hashtags::all();
        return view('adminView.List.hashtag-list',compact('hashtaglist'));
    }
    public function deleteHashtagFunction ($id){
        Hashtags::where('id',$id)->delete();
        $hashtaglist = Hashtags::all();
        return view('adminView.List.hashtag-list',compact('hashtaglist'));
    }
}