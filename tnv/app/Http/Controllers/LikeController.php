<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Comment;
use Auth;
class LikeController extends Controller
{
    public function __construct()
    {

            $this->middleware('auth');

    }


    public function Like(Request $request)
    {
        //

        $post = Post::find($request->id);

        if($post->likes()->find(Auth::id())){

            $post->likes()->detach(Auth::id());
        }else{
            $post->likes()->attach(Auth::id());
        }
        $listOfPost =  Post::with('user','category','criteres','comments')->withCount('likes','comments')->orderBy('id','desc')->get();

        return Response()->json(['etat' => true,'listOfPost'=>$listOfPost]);

    }

    public function LikeComment(Request $request)
    {
        //

        $comment = Comment::find($request[0]);

        if($comment->likes()->find(Auth::id())){

            $comment->likes()->detach(Auth::id());

        }else{

            $comment->likes()->attach(Auth::id());

        }

        $comment =  $comment->withCount('likes')->find($request[0]);

        return Response()->json(['etat' => true ,'comment'=>$comment]);

    }
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
