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
                            Ubah Formulir Pendaftaran Sakramen Perkawinan
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
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label>Foto / Scan KTP</label>
                                    <input class="form-control" value="{{$data->ktp}}" id='ktp' name='ktp' readonly>
                                    <img id="output" src="{{asset('lampiran/'.$data->ktp)}}" width="100px" height="100px">
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label>Foto / Scan Kartu Keluarga</label>
                                    <input class="form-control" value="{{$data->kk}}" id='kk' name='kk' readonly>
                                    <img id="output2" src="{{asset('lampiran/'.$data->kk)}}" width="100px" height="100px">
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label>Foto / Scan Akta Kelahiran</label>
                                    <input class="form-control" value="{{$data->akta_kelahiran}}" id='akta_kelahiran' name='akta_kelahiran' readonly>
                                    <img id="output3" src="{{asset('lampiran/'.$data->akta_kelahiran)}}" width="100px" height="100px">
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label>Foto / Scan Dokumen BPIH</label>
                                    <input class="form-control" value="{{$data->dokumen_bpih}}" id='dokumen_bpih' name='dokumen_bpih' readonly>
                                    <img id="output4" src="{{asset('lampiran/'.$data->dokumen_bpih)}}" width="100px" height="100px">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Tanggal Keberangkatan</label>
                                    <input type="date" class="form-control" value="{{$data->tanggal_keberangkatan}}" id='tanggal_keberangkatan' name='tanggal_keberangkatan' readonly required>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Paket</label>
                                    <input type="text" class="form-control" value="{{$data->package->name}} {{$data->package->tahun}}" id='package_id' name='package_id' placeholder="Paket" readonly required>
                                </div>
                            </div>
                            @if($data->status == 1)
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="d-flex justify-content-end">
                                    <form action="/registration/accept" class="ml-2" method="post">
                                        @csrf
                                        <input type="text" name="id" class="d-none" value="{{$d->id}}">
                                        <button class="btn btn-success" type="submit">Approve</button>
                                    </form>
                                    <form action="/registration/decline" class="ml-2" method="post">
                                        @csrf
                                        <input type="text" name="id" class="d-none" value="{{$d->id}}">
                                        <a href="#modal{{$d->id}}" data-toggle="modal" class="btn btn-danger">Decline</a>
                                    </form>
                                </div>
                            </div><br>
                            @elseif ($data->status == 2)
                                <div class="alert alert-success" role="alert">
                                    @if($d->status == 2) Diterima
                                </div>
                            @else
                                <div class="alert alert-danger" role="alert">
                                    @if($d->status == 0) Ditolak
                                </div>
                                <small><b>Pada:</b> {{tanggal_indonesia($d->updated_at)}}, {{waktu_indonesia($d->updated_at)}} WITA
                                <br><b>Alasan:</b> {{$d->alasan_penolakan}}</small>
                            @endif

                            <!-- EDIT WITH MODAL -->
                            <div class="modal fade" id="modal{{$d->id}}" tabindex="-1" role="basic" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content" >
                                        <form role="form" method="POST" action="{{ url('registration/decline') }}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                <h4 class="modal-title">Penolakan Pendaftaran Naik Haji</h4>
                                            </div>
                                            <div class="modal-body">
                                                @csrf
                                                <label>Alasan Penolakan:</label>
                                                <input type="hidden" name="id" value="{{$d->id}}">
                                                <textarea name="alasan_penolakan" class="form-control" id="" cols="30" rows="10" required></textarea>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-info">Submit</button>
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    </div>
                </div>
            </div>

        </div>

    </section>
</div>

@endsection