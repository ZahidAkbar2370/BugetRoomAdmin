<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{

        // show data
        public function index()
        {
            $allUsers = User::whereNot('role', "user")->orderBy('id', 'DESC')->get();

            return view('admin.user.view', compact('allUsers'));
        }

        public function create() {
            return view('admin.user.create');
        }

        // inserted data
        public function storeUser(Request $request)
{
        // data validation
        $request->validate([
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'email' => 'required|string|max:255',
        'mobile_no' => 'required|string|max:255',
        'profile_image' => 'sometimes|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

        // Create a new Category
        $user = new User;
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->email = $request->input('email');
        $user->mobile_no = $request->input('mobile_no');
        $user->password = $request->input('password');
        $user->facebook = $request->input('facebook');
        $user->tiktok = $request->input('tiktok');
        $user->role = $request->input('role');

        // if($request->has('profile_image')){
        //     $user->profile_image = rand(1000,10000)+time(). $request->file('profile_image')->getClientOriginalName();
        //     $request->file('profile_image')->move('uploads/user', $user->profile_image);
        // }
        if ($request->hasFile('profile_image')) {
            $profile = $request->file('profile_image');
            $ext = $profile->getClientOriginalExtension();
            $image_name = time() . "." . $ext;
            $profile->move('uploads/user', $image_name);
            $user->profile_image = $image_name;
        }
        $user->save();
        return redirect('users')->with('success', 'User created successfully.');
}

        //delete data
        public function userDelete($id){
            $allUsers = User::destroy($id);

            return redirect('trashed-users');
        }

        // edit data
        public function editUser($id){
        $allUsers = User::find($id);

        return view('admin.user.edit',compact('allUsers'));

}

        // update data
public function updateUser(Request $request, $id){

    // Data validation
    $request->validate([
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'email' => 'required|string|max:255',
        'mobile_no' => 'required|string|max:255',
        'profile_image' => 'sometimes|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $allUsers = User::find($id);

    $allUsers->first_name = $request->input('first_name');
    $allUsers->last_name = $request->input('last_name');
    $allUsers->email = $request->input('email');
    $allUsers->mobile_no = $request->input('mobile_no');

    if ($request->hasFile('profile_image')) {
        $profile = $request->file('profile_image');
        $ext = $profile->getClientOriginalExtension();
        $image_name = time() . "." . $ext;
        $profile->move('uploads/user', $image_name);
        $allUsers->profile_image = $image_name;
    }

    $allUsers->save();

    return redirect('users')->with('success', 'User updated successfully.');
}



        //Trashed data
        public function showTrashedUsers()
        {
        $trashedUsers = User::onlyTrashed()->get();
        return view('admin.user.trash', compact('trashedUsers'));
        }

        // Restore data
        public function restoreUser($id)
        {
        $user = User::withTrashed()->find($id);
        if (!empty($user)){
            $user -> restore();
            return redirect('users');
        }
    }

        // permanently delete a trashed data
        public function deleteUser($id)
        {
        $user = User::withTrashed()->find($id);
            $user->forceDelete();
            return redirect()->back()->with('message', 'User permanently deleted');

        }

}


