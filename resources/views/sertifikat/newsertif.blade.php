@extends('layouts.app')

@section('content')
<section class="section">
    <!-- <div class="section-header">
    </div> -->

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <div class="text-center mt-2">
                    <h3>Tambah Sertifikat</h3>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('nilai.buat') }}" method="post">
                    @csrf
                    <div class="form-group row">
                        <label for="nama_lengkap" class="col-sm-4 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" placeholder="Masukkan Nama Lengkap">
                        </div>
                        
                    </div>
                    <div class="form-group row">
                        <label for="nomor_sertif" class="col-sm-4 col-form-label">Nomor Sertifikat</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="nomor_sertif" name="nomor_sertif" placeholder="Masukkan Nomor Sertifikat">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tempat_lahir" class="col-sm-4 col-form-label">Tempat Lahir</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Masukkan Tempat Lahir">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tanggal_lahir" class="col-sm-4 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="Masukkan Tanggal Lahir" data-date-format='YYYY/MM/DD'>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kursus_id" class="col-sm-4 col-form-label">Program Kursus</label>
                        <div class="col-sm-8">
                            <select name="kursus_id" id="kursus_id" name="kursus_id" class="custom-select">
                                @foreach($program as $pro)
                                    <option value="{{ $pro->id }}">{{ $pro->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <option value=""></option>
                    <div class="row d-flex justify-content-end">
                        <button type="submit" class="btn btn-success">Simpan</button>
                        <a href="/batal" class="ml-2 btn btn-danger">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection