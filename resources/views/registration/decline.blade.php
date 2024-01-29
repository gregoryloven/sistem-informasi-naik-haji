@extends('layouts.admin')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
          <h1>Form Penolakan</h1>
        </div>

        <div class="section-body">

        <form role="form" method='POST' action="{{ route('registration.update', ['registration' => $data->id]) }}" enctype="multipart/form-data">
            <div class="modal-body">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="form-group col-md-8">
                        <label>Alasan Penolakan</label>
                        <input type="hidden" class="form-control" value="{{$data->id}}" id='id' name='id'>
                        <textarea name="alasan_penolakan" class="form-control" id="alasan_penolakan" style="height: 150px;" required></textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </form>

        </div>
    
    </section>
</div>

@endsection