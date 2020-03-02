<?php

namespace App\Http\Controllers;

use App\Repositories\PostRepository;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    protected $postRepository;
    public function __construct(PostRepository $repository)
    {
        $this->postRepository = $repository;
    }

    public function index()
    {
        $posts = $this->postRepository->paginate(1,['*']);
        foreach ($posts as $p)
        {
            echo $p->title . '<br>';
        }
        return view('index', compact('posts'));
    }

}
