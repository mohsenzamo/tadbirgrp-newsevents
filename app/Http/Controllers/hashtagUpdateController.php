<?php

namespace App\Http\Controllers;

use App\Models\Hashtags;
use App\Models\Subjects;
use Illuminate\Http\Request;

class hashtagUpdateController extends Controller
{
    public function updateHashtagViewFunction($id)
    {

        $hashtagData = Hashtags::where('id', $id)->get();

        return view('adminView.Form.hashtagFormUpdate', compact('hashtagData'));
    }

    public function updateHashtag(Request $request)
    {
        Hashtags::where('id', $request->id)->update([
            'Hashtag' => $request->hashtag,
        ]);
        $hashtaglist = Hashtags::all();
        return view('adminView.List.hashtag-list',compact('hashtaglist'));
    }
}
