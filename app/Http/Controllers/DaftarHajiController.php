<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use App\Models\Package;
use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;

class DaftarHajiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->type == 1) {
            $pack = Package::all();
            return view('enduser.index', compact('pack'));
        } else {
            $data = Package::all();
            return view('package.index', compact('data'));
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user()->id;
        $data = Registration::where('user_id', $user)->get();
        $pack = Package::all();
        return view('enduser.create', compact('data', 'pack'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Registration();
        $data->user_id = Auth::user()->id;
        $data->package_id = $request->package_id;
        $data->nama_lengkap = $request->nama_lengkap;
        $data->tempat_lahir = $request->tempat_lahir;
        $data->tanggal_lahir = $request->tanggal_lahir;
        $data->alamat = $request->alamat;

        $cek = Package::where('id', $request->package_id)->first();
        if ($cek->tahun == 5) {
            $data->tanggal_keberangkatan = Carbon::now()->addYears(5);
        } else {
            $data->tanggal_keberangkatan = Carbon::now()->addYears(10);
        }

        $data->status = 1;

        $file = $request->file('ktp');
        $imgFolder = 'lampiran/';
        $extension = $request->file('ktp')->extension();
        $imgFile = time()."_".$request->get('ktp').".".$extension;
        $file->move($imgFolder,$imgFile);
        $data->ktp = $imgFile;

        $file2 = $request->file('kk');
        $imgFolder2 = 'lampiran/';
        $extension2 = $request->file('kk')->extension();
        $imgFile2 = time()."_".$request->get('kk').".".$extension2;
        $file2->move($imgFolder2,$imgFile2);
        $data->kk = $imgFile2;

        $file3 = $request->file('akta_kelahiran');
        $imgFolder3 = 'lampiran/';
        $extension3 = $request->file('akta_kelahiran')->extension();
        $imgFile3 = time()."_".$request->get('akta_kelahiran').".".$extension3;
        $file3->move($imgFolder3,$imgFile3);
        $data->akta_kelahiran = $imgFile3;

        $file4 = $request->file('dokumen_bpih');
        $imgFolder4 = 'lampiran/';
        $extension4 = $request->file('dokumen_bpih')->extension();
        $imgFile4 = time()."_".$request->get('dokumen_bpih').".".$extension4;
        $file4->move($imgFolder4,$imgFile4);
        $data->dokumen_bpih = $imgFile4;

        $data->save();

        return back()->withToastSuccess('Pendaftaran Naik Haji Berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Registration::find($id);

        return view('enduser.detail', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
