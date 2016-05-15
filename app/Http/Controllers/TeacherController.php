<?php namespace App\Http\Controllers;


use App\User;
use App\Teacher;
use Carbon\Carbon;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
//use App\Http\Requests\Request;
class TeacherController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $emails = Teacher::all();
    return view('teacher.home',compact('emails'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    return view('teachers');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Requests\CreateTeacherRequest $request)
  {
//    return "stored";
    $teacher = new Teacher();
  $teacher->name = $request->name;
    $teacher->gender = $request->gender;
    $teacher->blood_type = $request->blood_type;
    $teacher->email  = $request->email;
    $teacher->dob = $request->dob;
    $teacher->phone_number = $request->phone_number;
    $teacher->address = $request->address;
    $teacher->qualification = $request->qualification;
    $teacher->password = bcrypt($request-> password);

    if($request->hasFile('image')){
      $file = Input::file('image');
      $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());
      $name = $timestamp . '-' . $file->getClientOriginalName();
      $teacher->image = $name;
      $file->move(public_path() . '/teacher_images', $name);
    }

    $teacher->save();

    $user = new User;
    $user->name = $request->name;
    $user->email = $request->email;
    $user->password =  bcrypt($request-> password);
    $user->roles = "teacher";
    $teacher->users()->save($user);

    return "data has been saved successfully in teacher table and also in user table";

   //return "data has been uploaded successfully";
    //return $this->create()->with('success', 'Image Uploaded Successfully');
  }




  public function upload_lecture(){
    return view('lectures');
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

  public function teacher_list()
  {
    $teacher = Teacher::all();
    return view('local.teacher_list',compact('teacher'));
  }
  
}

?>