<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;
use App\Post;
use App\TagGroup;

class HomeController extends Controller
{
	public function home(){
		$areas = TagGroup::where('name','area')->first()->tags()->get();
		$regionals = TagGroup::where('name','regional')->first()->tags()->get();
		$fb_url = 'https://www.facebook.com/Hagamos.Lo.Imposible.HLI/';
		$fb_app_id = 1609360915989952;
          $fb_page_name = 'Hagamos Lo Imposible HLI';

     	return view('home',
     		[
     			'areas' => $areas,
     			'regionals' => $regionals,
     			'fb_url' => $fb_url,
     			'fb_app_id' => $fb_app_id,
                    'fb_page_name' => $fb_page_name
     		]);
	}
     public function area($area, $regional = null){
          
          $regionals = null;
          $postsQuery = Post::whereHas('tags', function ($query) use ($area) {
                   $query->where('name', '=', $area);
               });


          if ($regional){
               $postsQuery = $postsQuery->whereHas('tags', function ($query) use ($regional) {
                        $query->where('name', '=', $regional);
                    });
          } else {
               //Check that the posts dont have a regional tag
               $postsQuery = $postsQuery->whereHas('tags', function ($query) use ($regional) {
                        $query->with('taggroup')->where('taggroup.name', '=', 'regional');
                    }, '<', 1);
               $regionals = Tag::where('taggroup.name','regional')
                    ->whereHas('posts', function ($query) use ($regional) {
                        $query->where('name', '=', $regional);
                    },'>',5);
          }

          $posts = $postsQuery->get();

          $fb_url = 'https://www.facebook.com/Hagamos.Lo.Imposible.HLI/';
          $fb_app_id = 1609360915989952;
          $fb_page_name = 'Hagamos Lo Imposible HLI';
          
          return view('arearegional',
               [
                    'area' => $area,
                    'regional' => $regional,
                    'posts' => $posts,
                    'fb_url' => $fb_url,
                    'fb_app_id' => $fb_app_id,
                    'fb_page_name' => $fb_page_name
               ]);    
          //CABA
          //->areas: arte y cultura, espacios estudio, en los barrios, etc
     }

}
