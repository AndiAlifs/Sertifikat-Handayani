@extends('layouts.app')

@section('content')
<section class="section">
    <!-- <div class="section-header">
    </div> -->

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <div class="text-center mt-2">
                    <h3>Tambah Nilai</h3>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('nilai.simpan') }}" method="post">
                    @csrf
                    <input type="hidden" name="all_kompetensi" value="{{ $all_kompetensi }}">
                    <div class="form-group row">
                        <label for="nama_lengkap" class="col-sm-4 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap"
                                value="{{ $_POST['nama_lengkap'] }}" readonly>
                        </div>

                    </div>
                    <div class="form-group row">
                        <label for="nomor_sertif" class="col-sm-4 col-form-label">Nomor Sertifikat</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="nomor_sertif" name="nomor_sertif"
                                value="{{ $_POST['nomor_sertif'] }}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tempat_lahir" class="col-sm-4 col-form-label">Tempat Lahir</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir"
                                value="{{ $_POST['tempat_lahir'] }}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tanggal_lahir" class="col-sm-4 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir"
                                value="{{ $_POST['tanggal_lahir'] }}" readonly data-date-format='YYYY/MM/DD'>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kursus_id" class="col-sm-4 col-form-label">Program Kursus</label>
                        <div class="col-sm-8">
                            <select name="kursus_id" id="kursus_id" name="kursus_id" class="custom-select" >
                                <option value="{{ $program->id }}" selected>{{ $program->nama }}</option>
                            </select>
                        </div>
                    </div>
                    <hr />
                    <h3>Daftar Nilai Kompetensi</h3>
                    @foreach($kompetensi as $komp)
                        <div class="form-group row">
                            <label for="{{ $komp->id }}" class="col-sm-4 col-form-label">{{ $komp->nama }}</label>
                            <div class="col-sm-8">
                                <input class="form-control" type="number" name="{{ $komp->id }}" id="{{ $komp->id }">
                            </div>
                        </div>
                    @endforeach
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