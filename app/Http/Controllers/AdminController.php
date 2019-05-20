<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use Auth;

class AdminController extends Controller
{

public function __construct() {
    $this->middleware(['auth', 'isAdmin']); 
}

    public function index()
    {
    return view('admin.index');

    }

    public function administrate_posts()
    {

    $posts = Post::orderby('id', 'desc')->paginate(1000); 

        return view('admin.administrate_posts', compact('posts'));
    }
}