<?php namespace App\Http\Controllers;
use App\Course;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
class CourseController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {

  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    return view('courses');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Requests\CreateCourseRequest $request)
  {
//    return "stored";
      $course = new Course();
    $course->sub_id1 = $request->sub_id1;
    $course->sub_id2 = $request->sub_id2;
    $course->sub_id3 = $request->sub_id3;
    $course->sub_id4 = $request->sub_id4;
    $course->sub_id5 = $request->sub_id5;
    $course->sub_id6 = $request->sub_id6;
    $course->sub_id7 = $request->sub_id7;
    $course->sub_id8 = $request->sub_id8;
    $course->sub_id9 = $request->sub_id9;
    $course->sub_id10 = $request->sub_id10;
    $course->sub_id11 = $request->sub_id11;
    $course->sub_id12 = $request->sub_id12;
    $course->sub_id13 = $request->sub_id13;
    $course->sub_id14 = $request->sub_id14;

      $course->t_id1 = $request->t_id1;
      $course->t_id2 = $request->t_id2;
      $course->t_id3 = $request->t_id3;
      $course->t_id4 = $request->t_id4;
      $course->t_id5 = $request->t_id5;
      $course->t_id6 = $request->t_id6;
      $course->t_id7 = $request->t_id7;
      $course->t_id8 = $request->t_id8;
      $course->t_id9 = $request->t_id9;
      $course->t_id10 = $request->t_id10;
      $course->t_id11 = $request->t_id11;
      $course->t_id12 = $request->t_id12;
      $course->t_id13 = $request->t_id13;
      $course->t_id14 = $request->t_id14;

      $course->save();
//      return "data has been saved";
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

  public function course_list()
  {
    $courses=Course::all();
    return view('local.course_list',compact('courses'));
  }
  
}

?>