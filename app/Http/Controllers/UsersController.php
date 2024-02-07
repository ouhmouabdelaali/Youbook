<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;

class UsersController extends Controller
{



public function viewlog()
{
    return view('Autho.Login');
}
public function validation($request)
{
    $loginData = $request->validate([
        'email' => 'required|email',
        'password' => 'required|string',
    ]);
    return $loginData;
}

public function login(Request $request)
{   
   $uservalid=$this->validation($request);
    
   
   $user = Users::where('email',$uservalid['email'])->first();
   
  
    if ($user === null) {
        return "Invalid username or password";
    }
    
    if ($uservalid['password']===$user->password) 
    {  

       
   
        
        return $this->RolePage($user->role,$user->id);
        

    } else {
        return "Invalid password";
    } 

}
private function RolePage($role,$id)

{  
   
    $user = Users::find($id);

    if ($user === null) {
        return "User not found in the session.";
    }

    if ($role === "admin") {
        return view('Pages.Admin', compact('user'))->with('welcome_message', 'Welcome admin');
    } elseif ($role === "student") {
        return view('Pages.Steudent', compact('user'))->with('welcome_message', 'Welcome student');
    } else {
        return "Invalid user role";
    }
}

public function getFromSession()
{
    if (isset($_SESSION['id']) && $_SESSION['id']) {
        return Users::find($_SESSION['id']);
    } else {
        return null;
    }
}


}


 



