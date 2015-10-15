<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PhotosController extends Controller
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

        if(\Auth::guest()){

            return redirect('/');

        }


        else{

            return view('photos.create' );

        }
        

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    $blog=\App\Photo::where('blog_id',$id)->get();
    return view('photos.show')->with('blog',$blog);


    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
   {

        // Show a page to edit and existing blog

        $photo=\App\Photo::findorFail($id);

        return view('photos.edit',compact('photo'));

    }


   /**
     * Update the post in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Requests\PhotosRequest  $request)
    {

        if(\Auth::guest()){

            return redirect('/');

        }

        $photo=\App\Photo::findorFail($id);
        $photo->update($request->all());

        session()->flash('flash_message','Photo Successfully Saved!');

        return redirect('photos/'.$photo->blog_id.'');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $photo = \App\Photo::find($id);
        $photo->delete();
        session()->flash('flash_message','Photo Deleted!!!');
        return redirect('');

    }
}
