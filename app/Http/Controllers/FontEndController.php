<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Teacher;

class FontEndController extends Controller
{
    public function index()
    {
        $posts = Blog::all();
        $teachers = Teacher::all();
        return view('FontEnd.index',['posts'=>$posts,'teachers'=> $teachers]);
    }
    public function Activity_show($id)
    {
        $post = Blog::find($id);
        return view('FontEnd.activity-details',['post'=>$post]);
    }
    public function Teacher_show($id)
    {
        $teacher = Teacher::find($id);
        return view('FontEnd.teacher-details',['teacher'=>$teacher]);
    }
    public function All_teachers_show()
    {
    return 'ok';      
     // $teachers = Teaher::all();
        // return view('FontEnd.teacher',['teachers'=>$teachers]);
    }
}
