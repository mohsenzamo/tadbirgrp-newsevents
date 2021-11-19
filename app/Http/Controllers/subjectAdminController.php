<?php

namespace App\Http\Controllers;


use App\Models\Subjects;
use Illuminate\Http\Request;

class subjectAdminController extends Controller
{
    public function subjectFormViewFunction()
    {
        $subjectlist = Subjects::all();
        return view('adminView.Form.subjectFormAdmin',compact('subjectlist'));
    }

    public function addSubjectFunction(Request $request)
    {
        $imageName = rand(11111, 99999) . time() . '.' . request()->subjectImg->getClientOriginalExtension();
        request()->subjectImg->move(public_path('image'), $imageName);
        $imageAddress = url('/') . '/' . 'image' . '/' . $imageName;

        Subjects::create([
            'Subject' => $request->subject,
            'SubjectImg'=> $imageAddress,
        ]);
        $subjectlist = Subjects::all();
        return view('adminView.List.subject-list',compact('subjectlist'));
    }

    public function delelteSubjectFunction ($id){
        Subjects::where('id',$id)->delete();
        $subjectlist = Subjects::all();
        return view('adminView.List.subject-list',compact('subjectlist'));
    }
}
