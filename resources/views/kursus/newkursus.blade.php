@extends('layouts.app')
@section('content') 
@foreach($kursuses as $kursus)

<!-- Modal {{ $kursus->nama }}-->
<div
    class="modal fade"
    id={{"editModal".$kursus->id}}
    tabindex="-1"
    role="dialog"
    aria-labelledby="editModalLabel"
    aria-hidden="true"
>
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">
                    Form Edit Kursus
                </h5>
                <button
                    type="button"
                    class="close"
                    data-dismiss="modal"
                    aria-label="Close"
                >
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('kursus.update') }}" method="post">
                <div class="modal-body">
                    @csrf
                    <div class="form-group">
                            <input
                                type="text"
                                class="form-control"
                                id="nama"
                                name="nama"
                                value="{{ $kursus->nama }}"
                            />
                            <input type="hidden" name="id" value="{{ $kursus->id }}">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">
                        Simpan
                    </button>
                    <button
                        type="button"
                        class="btn btn-secondary"
                        data-dismiss="modal"
                    >
                        Close
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach

<section class="section">
    <!-- <div class="section-header">
    </div> -->
    @if(Session::has('message'))
    <!-- <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p> -->
    <div class="alert {{ Session::get('kind') }} alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {{ Session::get('message') }}
    </div>
    @endif


    

    
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
                        <label
                            for="nama"
                            class="col col-form-label font-weight-bold"
                            >Nama Program Kursus</label
                        >
                        <div class="col">
                            <input
                                type="text"
                                class="form-control"
                                id="nama"
                                name="nama"
                                placeholder="Masukkan Nama Program"
                            />
                        </div>
                    </div>

                    <div class="row d-flex justify-content-end">
                        <button type="submit" class="btn btn-success">
                            Simpan
                        </button>

                        <a href="/batal" class="ml-2 btn btn-danger">Batal</a>
                    </div>
                </form>
            </div>
        </div>

        <div class="card mt-2">
            <table class="table" id="tableKursus">
                <thead>
                    <tr>
                        <th style="width: 80%">Nama Kursus</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($kursuses as $kursus)
                    <tr>
                        <td>
                            {{ $kursus->nama }}
                        </td>
                        <td>
                            <button
                                type="button"
                                class="btn btn-warning"
                                data-toggle="modal"
                                data-target={{"#editModal".$kursus->id}}
                            >
                                Edit
                            </button>
                            <a href="{{route('kursus.hapus',["id" => $kursus->id]) }}" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection
