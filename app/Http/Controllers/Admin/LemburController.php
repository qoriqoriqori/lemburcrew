<?php

namespace App\Http\Controllers\Admin;
 
use App\Models\Frontend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\LemburController;
use App\Exports\AdminExport;
use Maatwebsite\Excel\Facades\Excel;

class LemburController extends Controller
{
    public function index()
    {
        $lembur = Frontend::where('status', '0')->get();
        return view('admin.lembur.index', compact('lembur'));
    }

    public function view($id)
    {
        $lembur = Frontend::where('id', $id)->first(); 
        return view('admin.lembur.view', compact('lembur'));
    }

    public function updatelembur(Request $request, $id)
    {
        $lembur = Frontend::find($id);
        $lembur->status = $request->input('lembur_status');
        $lembur->update();
        return redirect('lembur')->with('status', "Formulir Lembur Disetujui");
    }

    public function historylembur()
    {
        $lembur = Frontend::where('status', '1')->get();
        return view('admin.lembur.history',compact('lembur'));
    }

    public function export() 
    {
        // return('hellow');
        return Excel::download(new AdminExport, 'lembur.xlsx');
    }
}
