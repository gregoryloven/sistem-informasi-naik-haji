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
          <h1>Daftar Pendaftaran Naik Haji</h1>
        </div>

        <div class="section-body">

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    Daftar Permintaan Pendaftaran
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" style="text-align: center;" id="myTable">
                            <thead>
                                <tr>
                                    <th width="10%">No</th>
                                    <th>Nama Lengkap</th>
                                    <th>Tanggal Keberangkatan</th>
                                    <th width="20%"><i class="fa fa-cog"></i></th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i = 0; @endphp
                                @foreach($data as $d)
                                @php $i += 1; @endphp
                                <tr>
                                    <td>@php echo $i; @endphp</td>
                                    <td>{{$d->nama_lengkap}}</td>
                                     <td>{{ date('d F Y', strtotime($d->tanggal_keberangkatan)) }}</td>
                                    <td>
                                        <a href="{{ route('registration.detail', $d->id) }}" class="btn btn-icon btn-info" ><i class="fa fa-search"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

    </section>
</div>

@endsection