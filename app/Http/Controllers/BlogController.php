<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $blogs = Blog::orderBy('id','desc')->paginate(3);
        $blogs = Blog::all();

        return view('blog.index',['blogs' => $blogs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate the form data
        
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description'=>'required',
        ]);

        $blog = new Blog();

        $blog->title = $request->title;
        $blog->description = $request->description;

        if($blog->save()){
            return redirect()->route('blog.show', $blog->id);
        }else{
            return redirect()->route('blog.create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $blog = Blog::find($id)
        //
        $blog = Blog::findOrFail($id);
        return view('blog.showblog')->with( 'blog', $blog );
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
        $blog = Blog::find($id);  
        return view('blog.edit', compact('blog'));  
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
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description'=>'required',
        ]);

        $blog = Blog::find($id);  
        $blog->title = $request->title;
        $blog->description = $request->description;  
        
        if($blog->save()){
            return redirect()->route('blog.show', $blog->id);
        }else{
            return redirect()->route('blog.edit');
        }
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
        $blog = Blog::find($id);  
        $blog->delete();  
        return redirect()->route('blog.index');
    }
}
