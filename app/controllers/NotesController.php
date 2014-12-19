<?php
class NotesController extends BaseController {




  public function getIndex(){

    $notes = DB::table('notes')->get();
    return View::make('index')->with('notes',$notes);

  }

  public function postCreate(){

    $notes = Input::get('note');
    DB::table('notes')->insert(['note' => $notes]);
    return Redirect::to('notes');
  }

  public function getDelete(){
    $delname = Input::get('note');
    $selected = DB::table('notes')->delete();
    return Redirect::to('notes');

  }



}
