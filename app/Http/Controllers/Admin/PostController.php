<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;

class PostController  extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('id','desc')->paginate(10);
        return view('admin.posts.index',['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         request()->validate([
            'post' => 'required|max:200',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->image) {
            $imageName = time().'.'.request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images/posts'), $imageName);
        }

        $post = new Post;
        $post->post = $request->post;
        if ($request->image) {
            $post->image = $imageName;
        }
        $res = $post->save();

        if ($res) {
            return redirect()->route('admin.posts.index')->with('success','Пост успешно создан.');
        } else{
            return redirect()->route('admin.posts.cretae')->with('warning','При создании поста ошибка. Попробуйте позже.');
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
        $post = Post::findOrFail($id);
        return view('admin.posts.show',['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('admin.posts.edit',['post' => $post]);
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
        request()->validate([
            'post' => 'required|max:200',
        ]);

        if ($request->image) {
            $imageName = time().'.'.request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images/posts'), $imageName);
        }

        $post = Post::findOrFail($id);
        $post->post = $request->post;
        if ($request->image) {
            $post->image = $imageName;
        }
        $res = $post->save();

        if ($res) {
            return redirect()->route('admin.posts.edit',$id)->with('success','Пост успешно обновлен.');
        } else{
            return redirect()->route('admin.posts.edit',$id)->with('warning','При обновлении произошла ошибка. Попробуйте позже.');
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
        $res = Post::findOrFail($id)->delete();

        if ($res) {
            return redirect()->route('admin.posts.index')->with('success','Пост успешно удален.');
        } else{
            return redirect()->route('admin.posts.index',$id)->with('success','При удалении произошла ошибка. Попробуйте позже.');
        }
    }
}
