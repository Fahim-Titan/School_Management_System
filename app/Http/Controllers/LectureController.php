<?php namespace App\Http\Controllers;

use App\Lecture;
use Carbon\Carbon;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
class LectureController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    return view('lectures');
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Requests\UploadLecturesRequest $request)
  {
    $lecture = new Lecture();
    $lecture->t_id = $request->t_id;
    $lecture->c_id = $request->c_id;
    $lecture->sub_id = $request->sub_id;
    if($request->hasFile('file')){
      $file = Input::file('file');
      $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());
      $name = $timestamp . '-' . $file->getClientOriginalName();
      $lecture->file = $name;
      $file->move(public_path(). '/lectures', $name);
    }
    $lecture->save();
    $confirm = "data has been uploaded successfully";
    return view('teacher.home', compact('confirm'));
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

  public function show_lecture()
  {
    $lectures = new Lecture();
    $lectures = Lecture::all();
    return view('teacher.lectures_list',compact('lectures'));
  }

}

?>