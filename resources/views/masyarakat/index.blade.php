@extends('masyarakat/layout/master')

@section('content')
    <!-- content -->
    <div class="container">
      <br><br><br>
      <div class="row mt-5 mb-5">
      <div class="col-md-6">
        <div class="card shadow" id="card-cart">
          
            <h1 class="display-1 text-truncate tebel-sedang">E-Reporting</h1>
            <h1 class="display-1 text-truncate tebel-sedang">Lampu PJU</h1>

            <div class="desc mt-4">
              <p>Sistem Informasi Pelaporan Masyarakat ini digunakan untuk menyampaikan pengaduan yang ingin masyarakat sampaikan.</p>
            </div>

            <div class="mt-5">
              @if (Auth::guard('masyarakat')->check())
              <a href="masyarakat_pengaduan" class="button rounded-pill shadow tebel-sedang">Isi Pelaporan</a>
              &nbsp;
              <a href="history" class="link">History Pelaporan</a>
              @else
              <a href="#" id="swal-6" class="button rounded-pill shadow tebel-sedang">Isi Pelaporan</a>
              &nbsp;
              <a href="#" id="swal-6" class="link">History Pelaporan</a>
              @endif
            </div>

            <br>

          </div>
        </div>
        </div>
      </div>
@endsection

@push('page-scripts')
  <script src="{{ asset('node_modules/sweetalert/dist/sweetalert.min.js') }}"></script>
  <script>
    $("#swal-6").click(function() {
  swal({
      title: 'Harus login dulu',
      text: 'Untuk mengisi pelaporan anda harus login terlebih dahulu',
      icon: 'warning',
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
        window.location.href = "/loginmasyarakat";
      } else {
      swal('Oke!');
      }
    });
});
  </script>
@endpush
