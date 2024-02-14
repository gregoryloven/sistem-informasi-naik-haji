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
            $data = Registration::where('status', 1)->get();
            $data2 = Registration::whereIn('status', [0,2])
                ->orderby('updated_at', 'desc')
                ->get();
            return view('registration.index', compact('data','data2'));
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::user()->type == 1) {
            $user = Auth::user()->id;
            $data = Registration::where('user_id', $user)->get();
            $pack = Package::all();
            return view('enduser.create', compact('data', 'pack'));
        } else {
            $data = Package::all();
            return view('package.index', compact('data'));
        }
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
        // $data->package_id = $request->package_id;
        $data->nama_lengkap = $request->nama_lengkap;
        $data->tempat_lahir = $request->tempat_lahir;
        $data->tanggal_lahir = $request->tanggal_lahir;
        $data->alamat = $request->alamat;
        $data->nomor_validasi = $request->nomor_validasi;
        $data->tanggal_keberangkatan = Carbon::now()->addYears(29);
        // $cek = Package::where('id', $request->package_id)->first();
        // $data->tanggal_keberangkatan = Carbon::now()->addYears($cek->tahun);

        $data->status = 1;

        $file = $request->file('ktp');
        $imgFolder = 'lampiran/';
        $extension = $request->file('ktp')->extension();
        $imgFile = time() . "_" . $file->getClientOriginalName() . "." . $extension;
        $file->move($imgFolder, $imgFile);
        $data->ktp = $imgFile;

        $file2 = $request->file('kk');
        $imgFolder2 = 'lampiran/';
        $extension2 = $request->file('kk')->extension();
        $imgFile2 = time() . "_" . $file2->getClientOriginalName() . "." . $extension2;
        $file2->move($imgFolder2, $imgFile2);
        $data->kk = $imgFile2;

        $file3 = $request->file('akta_kelahiran');
        $imgFolder3 = 'lampiran/';
        $extension3 = $request->file('akta_kelahiran')->extension();
        $imgFile3 = time() . "_" . $file3->getClientOriginalName() . "." . $extension3;
        $file3->move($imgFolder3, $imgFile3);
        $data->akta_kelahiran = $imgFile3;

        $file4 = $request->file('ijazah');
        $imgFolder4 = 'lampiran/';
        $extension4 = $request->file('ijazah')->extension();
        $imgFile4 = time() . "_" . $file4->getClientOriginalName() . "." . $extension4;
        $file4->move($imgFolder4, $imgFile4);
        $data->ijazah = $imgFile4;

        $file7 = $request->file('akta_nikah');
        $imgFolder7 = 'lampiran/';
        $extension7 = $request->file('akta_nikah')->extension();
        $imgFile7 = time() . "_" . $file7->getClientOriginalName() . "." . $extension7;
        $file7->move($imgFolder7, $imgFile7);
        $data->akta_nikah = $imgFile7;

        $file6 = $request->file('foto_selfie');
        $imgFolder6 = 'lampiran/';
        $extension6 = $request->file('foto_selfie')->extension();
        $imgFile6 = time() . "_" . $file6->getClientOriginalName() . "." . $extension6;
        $file6->move($imgFolder6, $imgFile6);
        $data->foto_selfie = $imgFile6;

        // Validasi ukuran file
        $maxFileSize = 5 * 1024; // 5 MB dalam kilobytes
        if ($file->getSize() > $maxFileSize || $file2->getSize() > $maxFileSize || $file3->getSize() > $maxFileSize || $file4->getSize() > $maxFileSize || $file7->getSize() > $maxFileSize || $file6->getSize() > $maxFileSize) {
            return back()->withToastError('Pendaftaran Naik Haji Gagal. File melebihi 5 mb');
        }

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
