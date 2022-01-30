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
                <form action="{{ route('kursus.simpan') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="nama" class="col col-form-label font-weight-bold">Nama Program Kursus</label>
                        <div class="col">
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Program">
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