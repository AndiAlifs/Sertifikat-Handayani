@extends('layouts.app')

@section('content')
<section class="section">
    <!-- <div class="section-header">
    </div> -->
    
    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <div class="text-center mt-2">
                    <h3>Daftar Sertifikat</h3>
                </div>
            </div>
            <a href="{{ route('sertif.buat') }}"" class="btn btn-success m-2"> <i class="fa fa-plus" aria-hidden="true"></i> Tambah Sertifikat </a>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th>#</th>
                                <th>Nama Lengkap</th>
                                <th>Nomor Sertifikat</th>
                                <th>Program Kursus</th>
                                <th>QR Code</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                                @foreach($allSertif as $sertif)
                                <tr>
                                    <td>{{$sertif->id}}</td>
                                    <td>{{$sertif->nama_lengkap}}</td>
                                    <td>{{$sertif->nomor_sertif}}</td>
                                    <td>{{$sertif->program->nama}}</td>
                                    <td style="text-align: center;">
                                        <img src="{{ 'https://chart.googleapis.com/chart?chs=120x120&cht=qr&chl='.url('/sertifikat/detail').'/'.$sertif->id }}" alt="">
                                        <br>
                                        <a href="{{ 'https://chart.googleapis.com/chart?chs=320x320&cht=qr&chl='.url('/sertifikat/detail').'/'.$sertif->id }}" download="file-QR.png">Download</a>
                                    </td>
                                    <td>
                                        <a href="{{ url('/sertifikat/detail').'/'.$sertif->id }}" class="btn btn-primary bt-block"><i class="fa fa-info-circle" aria-hidden="true"></i> Detail </a>
                                        <a href="{{ url('/sertifikat/hapus').'/'.$sertif->id }}" class="btn btn-danger btn-block"><i class="fa fa-trash" aria-hidden="true"></i> Hapus</a>
                                        
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
@endsection