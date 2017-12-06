<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Comment;
use Auth;
use Mockery\Exception;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {

            $this->middleware('auth');
    }
    public function addComment(Request $request)
    {
        //

        $post = Post::find($request->id);


        $post->comments()->attach(Auth::id(),['content'=>$request->comment,'category_id'=>$request->category_id]);

        if(isset($request->detail) && $request->detail == true) {
            $post = Post::with('user', 'category', 'criteres', 'comments')->withCount('likes', 'comments')->orderBy('id', 'desc')->find($request->id);

            return Response()->json(['etat' => true, 'post' => $post]);
        }else{
            $listOfPost = Post::with('user', 'category', 'criteres', 'comments')->withCount('likes', 'comments')->orderBy('id', 'desc')->get();

            return Response()->json(['etat' => true, 'listOfPost' => $listOfPost]);
        }
    }
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
        //
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
