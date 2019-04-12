<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Post extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function __invoke(Request $request)
    {

      // Create role
      \App\Post::Create([
        'title' => 'Title',
        'description' => 'Description'
      ]);

    }


}
