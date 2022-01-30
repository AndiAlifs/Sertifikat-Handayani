@extends('layouts.app')

@section('content')
<section class="section">
    <!-- <div class="section-header">
    </div> -->

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <div class="text-center mt-2">
                    <h3>Tambah Program Kursus</h3>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('kompetensi.simpan') }}" method="post">
                    @csrf
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
                    <div class="form-group row">
                        <label for="nama" class="col-sm-4 col-form-label">Nama Kompetensi</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Kompetensi">
                        </div>
                    </div>
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