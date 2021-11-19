<?php

namespace App\Http\Controllers;

use App\Models\Hashtags;
use App\Models\news;
use App\Models\Subjects;
use Illuminate\Http\Request;

class newsFormAdminController extends Controller
{
    public function newsFormViewFunction()
    {
        $hashtaglist = Hashtags::all();
        $subjectlist = Subjects::all();
        return view('adminView.Form.newsFormAdmin',compact('hashtaglist'),compact('subjectlist'));
    }
    public function addNewsFunction(Request $request)
    {
        $imageName1 = rand(11111, 99999) . time() . '.' . request()->newsImg->getClientOriginalExtension();
        request()->newsImg->move(public_path('image'), $imageName1);
        $imagenews = url('/') . '/' . 'image' . '/' . $imageName1;

        $imageName2 = rand(11111, 99999) . time() . '.' . request()->authorImg->getClientOriginalExtension();
        request()->authorImg->move(public_path('image'), $imageName2);
        $authorImg = url('/') . '/' . 'image' . '/' . $imageName2;

        news::create([
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

        $hashtaglist = Hashtags::all();
        $subjectlist = Subjects::all();
        return view('adminView.Form.newsFormAdmin',compact('hashtaglist'),compact('subjectlist'));
    }
    public function deleteNewsFunction ($id){
        news::where('id',$id)->delete();
        $newslist = news::all();
        return view('adminView.List.newsList',compact('newslist'));
    }
}
