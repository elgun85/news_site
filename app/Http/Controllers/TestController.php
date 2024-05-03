<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\News;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TestController extends Controller
{
    public function create_test()
    {
        $create_user=User::create([
            'name'=>'Elgun',
            'email'=>'Elgun@elgun.com'.rand(1,50),
            'password'=>Hash::make(123)
        ]);
        $create_category=Category::create([
            'title'=>'Sport',
            'slug'=>'Sport'.rand(1,50)
            //'status'=>'Sport',
        ]);
        $create_news=News::create([
            'title'=>'Test news',
            'slug'=>'Test news'.rand(1,50),
            'category_id'=>1,
            'user_id'=>1
    ]);
    }
}
