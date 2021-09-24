@extends('masyarakat/layout/layout')
<body style="background-color:RoyalBlue;">
</body>
@section('content')
<head>
<link rel="stylesheet" type="text/css" href="{{ asset('landing/css/stepper.css') }}">
<style>
div {
  text-align: justify;
  text-justify: inter-word;
}
</style>
</head>

    <!-- content -->
    <div class="container">
      <br><br><br>
      <div class="row mt-5 mb-5">
      <div class="col-md-6">
        <div class="card shadow" id="card-cart">
          
            <h1 style="font-size:400%;"><b>Pengaduan</b></h1>
            <h1 style="font-size:400%;"><b>Lampu PJU</b></h1>

            <div class="desc mt-4">
              <p>Sistem Informasi Pengaduan Lampu PJU ini digunakan untuk menyampaikan pengaduan yang ingin masyarakat Kota Cirebon sampaikan.</p>
            </div>

            <div class="mt-5">
              @if (Auth::guard('masyarakat')->check())
              <a href="masyarakat_pengaduan" class="button rounded-pill shadow tebel-sedang ">Isi Pelaporan</a>
              @else
              <a href="#" id="swal-6" class="button rounded-pill shadow tebel-sedang">Isi Pelaporan</a>
              @endif
            </div>
            <br>
          </div>
        </div>
        </div>
      </div>
    </div>
<br><br><br><br><br><br><br><br>
    <div class="container">
          <div class="card shadow">
          <h3 class="text-black"><center><b>Langkah - langkah Melakukan Pengaduan Kerusakan Lampu PJU</center></b></h3>
          <div class="wrapper">
            <ol class="c-stepper">
              <li class="c-stepper__item">
                <div class="c-stepper__content">
                  <h3 class="c-stepper__title">Langkah 1</h3>
                  <p class="c-stepper__desc" style="line-height: 1;">
                  Setelah berhasil membuka web pengaduan, tekan tombol login yang 
                  terletak pada atas kanan layar anda. Selanjutnya anda akan diarahkan 
                  pada halaman login, jika belum mempunyai akun tekan 'daftar sekarang'
                  yang terletak pada tengah bawah kotak login.</p>
                </div>
              </li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <br>
    <div class="container">
          <div class="card shadow">
          <div class="wrapper">
            <ol class="c-stepper">
              <li class="c-stepper__item">
                <div class="c-stepper__content">
                  <h3 class="c-stepper__title">Langkah 2</h3>
                  <p class="c-stepper__desc" style="line-height: 1;">
                  Isi dan lengkapi data - data yang dibutuhkan pada lembar registrasi akun.
                  Setelah akun berhasil dibuat, lakukan login dengan username dan password yang sudah dibuat. 
                  Lalu anda akan memasuki lembar pengaduan yang didalamnya anda diminta
                  untuk memasukan foto bukti kerusakan, alamat adanya kerusakan serta 
                  keterangan tambahan untuk kerusakan fisik yang terlihat. </p>
                </div>
              </li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <br>
    <div class="container">
          <div class="card shadow">
          <div class="wrapper">
            <ol class="c-stepper">
              <li class="c-stepper__item">
                <div class="c-stepper__content">
                  <h3 class="c-stepper__title">Langkah 3</h3>
                  <p class="c-stepper__desc" style="line-height: 1;">
                  Setelah berhasil melakukan pengaduan anda dapat melihat hasil pengaduan 
                  anda pada tulisan 'riwayat pengaduan' yang terletak pada bagian atas layar anda.
                  Anda dapat melihat status pengaduan yang sudah anda berikan sebelumnya, 
                  status tersebut menunjukan apakah pengaduan tersebut sedang dalam 
                  proses penanganan ataupun sudah selesai dikerjakan. 
                  Anda juga dapat melihat tanggapan yang diberikan petugas terhadap pengaduan anda.</p>
                </div>
              </li>
            </ol>
          </div>
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
