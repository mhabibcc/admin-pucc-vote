<?php

namespace App\Http\Controllers\Anggota;

use App\Http\Controllers\Controller;
use App\Model\AnggotaModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AnggotaController extends Controller
{
    /**
     * Index page
     */
    public function allData(Request $request)
    {
        $anggota = new AnggotaModel();
        if($request->q!=null){
            $anggota = $anggota->where('nama','like','%'.$request->q.'%')
                                ->orWhere('username','like','%'.$request->q.'%')
                                ->orWhere('email','like','%'.$request->q.'%');
        }

        $anggota = $anggota->latest()->paginate(10);

        return view('anggota.get-all',compact('anggota','request'));
    }

    public function edit($id)
    {
        $id = base64_decode($id);
        $anggota = AnggotaModel::find($id);

        return view('anggota.edit',compact('anggota'));
    }

    public function saveEdit(Request $request)
    {
        $id = base64_decode($request->id);

        $anggota = AnggotaModel::find($id);

        $anggota->nama      = $request->nama;
        $anggota->username  = $request->username;
        $anggota->email     = $request->email;
        // $anggota->password  = ($request->password != null || $request->password != '') ? Hash::make($request->password);

        $anggota->save();

        $request->session()->flash('success','Product created successfully.');
        return redirect()->route('anggota.all')->with('success','Product created successfully.');
    }
}
