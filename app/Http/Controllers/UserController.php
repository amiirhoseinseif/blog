<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Table;
use PhpParser\Node\Stmt\Foreach_;

class UserController extends Controller
{
    public function header()
    {
        return view ("header");
    }

    public function index()
    {
        return view ('index');
    }
    public function home()
    {
//        foreach (DB::table('categories')->get () as $item)
//        {);
//            $array_p = DB::table ('posts')->select('id')->where("category_id" ,"=", $item->id)->get();
//            foreach($array_p as $ar)
//            {
//                $array_post[] = DB::table ( 'posts' )->select ( 'title', 'caption' )->where ( "id", "=", $ar->id )->get ();
//
//            }
//            dd ($array_post);
//        }
////        return view ( "home", ["result" => $array_post]



        foreach (DB::table ('categories')->get()->toArray () as $CategoryId)
        {
            $Categories[] = DB::table ('categories')->where ('id','=',$CategoryId->id)->get()->toArray ();
//            var_dump ($CategoryId);
            foreach (DB::table ('posts')->where ('category_id','=',$CategoryId->id)->get()->toArray () as $PostId)
            {
//                var_dump ($PostId);
                $Posts[] = DB::table ('posts')->join ('categories','posts.category_id','=','categories.id')->select ('posts.id','posts.category_id','posts.title','posts.caption','categories.name','posts.date')->where ('posts.id','=',$PostId->id)->get ()->toArray ();
//                var_dump ($Post);
            }
        }
//        dd ($Categories);
//        dd ($Posts);



//        $Posts[0][0]->date=\Morilog\Jalali\Jalalian::forge($Posts[0][0]->date);
//        echo $Posts[0][0]->date;

        return view ("home",['post' => $Posts],['category' => $Categories]);
    }

    public function post ($PostId)
    {
        $Post = DB::table ('posts')->join ('categories','posts.category_id','=','categories.id')->select ('posts.title','posts.caption','categories.name','posts.date')->where ('posts.id','=',$PostId)->get()->toArray ();
//        dd($Post);
        return view ("post",['post' => $Post]);
    }

    public function category ($CategoryId)
    {

        foreach (DB::table ('posts')->where ('category_id','=',$CategoryId)->get()->toArray () as $PostId)
        {
            $Post[] = DB::table ('posts')->join ('categories','posts.category_id','=','categories.id')->select ('posts.id','posts.title','posts.caption','categories.name','posts.date')->where ('posts.id','=',$PostId->id)->get ()->toArray ();
        }
//        dd ($Post);
        return view ("category",['post' => $Post],['PostCount'=>count($Post)]);
    }

    public function posts ()
    {
        foreach (DB::table ('posts')->select('id')->get ()->toArray () as $PostId)
        {
            $Post[] = DB::table ('posts')->join ('categories','posts.category_id','=','categories.id')->select ('posts.id','posts.title','posts.caption','categories.name','posts.category_id','posts.date')->where ('posts.id','=',$PostId->id)->get ()->toArray ();
        }
        return view ('posts',['post' => $Post],['PostCount' => count($Post)]);
    }

    public function categories()
    {
        foreach (DB::table ('categories')->select('id')->get ()->toArray () as $CategoryId)
        {
            $category[] = DB::table ('categories')->select ('id','name')->where ('categories.id','=',$CategoryId->id)->get ()->toArray ();
        }
        return view ('categories',['category'=>$category],['CategoryCount'=>count($category)]);
    }

    public function login($UserName,$Password)
    {
        $UserId = DB::table ('users')->select ('id')->where ([['users.username','=',$UserName],['users.password','=',$Password]])->get ()->toArray ();
        var_dump ($UserId);
//        if ($UserId = )
    }

    public function LoginPage()
    {
        return view ('LoginPage');
    }
}
