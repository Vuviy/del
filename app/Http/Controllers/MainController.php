<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Profile;
use App\Models\User;

class MainController extends Controller
{
    public function main()
    {


        $blog = Blog::find(1);
        $ar = Article::find(1);

        dump($blog->polyTags);
//        dump($blog->polyTags()->create(['title'=> 'gffgfhgfhfh']));

//        $arr = [1,1,1,1,1];
////        $arr = [1,1,1,1,1,1,1,1,1,1];
////        $id = 1;
//        foreach ($arr as $rr){
//            Category::create([
//                'title' => fake()->word()]);
////            $id++;
//        }

//        $ar = Article::find(1);

//        dump($ar->comments()->create(['user_id' => 1, 'text' => 'hello world']));
//        foreach ($ar->categories as $category){
//            dump($category->pivot->is_published);
//            echo "<br>";
//        }

//        $profile = Profile::find(1);

//        $profile->user()->associate(User::find(3));

//        $user = User::find(4);
//
//        dump($user->profile);

//        $arr = [1,1,1,1,1,1,1,1,1,1];
//        $id = 1;
//        foreach ($arr as $rr){
//            Profile::create(['user_id' => $id,
//                'title' => fake()->word(),
//                'text' => implode(" ", fake()->words(3))]);
//            $id++;
//        }

        return view('main');
    }
}
