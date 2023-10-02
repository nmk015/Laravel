<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\students;
class StudentRegister extends Controller
{
    
    public function registerPage()
    { 
      return view('register');
    }


    public function register(request $request) 
    {
      $request->validate(
        [
          'name' => 'required|string|max:255',
          'mobile' => 'required|string|max:15',
          'password' => 'required|string|min:6',
          'class' => 'required|string',
          'subjects' => 'required|array|min:1', // Ensure subjects is an array with at least one value
          //'subjects*' => 'in:Math,Science,History', // Subjects must be one of these values
          'gender' => 'required|in:Male,Female',
          'profile_pic' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Max size 2MB
          'address' => 'required|string|max:500',
        ]
        );

      echo"<pre>";  
      print_r($request->all());

      /*$customers = new customers;
      $customers->email = $req['email'];
      $customers->password = md5($req['psw']);
      $customers->save();*/
      // Handle profile picture upload
      $profilePicPath = null;
      if ($request->hasFile('profile_pic')) {
          $profilePicPath = $request->file('profile_pic')->store('profile_pics', 'public');
      }

      // Create a new Student instance and save it to the database
      $students = students::create([
          'name' => $request->input('name'),
          'mobile' => $request->input('mobile'),
          'password' => md5($request->input('password')), // Hash the password before storing
          'class' => $request->input('class'),
          'subjects' => json_encode($request->input('subjects')), // Store subjects as JSON array
          'gender' => $request->input('gender'),
          'profile_pic' => $profilePicPath,
          'address' => $request->input('address'),
        ]);
      return redirect('/students');
    }

    public function view()
    {
      $students = students::all();
      $data = compact('students');
      return view('students-view')->with($data);
    }

    public function delete($id)
    {
      $students = students::find($id)->delete();
      return redirect()->back();
    }

    public function edit($id)
    {
      $students = students::find($id);
      return view('edit', compact('students'));
    }

    public function update(Request $req,$id)
    {
      $req->validate(
        [
          'name' => 'required|string|max:255',
          'mobile' => 'required|string|max:15',
          'class' => 'required|string',
          'subjects' => 'required|array|min:1', // Ensure subjects is an array with at least one value
          //'subjects*' => 'in:Math,Science,History', // Subjects must be one of these values
          'gender' => 'required|in:Male,Female',
          'profile_pic' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Max size 2MB
          'address' => 'required|string|max:500',
        ]
        );

      $students = students::find($id);
       // Handle profile picture upload
   /* if ($req->hasFile('profile_pic')) {
      // Delete the old profile picture (if necessary)
       Storage::disk('public')->delete($students->profile_pic);

      // Store the new profile picture
     // $students->profile_pic = $request->file('profile_pic')->store('profile_pics', 'public');
     
     
      $profilePicPath = $req->file('profile_pic')->store('profile_pics', 'public');
      
  }*/
  //$profilePicPath = null;
  $oldProfilePicPath = $students->profile_pic;
      if ($req->hasFile('profile_pic')) {
          // Delete the old profile picture (if necessary)
          Storage::disk('public')->delete($students->profile_pic);
          $profilePicPath = $req->file('profile_pic')->store('profile_pics', 'public');
      }else {
        // If no new picture is uploaded, use the old profile picture path
        $profilePicPath = $oldProfilePicPath;
    }

      $students->name = $req['name'];
      $students->mobile = $req['mobile'];
      $students->password = md5($req['password']);
      $students->class = $req['class'];
      $students->subjects = $req['subjects'];
      $students->gender = $req['gender'];
      $students->profile_pic = $profilePicPath;
      $students->address = $req['address'];
      $students->update();
      return redirect('students');
    }
}
