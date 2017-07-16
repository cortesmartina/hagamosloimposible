<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;
use App\Post;
use App\TagGroup;

class HomeController extends HagamosLoImposibleController
{
	public function home(){
		$areas = TagGroup::isArea()->first()->tags()->get();
		$regionals = TagGroup::isRegional()->first()->tags()->get();
          foreach ($regionals as $key => $regional) {
               $areasRegional = TagGroup::isArea()->first()->tags()->whereHas('posts', function($query) use ($regional){
                    $query->whereHas('tags', function($query) use ($regional){
                         $query->whereName($regional->name);
                    });
               })->get();
               $regionals[$key]['areas'] = $areasRegional;
          }

		$fb_url = 'https://www.facebook.com/Hagamos.Lo.Imposible.HLI/';
		$fb_app_id = 1609360915989952;
          $fb_page_name = 'Hagamos Lo Imposible HLI';

     	return view('home',
     		[
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
               $view = 'arearegional';
               $postsQuery = $postsQuery->whereHas('tags', function ($query) use ($regional) {
                        $query->where('name', '=', $regional);
                    });
          } else {
               $view = 'area';

               //All regionals that have at least one post from the area
               $regionals = TagGroup::isRegional()->first()->tags()->whereHas('posts', function($query) use ($area){
                    $query->whereHas('tags', function($query) use ($area){
                         $query->whereName($area);
                    });
               })->get();
               //Check that the posts dont have a regional tag
               $postsQuery = $postsQuery->whereDoesntHave('tags', function ($queryTags) {
                        $queryTags->whereHas('taggroup', function ($queryTagGroup){
                              $queryTagGroup->isRegional();
                        });
                    });
          }

          $posts = $postsQuery->get();

          $fb_url = 'https://www.facebook.com/Hagamos.Lo.Imposible.HLI/';
          $fb_app_id = 1609360915989952;
          $fb_page_name = 'Hagamos Lo Imposible HLI';
          
          return view($view,
               [
                    'area' => $area,
                    'regional' => $regional,
                    'regionals' => $regionals,
                    'posts' => $posts,
                    'fb_url' => $fb_url,
                    'fb_app_id' => $fb_app_id,
                    'fb_page_name' => $fb_page_name
               ]);    
          //CABA
          //->areas: arte y cultura, espacios estudio, en los barrios, etc
     }

}
