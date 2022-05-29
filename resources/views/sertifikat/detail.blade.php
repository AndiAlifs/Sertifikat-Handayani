<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Detail Sertifikat &mdash; {{ config('app.name') }}</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  @stack('stylesheet')
</head>

<body>
<div id="app">
  <div class="main-wrapper">
    <div class="navbar-bg"></div>

    <!-- Main Content -->
    <div class="main-content pl-5 pr-5">
        <section class="section">
            
            <div class="section-body">
                <div class="card">
                    <div class="card-header">
                        <div class="text-center mt-2">
                            <h3>Data Sertifikat</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3 font-weight-bold">Nomor Sertifikat</div>
                            <div class="col-sm-9">{{ $sertif->nomor_sertif }}</div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-3 font-weight-bold">Program Kursus</div>
                            <div class="col-sm-9">{{ $sertif->program->nama }}</div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-3 font-weight-bold">Nama Lengkap</div>
                            <div class="col-sm-9">{{ $sertif->nama_lengkap }}</div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-3 font-weight-bold">Tempat Lahir</div>
                            <div class="col-sm-9">{{ $sertif->tempat_lahir }}</div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-3 font-weight-bold">Tanggal Lahir</div>
                            <div class="col-sm-9">{{ $sertif->tanggal_lahir }}</div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-sm-12 table">
                                <table class="table table-striped table-md">
                                  <thead>
                                  <tr>
                                    <th style="width:5%">#</th>
                                    <th style="width:75%">Nama Kompetensi</th>
                                    <th style="width:20%">Nilai</th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                    @for($i = 0; $i < count($kompetensi); $i++)
                                    <tr>
                                        <td>{{ $i+1 }}</td>
                                        <td>{{ $kompetensi[$i]->kompetensi->nama }}</td>
                                        <td>{{ $kompetensi[$i]->nilai }}</td>
                                    </tr>
                                    @endfor
                                  </tbody>
                                </table>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <footer class="main-footer">
      @include('partials.footer')
    </footer>
  </div>
</div>
<script src="{{ mix('js/manifest.js') }}"></script>
<script src="{{ mix('js/vendor.js') }}"></script>
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>