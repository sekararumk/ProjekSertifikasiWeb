<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ClipperVacationsController extends Controller
{
    public function index(){
        $data_datauser = \App\DataUser::all();
        return view('ClipperVacations.index', ['data_datauser' => $data_datauser]);
        
    }

    public function create(){
        return view('ClipperVacations.create');
    }


    public function store(Request $request){

        $validatedData = $request->validate([
            'nama_tempat' => 'required|max:255',
            'nama_penulis' => 'required|max:255',
            'review' => 'required|max:255',
            'media' => 'file|mimes:jpeg,png,jpg|max:5000',
        ]);

        $validatedData['media']=$request->file('media')->store('post-media');

            \App\DataUser::create([
            'nama_tempat' => $validatedData['nama_tempat'],
            'nama_penulis' => $validatedData['nama_penulis'],
            'review' => $validatedData['review'],
            'media' => $validatedData['media'],
        ]);
        return redirect('/cvapp')->with('success','Your data has been saved.');
    }


    public function edit($id){
        $data_all= \App\DataUser::find($id);
        return view('ClipperVacations.edit',['data_all' => $data_all]);
        
    }

    public function update(Request $request, $id){
        $request->media = $request->file('media')->store('post-media');
        $data_all = \App\DataUser::find($id);
        $data_all->update($request->all());

        return redirect('/cvapp')->with('success','Your data has been updated.');
        
    }

    public function destroy($id){
        $data_all = \App\DataUser::find($id);
        $data_all->delete($data_all);
        return redirect('/cvapp')->with('success','Your data has been deleted.');
    }
}
