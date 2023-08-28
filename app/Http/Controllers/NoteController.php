<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NoteController extends Controller
{
    public function index(){
        return view('front.notes.index');
    }
    public function createpage(){
        return view('front.notes.create');
    }
    public  function addNote(Request $request){
        /*
        $validator=Validator::make($request->all(),[
            'title'=>'required|min:10|max:30',
            'content'=>'required|min:20|max:60'
        ]);
        */
        $request->validate(
            [
                //doğrulamak istediğim key->kurallarım
                'title'=>'required | min:13 |max:20',
                'content'=>'required'
            ]
        );
         $note=new Note();
         $note->user_id=Auth::id();
         $note->title=$request->title;
         $note->content=$request->content;
         $note->save();
        return redirect()->route('notes.index')->with('success','Başarıyla gönderildi');
    }
}
