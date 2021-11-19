<?php

namespace App\Http\Controllers;

use App\Models\Hashtags;
use App\Models\Subjects;
use Illuminate\Http\Request;

class subjectUpdateController extends Controller
{
    public function updateSubjectViewFunction($id)
    {

        $subjectData = Subjects::where('id', $id)->get();

        return view('adminView.Form.subjectFormUpdate', compact('subjectData'));
    }

    public function updateSubject(Request $request)
    {
        $imageAddress = Subjects::find($request->id)->SubjectImg;

        if ($request->subjectImg != null) {
            $imageName = rand(11111, 99999) . time() . '.' . request()->subjectImg->getClientOriginalExtension();
            request()->subjectImg->move(public_path('image'), $imageName);
            $imageAddress = url('/') . '/' . 'image' . '/' . $imageName;
        }
        Subjects::where('id', $request->id)->update([
            'Subject' => $request->subject,
            'SubjectImg' => $imageAddress,
        ]);
        $subjectlist = Subjects::all();
        return view('adminView.List.subject-list',compact('hashtaglist'),compact('subjectlist'));
    }
}
