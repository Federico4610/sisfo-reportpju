@extends('admin/layout.master')

@section('title','Stok')
@section('title2','tambah')
@section('stok','active')
@section('konten')

<div class="card">
  <div class="card-header">
    <h4>Edit stok</h4>
  </div>
  <div class="card-body">
    <form action="{{ route('stok.update',$data->id_stok_lampu) }}" method="POST">
        @method('PATCH')
    @csrf
    <div class="row">

        {{-- Nama Lampu --}}
        <div class="col-md-6">
            <div class="form-group">
              <label @error('nama_lampu') class="text-danger" @enderror>
                Nama Stok
                @error('nama_lampu')
                  | {{ $message }}
                @enderror
              </label>
              <input type="text" name="nama_lamp"
              @if (old('nama_lampu'))
                  value="{{old('nama_lampu')}}"
              @else
                  value="{{ $data->nama_lampu }}"
              @endif
              class="form-control" autocomplete="off">
            </div>
          </div>

          {{-- Tipe Lampu --}}
          <div class="col-md-6">
            <div class="form-group">
              <label @error('tipe_lampu') class="text-danger" @enderror>
                Tipe Lampu
                @error('tipe_lampu')
                  | {{ $message }}
                @enderror
              </label>
              <input type="text" name="tipe_lampu"
              @if (old('tipe_lampu'))
                  value="{{old('tipe_lampu')}}"
              @else
                  value="{{ $data->tipe_lampu }}"
              @endif
              class="form-control" autocomplete="off">
            </div>
          </div>

          {{-- Jumlah --}}
          <div class="col-md-6">
            <div class="form-group">
              <label @error('jumlah') class="text-danger" @enderror>
                Jumlah
                @error('jumlah')
                  | {{ $message }}
                @enderror
              </label>
              <input type="text" name="jumlah"
              @if (old('jumlah'))
                  value="{{old('jumlah')}}"
              @else
                  value="{{ $data->jumlah }}"
              @endif
              class="form-control" autocomplete="off">
            </div>
          </div>

          {{-- Tanggal Masuk --}}
          <div class="col-md-6">
            <div class="form-group">
              <label @error('tgl_masuk') class="text-danger" @enderror>
                Tanggal Masuk
                @error('tgl_masuk')
                  | {{ $message }}
                @enderror
              </label>
              <input type="date" name="tgl_masuk"
              @if (old('tgl_masuk'))
                  value="{{old('tgl_masuk')}}"
              @else
                  value="{{ $data->tgl_masuk }}"
              @endif
              class="form-control" autocomplete="off">
            </div>
          </div>


    </div>
      <div class="card-footer text-right">
        <button class="btn btn-primary mr-1" type="submit">Submit</button>
        <a href="/stok" class="btn btn-secondary" type="reset">Cancel</a>
      </div>
    </form>
  </div>
</div>

@endsection
@push('page-scripts')
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script type="text/javascript">
  $('#select2').select2();
</script>
@endpush
