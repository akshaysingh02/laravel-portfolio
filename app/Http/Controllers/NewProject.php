<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
class NewProject extends Controller
{
    //
    function save(Request $req){
        // print_r($req->input());
        // header("Location:http://google.com");
        $projects = new Project;
        $projects->title = $req->title;
        $projects->excerpt = $req->excerpt;
        $projects->body = $req->body;
        $projects->technologies = $req->technologies;
        $projects->image_url = $req->image_url;
        $projects->save();
        return back()->withInput();
    }

}
