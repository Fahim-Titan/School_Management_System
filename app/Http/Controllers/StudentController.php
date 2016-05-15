<?php namespace App\Http\Controllers;
use App\Student;
use App\User;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
//use Request;
use Carbon\Carbon;


class StudentController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    return view('student.home');
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
        return view('students');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param Requests\CreateStudentRequest $request
   * @return Response
   */
  public function store(Requests\CreateStudentRequest $request)
   {
     ##first try...... succeed
////    return "stored";
//    $input = Request::all();
////    return $input;
//    Student::create($input);
//    return redirect('student');


##image uploading procedure
    $student = new Student();
    $student->name = $request->name;
    $student->gender = $request->gender;
    $student->blood_type = $request->blood_type;
    $student->email = $request->email;
    $student->dob = $request->dob;
    $student->phone_number = $request->phone_number;
    $student->address = $request->address;
    $student->father_name =$request->father_name;
    $student->mother_name = $request->mother_name;
    $student->gurdian_phone_number = $request->gurdian_phone_number;
    $student->password = $request-> password;
    if($request->hasFile('image')) {
      $file = Input::file('image');
      $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());
      $name = $timestamp . '-' . $file->getClientOriginalName();
      $student->image = $name;
      $file->move(public_path() . '/student_images', $name);
//      $image_name = $student->s_id.'.'.$request->file('image')->getClientOriginalExtension();
//      $request->file('image')->move(public_path().'/student_images',$image_name);
    }
//    $student->$image_name;
    $student->save();
    //return "data has been saved successfully in student table";

    $user = new User;
    $user->name = $request->name;
    $user->email = $request->email;
    $user->password = bcrypt($request-> password);
      $user->roles = "student";
      $student->users()->save($user);
      return "data has been saved successfully in student table and also in user table";
  }


  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
    
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    
  }
  
}

?>