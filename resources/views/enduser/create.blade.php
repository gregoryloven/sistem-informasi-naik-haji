@extends('layouts2.enduser', ['includeNavbar' => false])

@section('content')
    
    <section class="contact-section section-padding" id="section_6">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12 mx-auto">
                    <h2 class="text-center mb-4">Formulir Pendaftaran</h2>

                    <div class="tab-content shadow-lg mt-5" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-ContactForm" role="tabpanel" aria-labelledby="nav-ContactForm-tab">
                            <form class="custom-form contact-form mb-5 mb-lg-0" action="{{ url('daftar-haji') }}" method="post" role="form" enctype="multipart/form-data">
                                <div class="contact-form-body">
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <input type="text" name="nama_lengkap" id="nama_lengkap-name" class="form-control" placeholder="Nama Lengkap" required>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control" placeholder="Tempat Lahir" required>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-12">
                                            <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" required>
                                        </div>
                                    </div>

                                    <textarea name="alamat" rows="3" class="form-control" id="alamat" placeholder="Alamat"></textarea>

                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label>Foto / Scan KTP</label>
                                                <input type="file" value="" class="form-control mb-0" id="ktp" name="ktp" onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])" required>
                                                <img id="output" width="100px" height="100px">
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label>Foto / Scan Kartu Keluarga</label>
                                                <input type="file" value="" class="form-control mb-0" id="kk" name="kk" onchange="document.getElementById('output2').src = window.URL.createObjectURL(this.files[0])" required>
                                                <img id="output2" width="100px" height="100px">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mt-4">
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label>Foto / Scan Akta Kelahiran</label>
                                                <input type="file" value="" class="form-control mb-0" id="akta_kelahiran" name="akta_kelahiran" onchange="document.getElementById('output3').src = window.URL.createObjectURL(this.files[0])" required>
                                                <img id="output3" width="100px" height="100px">
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label>Foto / Scan Dokumen BPIH</label>
                                                <input type="file" value="" class="form-control mb-0" id="dokumen_bpih" name="dokumen_bpih" onchange="document.getElementById('output4').src = window.URL.createObjectURL(this.files[0])" required>
                                                <img id="output4" width="100px" height="100px">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-10 col-8 mx-auto mt-6">
                                        <button type="submit" class="form-control">Submit</button>
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