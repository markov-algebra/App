<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use Auth;
use Session;

class OperatorController extends Controller
{

    public function __construct() {
        $this->middleware(['auth', 'isOperator']);
    }
    
    public function index()
    {
    return view('operator.index');

    }
    

    

    public function kemija()
    {

        $posts = Post::orderby('id', 'desc')->paginate(100);
        return view('operator.kemija', compact('posts'));

    }

    public function ciscenje()
    {

        $posts = Post::orderby('id', 'desc')->paginate(100);
        return view('operator.ciscenje', compact('posts'));

    }

    public function zalihe()
    {

        $posts = Post::orderby('id', 'desc')->paginate(15);
        return view('operator.zalihe', compact('posts'));

    }

    public function vizualni_pregledi()
    {

        $posts = Post::orderby('id', 'desc')->paginate(5);
        return view('operator.vizualni_pregledi', compact('posts'));

    }


    
}

   