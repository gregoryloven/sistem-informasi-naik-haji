<form role="form" method='POST' action="{{ route('package.update', ['package' => $data->id]) }}" enctype="multipart/form-data">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
        <h4 class="modal-title">Ubah Paket</h4>
    </div>
    <div class="modal-body">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="form-group col-md-8">
                <label>Nama</label>
                <input type="hidden" class="form-control" value="{{$data->id}}" id='id' name='id'>
                <input type="text" class="form-control" value="{{$data->nama}}" id='nama' name='nama' required>
            </div>

            <div class="form-group col-md-3">
                <label>Tahun</label>
                <input type="number" class="form-control" value="{{$data->tahun}}" id='tahun' name='tahun' min=1 readonly>
            </div>

        </div>
    </div>
  <div class="modal-footer">
    <button type="submit" class="btn btn-primary">Save</button>
    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
  </div>
</form>