<?php

namespace App\Http\Controllers;

use App\Models\Notes;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $notes=Notes::query()->orderBy('created_at','asc')->get();
        return view('note.index',
        [
            'notes'=>$notes
        ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('note.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data=$request->validate([
            'note'=>'required',
        ]);
        $data['user_id']=1;
        $note=Notes::create($data);
        if ($note){
            return redirect('/')->with('message','Successfully Added');
        }
        else{
            return  back();
        }



    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $note=Notes::find($id);
        return view('note.show',[
            'note'=>$note
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $note=Notes::find($id);
        return view('note.edit',
        [
            'note'=>$note
        ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $note=Notes::find($id);
        $note->note=$request->note;
        $status=$note->update();
        if ($status){
            return to_route('note.show',$id)->with('message','Note Updated success');
        }
        else{
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $note=Notes::find($id);
        $note->delete();
        return redirect('/')->with('message','successfully deleted');
    }
}
