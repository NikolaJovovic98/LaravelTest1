<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class PostController extends Controller
{

    public function show($slug){


        $post = \DB::table('post')->where('slug',$slug)->first();

        dd($post);

        if(! $post){

            abort(404);

        }


        return view('post',[

            'post' => $post


        ]);


    }



}
