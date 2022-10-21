<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index(Request $request){
        if($request->has('search')){
            $data = Mahasiswa::where('nim','LIKE','%' . $request->search .'%')->paginate(5);
        }else{
            $data = Mahasiswa::paginate(5);
        }

        return view('mahasiswa.home',compact('data'));
    }

    public function create(){
        $data = Mahasiswa::all();
        return view('mahasiswa.create');
    }

    public function store(Request $request){
        $data = Mahasiswa::create($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('imagemahasiswa/',$request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('mahasiswa.index');
    } 

    public function edit($id){
        $data  = Mahasiswa::find($id);
        return view('mahasiswa.update',compact('data'));
    }

    public function update(Request $request, $id){
        $data = Mahasiswa::find($id);
        $data->update($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('imagemahasiswa/',$request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->update();
        }

        return redirect()->route('mahasiswa.index');
    } 

    public function show($id){
        $row  = Mahasiswa::find($id);
        return view('mahasiswa.show',compact('row'));
    }

    public function destroy($id){
        $data = Mahasiswa::find($id);
        $data->delete();
        return redirect()->route('mahasiswa.index');
    }
}
