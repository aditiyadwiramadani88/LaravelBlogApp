<?php

namespace App\Http\Controllers;

use App\Models\CommentModel;
use App\Models\PostModel;
use Illuminate\Http\Request;

class Comment extends Controller{

    public function CreateComment(Request $request) { 
        $request->validate([ 
            'name'      => ['required', 'min:4', 'max:20'], 
            'email'     => ['required', 'email'], 
            'comment'   => ['required']
        ]);

        $get_form = $request->only('name', 'email', 'post_slug', 'comment');
        
        if(!PostModel::where('slug',$get_form['post_slug'])->first()) { 
            $request->session()->flash('error', 'errors data not fout');
            return redirect()->back();
        }
        CommentModel::create($get_form)->save(); 
        $request->session()->flash('success', 'Sucess Your comment ');
        return redirect()->back();
        

    }
}
