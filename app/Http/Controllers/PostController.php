<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\PostRepository;

class PostController extends Controller
{
    /**
     * @var PostRepository
     */
    private $repository;

    /**
     * __construct.
     */
    public function __construct(PostRepository $repository)
    {
        $this->repository = $repository;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('posts.index', [
            'posts' => $this->repository->allPosts()
        ]);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $post = $this->repository->forSlug($slug);
        abort_unless($post, 404, 'Post ');

        return view('posts.show', compact('post'));
    }

}
