<?php
 
namespace App\Http\Controllers\Frontend;

use App\Models\Frontend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Frontend\FrontendController;
use Illuminate\Support\Facades\File;

class FrontendController extends Controller
{
     public function index()
    {
        $frontend = Frontend::all();
        // return $frontend;
        return view('frontend.index', compact('frontend'));
        // return view('frontend.index');
    }

    public function add()
    {
        return view('frontend.add');
    }

    public function insert(request $request)
    {
        //dd($request->all());
        $frontend = new Frontend();

        $frontend->tanggal = $request->input('tanggal');
        $frontend->nik = $request->input('nik');
        $frontend->nama = $request->input('nama');
        $frontend->jam_mulai = $request->input('jam_mulai');
        $frontend->jam_selesai = $request->input('jam_selesai');
        $frontend->total_jam = $request->input('total_jam');
        $frontend->save();
        return redirect('/')->with('status',"Formulir lembur Sukses");
    }

    public function edit($id)
    {
        $frontend = Frontend::find($id);
        return view('frontend.edit', compact('frontend'));
    }

    public function update(Request $request, $id)
    {
        $frontend = Frontend::find($id);

        $frontend->tanggal = $request->input('tanggal');
        $frontend->nik = $request->input('nik');
        $frontend->nama = $request->input('nama');
        $frontend->jam_mulai = $request->input('jam_mulai');
        $frontend->jam_selesai = $request->input('jam_selesai');
        $frontend->total_jam = $request->input('total_jam');
        $frontend->update();
        return redirect('/')->with('status',"Formulir lembur berhasil diedit");
    }

    public function delete($id)
    {
        $frontend = Frontend::find($id);
        
        $frontend->delete();
        return redirect('/')->with('status',"Formulir berhasil dihapus");
    }
}
