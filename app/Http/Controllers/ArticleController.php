<?php

namespace App\Http\Controllers;

use App\article;
use App\category;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
use App\user;

class ArticleController extends Controller
{
    public function Article($id){
        $articles = article::select('*')->where('tourismcategory_id','=',$id)->get();
        $categories = category::select('*')->where('id','=',$id)->get();
        $art =DB::table('articles')
        ->join('users', 'articles.tourismuser_id', '=', 'users.id')
        ->join('categories', 'articles.tourismcategory_id', '=', 'categories.id')
        ->where('tourismcategory_id','=',$id)
        ->select('*','articles.id as ar_id')
        ->get();

        return view('category',['articles'=>$articles,'categories'=>$categories,'art'=>$art]); 
    }

    public function home(){
        $categories = DB::table('categories')->get();
        $art = DB::table('articles')
        ->join('categories', 'articles.tourismcategory_id', '=', 'categories.id')
        ->select('articles.*','categories.*','articles.id as ar_id')
        ->get();

        return view('index',['categories'=>$categories, 'art'=>$art]);
    }

    public function fullstory($id){
        $fullstory = article::select('*')->where('id','=',$id)->get();
        $categories =   DB::table('categories')->get();
        return view('fullstory',['fullstory'=>$fullstory,'categories'=>$categories]);
    }

    public function blog(){
        $blog = DB::table('articles')->join('users', 'articles.tourismuser_id', '=', 'users.id')->where('tourismuser_id','=',Auth::user()->id)->select('*', 'articles.id as uid')->get();
        $categories =   DB::table('categories')->get();
        return view('bloguser',['blog'=>$blog,'categories'=>$categories]);
    }

    public function delete(article $id){
        article::destroy($id->id);
        return redirect('/bloguser');
    }

    public function newblog(){
        $categories =   DB::table('categories')->get();
        return view('usernewblog',['categories'=>$categories]);
    }

    public function adminblog(){
        $categories =   DB::table('categories')->get();
        $abv = DB::table('users')->where('role','=','user')->get();
        return view('adminblog',['categories'=>$categories, 'abv'=>$abv]);
    }

    public function deleteuser(user $id){
        user::destroy($id->id);
        return redirect('/adminblog');
    }

    public function pushBlog(Request $request){
        $insert = new article;
        $insert->tourismcategory_id = (int)$request->category_id;
        $insert->tourismuser_id = Auth::user()->id;
        $insert->title = $request->title;
        $insert->description = $request->description;
    
        $insertimage = 'img/'.time().'.'.$request->file('image')->extension();
        $request->file('image')->move(public_path('/img'), $insertimage);
        $insert->image= $insertimage;
        $insert->save();
        return redirect('/bloguser');
   }

   public function aboutus(){
    $categories =   DB::table('categories')->get();
    return view('aboutus', ['categories'=>$categories]);
   }

   public function Profile(){
    $user =DB::table('users')->where('id','=', Auth::user()->id)
    ->select('*')->get();
    $categories =   DB::table('categories')->get();
    return view('Profile',['categories'=>$categories,'user'=>$user]);
    }

    public function UpdateProfile(Request $request, User $id){
    User::where('id', '=', Auth::user()->id)
    ->update(['name'=> $request->name, 
              'email'=> $request->email,
              'phone' => $request->phone]);
    return redirect()->back();
    }
}
