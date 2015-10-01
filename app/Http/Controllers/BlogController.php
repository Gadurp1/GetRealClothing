<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Blog;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{

    public function _construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $Blog=\App\Blog::latest()->get();
        return view('blog.index',compact('Blog'));
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

            return view('blog.create' );

        }
        

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */




    public function store(Requests\BlogRequest $request)
    {
    
        if(\Auth::guest()){

            return redirect('/');

        }

        $new=$post=new Blog($request->all());

        \Auth::user()->blogs()->save($new);

        session()->flash('flash_message',''.$new->name.' Has Been Created!');

        return redirect('blog/'.$new->slug.'');

    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        
    $blog=\App\Blog::whereslug($slug)->first();
    return view('blog.show')->with('blog',$blog);


    }


    /**
     * Show the form for editing a post.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        if(\Auth::guest()){
        return redirect('/');

    }

        // Show a page to edit and existing blog

        $blog=Blog::findorFail($id);

        return view('blog.edit',compact('blog'));

    }


    /**
     * Update the post in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Requests\BlogRequest  $request)
    {

        if(\Auth::guest()){

            return redirect('/');

        }

        $blog=Blog::findorFail($id);
        $blog->update($request->all());

        session()->flash('flash_message','blog Successfully Saved!');

        return redirect('blog/'.$blog->slug.'');

    }
    public function addPhoto($id, Request $request)
    {

        if(\Auth::guest()){

            return redirect('/');

        }

       $file=$request->file('file');

       $name=time().$file->getClientOriginalName();

        $file->move('blog/photos',$name);

        $blog=Blog::findOrFail($id);

       $blog->photos()->create(['path' => 'blog/photos/'.$name.'']);


    }




    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::find($id);
        $blog->delete();
        session()->flash('flash_message','Post Deleted!!!');
        return redirect('Recent-Posts');

    }
}
