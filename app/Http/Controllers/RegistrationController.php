<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;
use Auth;

class RegistrationController extends Controller
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
            $data = Registration::where('status', 1)->get();
            $data2 = Registration::whereIn('status', [0,2])
                ->orderby('updated_at', 'desc')
                ->get();
    
            return view('registration.index', compact('data','data2'));
        } else {
            return redirect()->back();
        }
        
    }

    public function accept(Request $request)
    {
        $data = Registration::find($request->id);
        $data->status = 2;
        $data->save();

        return back()->withToastSuccess('Pendaftaran Naik Haji telah Disetujui');
    }

    public function decline($id)
    {
        $data = Registration::find($id);
        return view('registration.decline', compact('data'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Registration::find($id);
        return view('registration.detail', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function edit(Registration $registration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Registration $registration)
    {
        $registration->update([
            'status' => 0,
            'alasan_penolakan' => $request->alasan_penolakan,
        ]);

        return redirect()->route('registration.index')->withToastSuccess('Pendaftaran Naik Haji telah Ditolak');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function destroy(Registration $registration)
    {
        //
    }

}
