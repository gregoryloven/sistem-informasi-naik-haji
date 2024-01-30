<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;
use Auth;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user()->type;
        if ($user == 0) {
            $data = Package::all();
            return view('package.index', compact('data'));
        } else {
            return redirect()->back();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Package();
        $data->nama = $request->nama;
        $data->tahun = $request->tahun;
        $data->save();

        return redirect()->route('package.index')->withToastSuccess('Data paket berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function show(Package $package)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function edit(Package $package)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Package $package)
    {
        $package->update([
            'nama' => $request->nama,
            'tahun' => $request->tahun,
        ]);

        return redirect()->route('package.index')->withToastSuccess('Data paket berhasil diubah');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function destroy(Package $package)
    {
        try {
            $package->delete();
            return redirect()->route('package.index')->withToastSuccess('Data paket berhasil dihapus');
        } catch (\Exception $e) {
            return redirect()->route('package.index')->withToastError('Data paket gagal dihapus karena digunakan pada data lain');
        }
    }

    public function EditForm(Request $request)
    {
        $id = $request->get("id");
        $data = Package::find($id);

        return response()->json(array(
            'status'=>'oke',
            'msg'=>view('package.EditForm',compact('data'))->render()),200);
    }
}
