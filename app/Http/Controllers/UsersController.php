<?php
namespace App\Http\Controllers;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function list_users()
    {
      $find = '';
      $users = DB::table('users')->select('*')->get();
      return view('page.list_user',[
        'data_list' => $users,
        'find'      => $find
        ]);
    }

      public function list_users_find(Request $req)
    {
      $find = $req->find;
      $users = DB::table('users')
                ->select('*')
                ->where('id','=',$find)
                ->get();
      return view('page.list_user',[
        'data_list' => $users,
        'find'      => $find
        ]);
     
    
      
    }





    public function delete_users($id){
      DB::table('user')->where('votes', '>', 100)->delete();
      DB::table('user')->where('id', '=', $id)->delete();
      return redirect('list_users');
    }
    public function form_register_save(Request $req){

      $status = DB::table('users')->insert(
        [
          'id'      => $req->id,
          'user'    => $req->user5,
          'password'=> $req->password,
          'status'  => $req->status
        ]
      );
      if($status){
         return redirect('list_users');
      }else{
         return "เกิดข้อผิดพลาด";
      }
     
    }

    
  }
