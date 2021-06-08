<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use App\Models\Task;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function registerfunc(Request $req){

        $req->validate([
            'uName' => 'required | regex:/^[a-zA-Z\s]*$/',
            'uEmail' => 'required | email |unique:users,email',
            'uPassword'=> 'required | min:8'
        ]);
        $currentuser = new user;
        echo $req;
        $currentuser->name=$req->uName;
        $currentuser->email=$req->uEmail;
        $currentuser->password=Hash::make($req->uPassword);
        $currentuser->save();

        return redirect('Ulogin')->with('message', 'Account Created Sucessfully : Please Log In');
    }

    public function loginfunc(Request $req){

        $req->validate([
            'uEmail' => 'required | email',
            'uPassword'=> 'required | min:8'
        ]);

        $data=user::where('email',$req->uEmail)->first();
        if(empty($data)){
            return redirect('Ulogin')->with('message', 'Wrong Email or Password');
        }
        if(Hash::check($req->uPassword, $data->password)){

            $req->session()->put('user', $data->name);
            $req->session()->put('userid', $data->id);

            return redirect('/');
        }
        else{
            return redirect('Ulogin')->with('message', 'Wrong Email or Password');
        }

    }

    public function getTable($Uid)
    {
        $tasks=Task::where('user_id',$Uid)->get();

        $data['record']=$tasks;
        echo json_encode($data);
    }
}
