<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Critere;
use App\Comment;
use App\Categorie;
use Auth;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['getPosts']]);
    }

    public function getPosts()
    {
        $listOfPost =  Post::with('user','category','criteres','comments')->withCount('likes','comments')->orderBy('id','desc')->get();
        $comments = Comment::withCount('likes')->get();

        $left_sidebar =  Post::with('user','category')->orderBy('id','desc')->take(5)->get();
        $left_top_sidebar =  User::with('posts')->withCount('posts')->orderBy('posts_count','desc')->has('posts')->take(5)->get();
        $left_bottom_sidebar =  Post::with('user')->withCount('likes')->orderBy('likes_count','desc')->take(5)->get();
        return  Response()->json(['listOfPost' => $listOfPost,'comments' => $comments, 'left_sidebar' => $left_sidebar, 'left_top_sidebar' => $left_top_sidebar, 'left_bottom_sidebar' => $left_bottom_sidebar]);

    }

    public function addPost(Request $request)
    {
        //
        $post = new Post();
        $post->title = $request->input('title');
        $post->type = $request->input('type');
        $post->content = $request->input('content');
        $post->place = $request->input('place');
        $post->category_id = $request->input('category_id');
        $post->user_id = Auth::id();

        $post->save();


        foreach ($request->input('criteres') as $critere) {
            $post->criteres()->attach($critere['id'],["note" => $critere['value']]);
        }

        return Response()->json(['etat' => true, 'id' => $post->id,'created_at' => $post->created_at]);

    }
    public function addQuestion(Request $request)
    {
        //
        $post = new Post();
        $post->title = $request->input('title');
        $post->type = $request->input('type');
        $post->content = $request->input('content');
        $post->place = $request->input('place');
        $post->category_id = $request->input('category_id');
        $post->user_id = Auth::id();

        $post->save();


        return Response()->json(['etat' => true, 'id' => $post->id,'created_at' => $post->created_at]);

    }
    public function updatePost(Request $request)
    {
        //
        $post = Post::find($request->id);

        $post->title = $request->input('title');
        $post->type = $request->input('type');
        $post->content = $request->input('content');
        $post->place = $request->input('place');
        $post->category_id = $request->input('category_id');
        $post->user_id = Auth::id();

        $post->save();

        $listcriteres = array();

          foreach ($request->input('criteres') as $critere) {

                array_push($listcriteres,
                    array(
                        "critere_id" => $critere['id'],
                        "note" => $critere['value']
                    ));


            }


        $post->criteres()->sync($listcriteres);
        return Response()->json(['etat' => true, 'id' => $post->id, 'created_at' => $post->created_at]);

    }

    public function deletePost($id)
    {
        //
        $post = Post::find($id);

        $post->delete();
        return Response()->json(['etat' => true, 'id' => $post->id, 'created_at' => $post->created_at]);
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
