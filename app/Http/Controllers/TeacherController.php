<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.teachers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    protected function savePost($request,$imageUrl)
    {
    $post = new Teacher();
    $post->name = $request->name;
    $post->degisnation = $request->degisnation;
    $post->feature_image = $imageUrl;
    $post->email = $request->email;
    $post->phone = $request->phone;
    $post->address = $request->address;
    $post->ssc = $request->ssc;
    $post->hsc = $request->hsc;
    $post->honours = $request->honours;
    $post->joing_date = $request->joing_date;
    $post->save();   
    }
   
public function store(Request $request)
{

    $featureImage = $request->file('feature_image');
    $name = $featureImage->getClientOriginalName();
    $uploadPath = 'public/feature_img/';
    $featureImage->move($uploadPath, $name);
    $imageUrl = $uploadPath . $name;
    $this->savePost($request, $imageUrl);
    return redirect()->back()->with('success', 'Post Created Successfully');   
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
