<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Uploads;
use App\Likes;
use DB;
class HomeController extends Controller
{

  public function welcome(){
     $get_uploads = DB::SELECT("SELECT * FROM uploads WHERE id != '' ORDER BY id desc");
    return view('welcome',compact('get_uploads'));


  }

  public function like(Request $request){
        $user = session::get('user');
      $check = Likes::Where('user',$user)->Where('image_id', $request->id)->first();

      $id = $request->id;
      if($check){
        $delete = DB::DELETE("DELETE FROM likes WHERE user = '$user' AND image_id = '$id'");
        $count = Likes::Where('image_id',$id)->get()->count();
      return response()->json(['likes' => $count, 'color' => '#9A9A9A']);
      }else{

        $create = Likes::Create([
          'user' => $user,
          'image_id' => $id
        ]);
        $count = Likes::Where('image_id',$id)->get()->count();
        return response()->json(['likes' => $count, 'color' => 'blue']);
      }

  }

  public function mostliked(){
    if(session::has('user') != null){

    }else{
      session()->put('user', $_SERVER['HTTP_USER_AGENT']);
      Session()->save();
    }
    $user = session::get("user");
    $get_uploads = DB::SELECT("SELECT u.*,
      (SELECT COUNT(l.id) from likes l where l.user = '$user' and l.image_id = u.id)
      as liked, (SELECT COUNT(likes.id) FROM likes where likes.image_id = u.id) as actual_likes
      FROM uploads u
      WHERE u.id != '' order by actual_likes DESC  ");





    return view("most_liked",compact('get_uploads'));
  }

  public function allsdug(){
    if(session::has('user') != null){

    }else{
      session()->put('user', $_SERVER['HTTP_USER_AGENT']);
      Session()->save();
    }
    $user = session::get("user");
    $get_uploads = DB::SELECT("SELECT u.*,
      (SELECT COUNT(l.id) from likes l where l.user = '$user' and l.image_id = u.id)
      as liked, (SELECT COUNT(likes.id) FROM likes where likes.image_id = u.id) as actual_likes
      FROM uploads u
      WHERE u.id != '' order by u.id DESC  ");




    return view("allsdug",compact('get_uploads'));
  }


  public function loadmore(Request $request){
        $user = session::get('user');
          $id = $request->id;
    $get_uploads = DB::SELECT("SELECT u.*,
      (SELECT COUNT(l.id) from likes l where l.user = '$user' and l.image_id = u.id)
      as liked
      FROM uploads u
      WHERE u.id > '$id'  limit 9 ");

      return response()->json($get_uploads);
  }



  public function delete($id = null){
    if(auth()->check()){
      Uploads::Where("id",$id)->delete();
      return back();
    }else{
      return response()->json("404");
    }


  }

  public function login(){
    if(session::has('user') != null){

    }else{
      session()->put('user', $_SERVER['HTTP_USER_AGENT']);
      Session()->save();
    }
   $user_online = "";




    $user = session::get("user");
    $get_uploads = DB::SELECT("SELECT u.*,
      (SELECT COUNT(l.id) from likes l where l.user = '$user' and l.image_id = u.id)
      as liked, (SELECT COUNT(likes.id) FROM likes where likes.image_id = u.id) as actual_likes
      FROM uploads u
      WHERE u.id != '' order by u.id DESC limit 9 ");





    return view("login",compact('get_uploads',''));
  }
    public function filterthis(Request $request){

      if($request->value == "my_images"){
    //    return DB::SELECT("SELECT uploads.*,fname, lname FROM uploads LEFT JOIN users on users.id = uploads.user_id WHERE uploads.u != '' ORDER BY uploads.created_at DESC");
          return Uploads::Where('name', auth()->user()->id)->orderBy('created_at', 'DESC')->get();
      }else if($request->value == "new"){
      return DB::SELECT("SELECT * FROM uploads ORDER BY uploads.created_at DESC");
      }
      else if($request->value == "top_rated"){
        return DB::SELECT("SELECT * FROM uploads ORDER BY uploads.likes DESC ");
        //  return Uploads::Where('user_id','!=', '')->orderBy('likes', 'DESC')->get();
      }else{
        return response()->json('wrong');
      }

    }

    public function upload(Request $request){
      $cat_code = str_random(20);
      $image = $request->file('file');
      $name = $cat_code.'.'.$image->getClientOriginalExtension();
      $destinationPath = public_path('/uploads');
      $image->move($destinationPath, $name);

      $create = Uploads::create([
        'name' => 'g',
        'image' => $name,
        'likes' => 0

      ]);

      return 'okay';
    }

    public function uploadthis($image = null){
      $create = Uploads::create([
        'name' => 'g',
        'image' => $image,
        'likes' => 0
      ]);
      echo "done";
    }

    public function logout(){
        if(! auth()->check() ){
            return redirect('404');
        }
         auth()->logout();
         return back();
    }
}
