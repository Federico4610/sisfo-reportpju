@extends('masyarakat/layout/master')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Pengaduan Terbaru</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{ asset('node_modules/bootstrap-social/bootstrap-social.css')}}">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/style2.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/css/components.css')}}">
  <link href="{{ asset('landing/bs/css/bootstrap.min.css') }}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{ asset('landing/css/body.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('landing/css/body.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('landing/css/navbar.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('landing/css/resp.css') }}">
</head>


<body>
    <div class="container-fluid">
    </div>
    <br><br><br><br><br><br>

    <div class="container-fluid">

      <div class="row justify-content-center">

        @if ($data->count() == 1)

              @foreach ($data as $item)
            @php
              $kode = 'IMG00'.$item->id_pengaduan
            @endphp
            <div class="col-md-6">
            <h3 class="text-primary">Pengaduan Terbaru</h3><hr width="100" class="text-right" style="height: 2px; color: blue;">
            <br><div class="card mr-3" id="card-cart" style="box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.2);" style="width: 25rem; height: 18rem;">
              <div class="card-body">
                  <h5 class="text-primary">{{ $kode }} | {{ $item->status }} | {{ $item->tanggal_pengaduan }}</h5>
                  <hr>
                  <div class="row">
                      <div class="col-md-4 col-12">
                      @if ($item->foto != '')
                          <img src="{{ asset('assets/img/produk/'.$item->foto) }}" width="150"></img>
                      @else
                          <img src="{{ asset('assets/img/nonimage.jpg') }}" width="150"></img>
                      @endif
                      </div>
                      <div class="col-md-8 col-12">
                        <b>Isi pengaduan</b><br>
                        @php
                            $text = $item->isi_laporan;
                            $isi = Str::substr($text, 0);
                        @endphp
                        <p style="text-align: justify;">{{ $isi }}</p>
                      </div>
                  </div>
              </div>
            </div>
          </div>
          @endforeach

        @elseif($data->count() == 2)
        <div class="col-md-12 mb-5">
          <h3 class="text-primary">Pengaduan Terbaru</h3><hr width="100" class="text-right" style="height: 2px; color: blue;">
          <br>  <div class="card-group">
            @foreach ($data as $item)
            @php
              $kode = 'IMG00'.$item->id_pengaduan
            @endphp
            <div class="card mr-3" id="card-cart" style="box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.2);" style="width: 25rem; height: 18rem;">
              <div class="card-body">
                  <h5 class="text-primary">{{ $kode }} | {{ $item->status }} | {{ $item->tanggal_pengaduan }}</h5>
                  <hr>
                  <div class="row">
                      <div class="col-md-4 col-12">
                      @if ($item->foto != '')
                          <img src="{{ asset('assets/img/produk/'.$item->foto) }}" width="150"></img>
                      @else
                          <img src="{{ asset('assets/img/nonimage.jpg') }}" width="150"></img>
                      @endif
                      </div>
                      <div class="col-md-8 col-12">
                        <b>Isi pengaduan</b><br>
                        @php
                            $text = $item->isi_laporan;
                            $isi = Str::substr($text, 0);
                        @endphp
                        <p style="text-align: justify;">{{ $isi }}</p>
                      </div>
                  </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
        @else
        <div class="col-md-12 mb-5 text-left">
          <h3 class="text-primary">Pengaduan Terbaru</h3><hr width="100" class="text-left" style="height: 2px; color: blue;">
<br>
          <div class="card-group">
            @foreach ($data as $item)
            @php
              $kode = 'IMG-'.$item->id_pengaduan
            @endphp
            <div class="card mr-3" id="card-cart" style="box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.2);" style="width: 25rem; height: 18rem;">
              <div class="card-body">
                  <h5 class="text-primary">{{ $kode }} | {{ $item->status }} | {{ $item->tanggal_pengaduan }}</h5>
                  <hr>
                  <div class="row">
                      <div class="col-md-6 col-12">
                      @if ($item->foto != '')
                          <img src="{{ asset('assets/img/produk/'.$item->foto) }}" width="150"></img>
                      @else
                          <img src="{{ asset('assets/img/nonimage.jpg') }}" width="150"></img>
                      @endif
                      </div>
                      <div class="col-md-6 col-12">
                        <b>Isi pengaduan</b><br>
                        @php
                            $text = $item->isi_laporan;
                            $isi = Str::substr($text, 0);
                        @endphp
                        <p style="text-align: justify;">{{ $isi }}</p>
                      </div>
                  </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
        @endif
      </div>
      <div>
      {{ $data->links() }}
      </div>
    </div>

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="../assets/js/stisla.js"></script>

  <!-- JS Libraies -->

  <!-- Template JS File -->
  <script src="{{ asset('assets/js/scripts.js')}}"></script>
  <script src="{{ asset('assets/js/custom.js')}}"></script>

  <!-- Page Specific JS File -->
</body>
</html>
