<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class BlogController extends Controller
{
    public function getSingle($slug) {

    		return $slug;
    }
}
