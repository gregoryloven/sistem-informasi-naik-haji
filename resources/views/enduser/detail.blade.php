@extends('layouts2.enduser', ['includeNavbar' => false])

@section('content')
    
    <section class="contact-section section-padding" id="section_6">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12 mx-auto">
                    <h2 class="text-center mb-4">Detail Pendaftaran Naik Haji</h2>

                    <div class="tab-content shadow-lg mt-5" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-ContactForm" role="tabpanel" aria-labelledby="nav-ContactForm-tab">
                            <form class="custom-form contact-form mb-5 mb-lg-0" action="" method="post" role="form" enctype="multipart/form-data">    
                                <div class="contact-form-body">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <label>Nama Lengkap</label>
                                            <input type="text" value="{{$data->nama_lengkap}}" name="nama_lengkap" id="nama_lengkap" class="form-control" placeholder="Nama Lengkap" readonly>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <label>Paket</label>
                                            <input type="text" value="{{$data->package->nama}} ({{$data->package->tahun}} Tahun)" name="nama_lengkap" id="nama_lengkap" class="form-control" placeholder="Nama Lengkap" readonly>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <label>Tempat Lahir</label>
                                            <input type="text" value="{{$data->tempat_lahir}}" name="tempat_lahir" id="tempat_lahir" class="form-control" placeholder="Tempat Lahir" readonly>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-12">
                                            <label>Tanggal Lahir</label>
                                            <input type="date" value="{{$data->tanggal_lahir}}" name="tanggal_lahir" id="tanggal_lahir" class="form-control" readonly>
                                        </div>
                                    </div>
                                    
                                    <label>Alamat</label>
                                    <textarea name="alamat" rows="3" class="form-control" id="alamat" placeholder="Alamat">{{$data->alamat}}</textarea>

                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label>Foto / Scan KTP</label>
                                                <input type="file" value="{{$data->ktp}}" class="form-control mb-0" id="ktp" name="ktp" onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])" readonly>
                                                <img id="output" src="{{asset('lampiran/'.$data->ktp)}}" width="100px" height="100px">
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label>Foto / Scan Kartu Keluarga</label>
                                                <input type="file" value="{{$data->kk}}" class="form-control mb-0" id="kk" name="kk" onchange="document.getElementById('output2').src = window.URL.createObjectURL(this.files[0])" readonly>
                                                <img id="output2" src="{{asset('lampiran/'.$data->kk)}}" width="100px" height="100px">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mt-4">
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label>Foto / Scan Akta Kelahiran</label>
                                                <input type="file" value="{{$data->akta_kelahiran}}" class="form-control mb-0" id="akta_kelahiran" name="akta_kelahiran" onchange="document.getElementById('output3').src = window.URL.createObjectURL(this.files[0])" readonly>
                                                <img id="output3" src="{{asset('lampiran/'.$data->akta_kelahiran)}}" width="100px" height="100px">
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label>Foto / Scan Dokumen BPIH</label>
                                                <input type="file" value="{{$data->dokumen_bpih}}" class="form-control mb-0" id="dokumen_bpih" name="dokumen_bpih" onchange="document.getElementById('output4').src = window.URL.createObjectURL(this.files[0])" readonly>
                                                <img id="output4" src="{{asset('lampiran/'.$data->dokumen_bpih)}}"width="100px" height="100px">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mt-4">
                                        <div class="form-group">
                                            <label for="tanggal_keberangkatan" class="col-lg-12 col-md-12 col-12 control-label">Tanggal Keberangkatan</label>
                                            <div class="col-lg-6 col-md-6 col-12">
                                                <input type="date" value="{{$data->tanggal_keberangkatan}}" name="tanggal_keberangkatan" id="tanggal_keberangkatan" class="form-control" readonly>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-10 col-8 mx-auto mt-6">
                                        @if($data->status == 1)
                                            <div class="alert alert-warning text-center" role="alert">
                                                @if($data->status == 1) Belum Dikonfirmasi @endif
                                            </div>
                                        @elseif($data->status == 2)
                                            <div class="alert alert-success" role="alert">
                                                @if($data->status == 2) Diterima @endif
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection