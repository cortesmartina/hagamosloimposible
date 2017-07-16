<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;
use App\Post;
use App\TagGroup;

class HagamosLoImposibleController extends Controller
{
	public function __construct(){
          $areas = TagGroup::isArea()->first()->tags()->get();
          View::share('areas', $areas);
     }
}
