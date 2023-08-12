<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $posts=Post::query()->where('id','!=',9)->get();
        $posts=Post::query()->find(11);
        return new JsonResponse(['data'=>$posts]);


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $created=Post::query()->create([
            'title'=> $request->title,
            'body' =>$request->body,
        ]);
        return new JsonResponse([
            'data' => $created
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
