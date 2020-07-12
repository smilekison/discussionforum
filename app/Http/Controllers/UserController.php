<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{
	public function index(){
        $users = DB::select('select * from users where status = "active" and admin = 0');
        return view('admin.showuser',['users'=>$users]);
    }


    public function removedUsers(){
        $users = DB::select('select * from users where status = "disactive"');
        return view('admin.removeduser',['users'=>$users]);
    }


    public function destroy($id)
    {
        $user = User::find($id);
    	$user->status = 'disactive';
        $user->save();
        return redirect ('/user')->with('success', 'User Removed');
    }

    public function restoreUser($id)
    {
        echo "Hello world";
        /*$user = User::find($id);

        dd($user);*/
        /*$user->status = 'active';
        $user->save();
        return redirect ('/user')->with('success', 'User Status Activated');*/
    }
}
