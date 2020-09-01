<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\User;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $students=Student::all();
         $users=user::all();

    
     
        return view('Backend.student.list',compact('students','users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    
        return view('Backend.student.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $validator=$request->validate([
            'email'=>['required','string','max:255','min:3','unique:users'],
            'photo'=>['required','mimes:jpeg,bmp,png,jpg']
        ]);

        if($validator) {
         $name=$request->name;
         $phone=$request->phone;
         $email=$request->email;
         $password=$request->password;
         $address=$request->address;
         $gender=$request->gender;
         $dob=$request->dob;
         $gname=$request->gname;
         $gphone=$request->gphone;
         $goccupation=$request->goccupation;
         $gaddress=$request->gaddress;
         $gnrc=$request->gnrc;
         $gnrc=$request->gnrc;
         $photo=$request->photo;
        

       //File Upload
       $imageName=time().'.'.$photo->extension(); // making random photo name that include extension
       $photo->move(public_path('images/student'),$imageName);
       // send to desire folder

       $filepath ='images/student/'.$imageName;


       // insert date_add()
       $user= new User; 
       $user->name=$name; 
       $user->email=$email;
       $user->password=$password;
       $user->save();
       $uid=$user->id;

       $student=new Student;
       $student->user_id=$uid;  
       $student->address=$address; 
       $student->phone=$phone; 
       $student->gender=$gender; 
       $student->dob=$dob; 
       $student->photo=$filepath; 
       $student->guardian_name=$gname; 
       $student->guardian_phone=$gphone; 
       $student->guardian_address=$gaddress; 
       $student->guardian_nrc=$gnrc; 
       $student->guardian_occupation=$goccupation; 
       $student->save();
      



       return redirect()->route('backside.student.index')->with("successMsg","New Student is Added to your data");
   }
   else{
    return redirect::back()->withErrors($validator); 
   }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
