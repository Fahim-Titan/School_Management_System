<?php namespace App\Http\Controllers;
//use App\Admin;
use App\Notice;
use Carbon\Carbon;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
class NoticeController extends Controller {

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
    return view('notices');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Requests\CreateNoticeRequest $request)
  {
//    $admin = new Admin();
    $notice = new Notice();
    $notice->n_data=$request->n_data;
    $notice->date = $request->date;
    $notice->save();
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
     return view('admin.home');
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

  public function notice_list()
  {
    $notices = Notice::all();
    return view('local.notice_list',compact('notices'));
  }
  
}

?>