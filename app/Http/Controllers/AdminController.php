<?php namespace App\Http\Controllers;
use App\User;
use App\Admin;
use Carbon\Carbon;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
class AdminController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    return view('admin.home');
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
      return view('admins');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Requests\CreateAdminRequest $request)
  {
     $admin = new Admin();
    $admin->name = $request->name;
    $admin->gender = $request->gender;
    $admin->blood_type = $request->blood_type;
    $admin->email  = $request->email;
    $admin->dob = $request->dob;
    $admin->phone_number = $request->phone_number;
    $admin->address = $request->address;
    $admin->password = bcrypt($request-> password);
    if($request->hasFile('image')){
      $file = Input::file('image');
      $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());
      $name = $timestamp . '-' . $file->getClientOriginalName();
      $admin->image = $name;
      $file->move(public_path() . '/admin_images', $name);
    }
    $admin->save();
    $user = new User;
    $user->name = $request->name;
    $user->email = $request->email;
    $user->password =  bcrypt($request-> password);
    $user->roles = "admin";
    $admin->users()->save($user);

    return view('admin.home');
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