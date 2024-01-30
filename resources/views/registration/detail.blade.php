@extends('layouts.admin')

@push('css')
<style>
    #myTable td {text-align: center; vertical-align: middle;}
</style>
@endpush

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
          <h1>Detail Pendaftaran Naik Haji</h1>
        </div>

        <div class="section-body">

            <div class="row mb-2 mt-4">
                <div class="col-md-12">
                    <div class="card shadow">
                        <div class="card-header py-3">
                            Detail Pendaftaran Pendaftaran Naik Haji
                        </div>
                    <div class="card-body">
                        <div class="row gutters">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Nama Lengkap</label>
                                    <input type="hidden" class="form-control" id='id' name='id' placeholder="Type your name" value="{{$data->id}}">
                                    <input type="text" class="form-control" value="{{$data->nama_lengkap}}" id='nama_lengkap' name='nama_lengkap' placeholder="Nama Lengkap" readonly required>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Tempat Lahir</label>
                                    <input type="text" class="form-control" value="{{$data->tempat_lahir}}" id='tempat_lahir' name='tempat_lahir' placeholder="Tempat Lahir" readonly required>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Tanggal Lahir</label>
                                    <input type="date" class="form-control" value="{{$data->tanggal_lahir}}" id='tanggal_lahir' name='tanggal_lahir' readonly required>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <input type="text" class="form-control" value="{{$data->alamat}}" id='alamat' name='alamat' placeholder="Alamat" readonly required>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Foto / Scan KTP</label>
                                    <input class="form-control" value="{{$data->ktp}}" id='ktp' name='ktp' readonly>
                                    <img id="output" src="{{asset('lampiran/'.$data->ktp)}}" width="100px" height="100px">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Foto / Scan Kartu Keluarga</label>
                                    <input class="form-control" value="{{$data->kk}}" id='kk' name='kk' readonly>
                                    <img id="output2" src="{{asset('lampiran/'.$data->kk)}}" width="100px" height="100px">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Foto / Scan Akta Kelahiran</label>
                                    <input class="form-control" value="{{$data->akta_kelahiran}}" id='akta_kelahiran' name='akta_kelahiran' readonly>
                                    <img id="output3" src="{{asset('lampiran/'.$data->akta_kelahiran)}}" width="100px" height="100px">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Foto / Scan Dokumen BPIH</label>
                                    <input class="form-control" value="{{$data->dokumen_bpih}}" id='dokumen_bpih' name='dokumen_bpih' readonly>
                                    <img id="output4" src="{{asset('lampiran/'.$data->dokumen_bpih)}}" width="100px" height="100px">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Tanggal Keberangkatan</label>
                                    <input type="text" class="form-control" value="{{tanggal_indonesia($data->tanggal_keberangkatan)}}, {{waktu_indonesia($data->tanggal_keberangkatan)}}" id='tanggal_keberangkatan' name='tanggal_keberangkatan' readonly required>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Paket</label>
                                    <input type="text" class="form-control" value="{{$data->package->nama}} ({{$data->package->tahun}} Tahun)" id='package_id' name='package_id' placeholder="Paket" readonly required>
                                </div>
                            </div>
                            @if($data->status == 1)
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="d-flex justify-content-end">
                                    <form action="/registration/decline/{{$data->id}}" class="ml-2" method="post">
                                        @csrf
                                        <input type="text" name="id" class="d-none" value="{{$data->id}}">
                                        <button class="btn btn-danger" type="submit">Decline</button>
                                    </form>
                                    <form action="/registration/accept" class="ml-2" method="post">
                                        @csrf
                                        <input type="text" name="id" class="d-none" value="{{$data->id}}">
                                        <button class="btn btn-success" type="submit">Approve</button>
                                    </form>
                                </div>
                            </div><br>
                            @elseif ($data->status == 2)
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="d-flex justify-content-end align-items-center">
                                    <div class="alert alert-success" role="alert">
                                        @if($data->status == 2) Diterima @endif
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mt-2">
                                    <small>
                                        <b>Pada:</b> {{tanggal_indonesia($data->updated_at)}}, {{waktu_indonesia($data->updated_at)}}
                                    </small>
                                </div>
                            </div>
                            @else
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="d-flex justify-content-end align-items-center">
                                    <div class="alert alert-danger" role="alert">
                                        @if($data->status == 0) Ditolak @endif
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mt-2">
                                    <small>
                                        <b>Pada:</b> {{tanggal_indonesia($data->updated_at)}}, {{waktu_indonesia($data->updated_at)}}
                                        <br><b>Alasan:</b> {{$data->alasan_penolakan}}
                                    </small>
                                </div>
                            </div>
                            @endif



                        </div>
                    </div>
                    </div>
                </div>
            </div>

        </div>

    </section>
</div>

@endsection
