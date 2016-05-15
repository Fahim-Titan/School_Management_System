<?php namespace App\Http\Controllers;
use App\Subject;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
class SubjectController extends Controller {

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
    return view ('subjects');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Requests\CreateSubjectRequest $request)
  {
    $subject = new Subject();
      $subject->sub_name = $request->sub_name;
      $subject->textbook_name = $request->textbook_name;
      $subject->credit = $request->credit;

      $subject->save();
    return  "data has been saved successfully";
//      return view('teacher');
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