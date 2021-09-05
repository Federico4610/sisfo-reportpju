@extends('masyarakat/layout/master')

@section('content')
    <!-- content -->
    <div class="container">
      <br>
        <div class="row mt-5">
            <div class="row">
              <div class="col-md-6">
                <h5 class="text-primary">Ayo! isi pelaporan sesuai yang ingin kalian sampaikan</h5><hr width="100" class="text-right" style="height: 2px; color: blue;">
                <div class="card shadow" id="card-cart">
                  <div class="card-body">
                    <form action="/prosespengaduan" class="row" method="POST" enctype="multipart/form-data">
                      @csrf
                      <div class="col-md-12 mt-4 mb-2">
                        <img src="{{ asset('assets/img/nonimage.jpg') }}" width="200" class="img-thumbnail mr-3" align="left" id="preview">
                      </div>
                      
                      <div class="col-md-12"></div>

                      <div class="col-md-12 mb-3">
                        <label>Masukkan Gambar</label>
                          <div class="form-group">
                            <div class="custom-file">
                              <input name="gambar_pengaduan" type="file" accept="image/x-png,image/gif,image/jpeg" class="form-control" id="inputGambar_masakan" placeholder=" masukan file gambar buku" name="gambar" multiple>
                            </div>
                          </div>
                      </div>

                      <div class="col-md-12"></div>

                      <div class="col-md-12">
                        <label>Alamat</label>
                          <div class="form-group">
                            <div class="custom-file">
                              <textarea name="alamat" rows="1" class="form-control"></textarea>
                            </div>
                          </div>
                      </div>

                      <div class="col-md-12">
                        <label>Isi Pelaporan</label>
                          <div class="form-group">
                            <div class="custom-file">
                              <textarea name="isi" rows="5" class="form-control"></textarea>
                            </div>
                          </div>
                      </div>

                    <div class="col-md-12 mt-5">
                      <button href="" class="btn btn-primary btn-block mb-3 shadow text-light">Kirim</button>
                    </div>
                  </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <script>
        $('#inputGambar_masakan').on('change',function(){
        //get the file name
          var fileName = $(this).val();
          var panjangnamafile = fileName.length;
          if (panjangnamafile > 22){
            hasilpotong = fileName.substring(0, 22);
            $(this).next('.custom-file-label').html(hasilpotong);
          }else{
            $(this).next('.custom-file-label').html(fileName);
          }
      })
      </script>
@endsection
@push('page-scripts')

<script type="text/javascript">
	function filePreview(input) {
		if (input.files && input.files[0]) {
		var reader = new FileReader();
		reader.onload = function (e) {
			$('#preview').attr('src',e.target.result)
		}
		reader.readAsDataURL(input.files[0]);
	}
}

$(function(){
	$("#inputGambar_masakan").change(function () {
		filePreview(this);
	});
});

</script>
@endpush
