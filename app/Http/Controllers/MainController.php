<?php

namespace App\Http\Controllers;

use App\Models\Additional;
use App\Models\Article;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Image;
use App\Models\Lesson;
use App\Models\Man;
use App\Models\Profile;
use App\Models\Rate;
use App\Models\Student;
use App\Models\StudentCart;
use App\Models\StudentLesson;
use App\Models\Teacher;
use App\Models\User;
use App\Models\Women;
use Illuminate\Database\Eloquent\Builder;

class MainController extends Controller
{
    public function main()
    {


//        $student = Student::find(38);
//        $ad = Additional::find(2);
//        $ad2 = Additional::find(2);
//        $cart = StudentCart::find(44);
//        $lesson = Lesson::find(44);
//        $r = Rate::find(330);

//        $man = Women::find(7);
//        $image = Image::find(1);
//



        $teacher = Teacher::find(2);
//        $student = Student::find(3);

        dump($teacher->lessons);
//        dump($student->lessons()->create(['title' => 3]));

//        dump($man->image()->create(['url' => 'http//wqrt5tyfhgk']));

//        foreach ($lesson->students as $student){
//            dump($student->name);
//            echo "<br>";
//        }


//        $blog = Blog::find(1);
//        $ar = Article::find(1);

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
