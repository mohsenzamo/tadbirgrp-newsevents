<?php

namespace App\Http\Controllers;

use App\Models\Hashtags;
use App\Models\news;
use App\Models\Subjects;
use Illuminate\Http\Request;

class newsUpdateController extends Controller
{
    public function updateNewsViewFunction($id)
    {

        $newsData = news::where('id', $id)->get();
        $hashtaglist = Hashtags::all();
        $subjectlist = Subjects::all();

        return view('adminView.Form.newsFormUpdate',compact(['newsData', 'hashtaglist','subjectlist']));
    }

    public function updateNews(Request $request)
    {
        $imagenews = news::find($request->id)->NewsImg;

        if ($request->newsImg != null) {
            $imageName1 = rand(11111, 99999) . time() . '.' . request()->newsImg->getClientOriginalExtension();
            request()->newsImg->move(public_path('image'), $imageName1);
            $imagenews = url('/') . '/' . 'image' . '/' . $imageName1;

        }
        $authorImg = news::find($request->id)->AuthorImg;

        if ($request->authorImg != null) {
            $imageName2 = rand(11111, 99999) . time() . '.' . request()->authorImg->getClientOriginalExtension();
            request()->authorImg->move(public_path('image'), $imageName2);
            $authorImg = url('/') . '/' . 'image' . '/' . $imageName2;
        }
        news::where('id', $request->id)->update([
            'Title' => $request->title,
            'NewsImg'=>$imagenews,
            'Text' => $request->text,
            'Author' => $request->author,
            'AuthorImg' => $authorImg,
            'Time' => $request->time,
            'Date' => $request->date,
            'Subject' => $request->subject,
            'Hashtag' => $request->hashtag,
        ]);

        $newslist = news::all();
        return view('adminView.List.newsList',compact('newslist'));
    }
}
