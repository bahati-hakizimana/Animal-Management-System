<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Animal;
use App\Models\People;
use  App\Http\Requests\PeopleStore;
class AdminController extends Controller
{
    public function adminDashboard (){
        return view('admin.index');
    }//End Method

    public function adminLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('admin/login');
    }//End Method


    public function adminLogin (){
        return view('admin.admin_login');
    }//End Method

    public function AdminProfile ()
    {
        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('admin.admin_profile_view',compact('profileData'));
    }
    public function AdminProfileStore (Request $request)
    {
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->username = $request->username;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address;
        if($request->file('photo')){
            $file = $request->file('pfoto');
            $filename =data(YmdHi).$file->getClientOriginalName();
            $file->move(public_path('upload/admin_images'),$filename);
            $data['photo'] = $filename;
        }
        $data->save();

        $notification = array(
            'message' => 'Admin Profile Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
    public function AdminAnimal ()
    { 
        $data = Animal::all();
       return view('admin.view_animal', compact('data'));
    }
    public function AdminPeople ()
    {
        $data = People::all();
       return view('admin.view_people',compact('data'));
    }

   // Create Edit, Update People
    public function AdminPeopleCreate ()
    {
       return view('admin.create_people');
    }

    public function AdminPeopleStore(Request $request)
    {    
        $data = new People;
        $data->first_name = $request->input('first_name');
        $data->last_name = $request->input('last_name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->address = $request->input('address');
        $data->save();
        return redirect()->back()->with('success','Data inserted successfully');
    }


  // Create Update , Delete Animals

  public function AdminAnimalCreate ()
    {
       return view('admin.create_animal');
    }
    public function AdminAnimalStore(Request $request)
    {    
        $data = new Animal;
        $data->animal_name = $request->input('animal_name');
        $data->animal_number = $request->input('animal_number');
        $data->save();
        return redirect()->back()->with('success','Data inserted successfully');
    }

}
