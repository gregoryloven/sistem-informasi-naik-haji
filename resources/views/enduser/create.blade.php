@extends('layouts2.enduser', ['includeNavbar' => false])

@section('content')
    
    <section class="contact-section section-padding" id="section_6">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12 mx-auto">
                    <h2 class="text-center mb-4">Formulir Pendaftaran</h2>

                    <div class="tab-content shadow-lg mt-5" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-ContactForm" role="tabpanel" aria-labelledby="nav-ContactForm-tab">
                            <form class="custom-form contact-form mb-5 mb-lg-0" action="{{ route('daftar-haji.store') }}" method="post" role="form" enctype="multipart/form-data">
                                @csrf    
                                <div class="contact-form-body">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" placeholder="Nama Lengkap" required>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-12">
                                            <input type="number" name="nomor_validasi" id="nomor_validasi" class="form-control" placeholder="Nomor Validasi" required>
                                        </div>
                                        <!-- <div class="col-lg-6 col-md-6 col-12">
                                            <select class="form-control" id='package_id' name='package_id' required>
                                                <option value="" disabled selected>Pilih Paket</option>
                                                    @foreach($pack as $p)
                                                    <option value="{{ $p->id }}">{{ $p->nama }} ({{$p->tahun}} Tahun)</option>
                                                    @endforeach
                                            </select>
                                        </div> -->
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
                                        <small><label><span style="color: red;">*Maksimum Ukuran Upload File (jpg/png) 5 mb</span></label></small><br><br>
                                    </div>

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
                                                <label>Foto Selfie</label>
                                                <input type="file" value="" class="form-control mb-0" id="foto_selfie" name="foto_selfie" onchange="document.getElementById('output4').src = window.URL.createObjectURL(this.files[0])" required>
                                                <img id="output4" width="100px" height="100px">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mt-4">
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label>Ijazah</label>
                                                <input type="file" value="" class="form-control mb-0" id="ijazah" name="ijazah" onchange="document.getElementById('output5').src = window.URL.createObjectURL(this.files[0])" required>
                                                <img id="output5" width="100px" height="100px">
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label>Akta Nikah</label>
                                                <input type="file" value="" class="form-control mb-0" id="akta_nikah" name="akta_nikah" onchange="document.getElementById('output6').src = window.URL.createObjectURL(this.files[0])" required>
                                                <img id="output6" width="100px" height="100px">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- <div class="row mt-4">
                                        <div class="form-group">
                                            <label for="tanggal_keberangkatan" class="col-lg-12 col-md-12 col-12 control-label">Tanggal Keberangkatan</label>
                                            <div class="col-lg-6 col-md-6 col-12">
                                                <input type="text" name="tanggal_keberangkatan" id="tanggal_keberangkatan" class="form-control" readonly>
                                            </div>
                                        </div>
                                    </div> -->

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

    <div class="main-content">
        <section class="section">

            <div class="section-body">

                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        Riwayat Pendaftaran Naik Haji
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" style="text-align: center;" id="myTable">
                                <thead>
                                    <tr>
                                        <th width="10%">No</th>
                                        <th>Nama</th>
                                        <th>Tanggal Keberangkatan</th>
                                        <th>Status</th>
                                        <th width="20%">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $i = 0; @endphp
                                    @foreach($data as $d)
                                    @php $i += 1; @endphp
                                    <tr>
                                        <td>@php echo $i; @endphp</td>
                                        <td>{{$d->nama_lengkap}}</td>
                                        <td>{{tanggal_indonesia($d->tanggal_keberangkatan)}}</td>
                                        <td class="@if($d->status == 2) alert-success @elseif($d->status == 0) alert-danger  @else alert-info @endif" role="alert">
                                            @if($d->status == 2) Diterima @elseif($d->status == 0) Ditolak @else Pengajuan @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('daftar-haji.detail', $d->id) }}" class="btn btn-icon btn-info" >Lihat</i></a>       
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </div>

@endsection

@section('javascript')
<script>
document.addEventListener("DOMContentLoaded", function () {
    var packageSelect = document.getElementById('package_id');
    var tanggalKeberangkatanInput = document.getElementById('tanggal_keberangkatan');

    packageSelect.addEventListener('change', function () {
        var selectedPackageText = packageSelect.options[packageSelect.selectedIndex].text;
        var selectedPackageYearMatch = selectedPackageText.match(/\d+/);

        if (selectedPackageYearMatch) {
            var selectedPackageYear = parseInt(selectedPackageYearMatch[0]);
            var currentYear = new Date().getFullYear();

            var tahunKeberangkatan = currentYear + selectedPackageYear;

            var tanggalKeberangkatan = new Date();
            tanggalKeberangkatan.setFullYear(tahunKeberangkatan);

            var day = tanggalKeberangkatan.getDate();
            var month = tanggalKeberangkatan.getMonth() + 1; // Ingat bulan dimulai dari 0
            var year = tanggalKeberangkatan.getFullYear();

            var formattedDate = year + '-' + (month < 10 ? '0' + month : month) + '-' + (day < 10 ? '0' + day : day);
            tanggalKeberangkatanInput.value = formattedDate;
        } else {
            // Jika tidak dapat menemukan tahun pada paket, kosongkan tanggal_keberangkatan
            tanggalKeberangkatanInput.value = "";
        }
    });
});


</script>
@endsection
