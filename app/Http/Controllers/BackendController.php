<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use App\Contactform;
use App\Role;
use Hash;
use App\Menupermission;
use Auth;
class BackendController extends Controller
{	
    public function __construct(){
        $this->middleware('auth');
	}

    public function dashboard(){
    	$data['users'] = User::all()->count();
        $data['contact_us'] = Contactform::all()->count();
        $data['roles'] = Role::all()->count();
    	return view('metronics.index',$data);
    }

    public function users(){
        if(\Auth::user()->role_id == 1){
            $data['users'] = User::orderBy('created_at', 'desc')->paginate(2);
            return view('metronics.users.list',$data);
        }else{
            return redirect('/dashboard');
        }
    }

    public function contactUsDetails(){
        $data['contact_us'] = Contactform::orderBy('created_at', 'desc')->paginate(6);
        return view('metronics.contact_us.list',$data);
    }

    public function contactUsView($id){
        if (!checkUserRole()) {
           return back();
       }
    	$data['contact_us'] = Contactform::FindorFail($id);
    	return view('metronics.contact_us.view',$data);
    }

    public function contactUsDelete($id){
    	$contactUsDelete = Contactform::FindorFail($id)->delete();
    	return back()->with('danger','Delected Successfully');
    }


    public function viewusers($id){
        $data['user'] = User::FindorFail($id);
        return view('metronics.users.view',$data);
    }

    public function editusers($id){
        $data['user'] = User::FindorFail($id);
        $data['role'] = Role::all();
        return view('metronics.users.edit',$data);
    }

    public function deleteusers($id){
        $currentUser = \Auth::user()->id;
        if($currentUser == $id){
            return back()->with('warning','Cannot delete your Account');
        }else{
            $deleteUsers = User::FindorFail($id)->delete();
            return back()->with('error','User Deleted Successfully');
        }

    }

    public function createUser(){
        $data['role'] = Role::all();
        return view('metronics.users.create',$data);
    }

    public function storeUser(Request $request){
      try{  
           if($request){
                $this->validate($request,[
                    'role' => 'required|not_in:0',
                    'email' => 'required|string|email|max:255|unique:users',
                    'password' => 'required|string|min:8|confirmed',
                    'name' => 'required',
                ]);

                $user = new User();
                $user->name=$request->name;
                $user->email=$request->email;
                $user->password=Hash::make($request->password);
                $user->role_id=$request->role;
                $user->save();
                return back()->with('success','User Added Successfully');
            }
        }catch(Exception $e){
                return back()->with('warning','Something went Wrong!!!');
        }
   }

   public function updateUser($id){
       try{  
           $user = User::FindorFail($id);
           $user->role_id = request('role ');
           $user->save();
           return back()->with('success','User Role Updated Successfully');
        }catch(Exception $e){
           return back()->with('warning','Something went Wrong!!!');
        }
   }


}
