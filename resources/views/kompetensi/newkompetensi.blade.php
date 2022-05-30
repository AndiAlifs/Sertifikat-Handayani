@extends('layouts.app') @section('content')
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
                    <h3>Tambah Kompetensi Kursus</h3>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('kompetensi.simpan') }}" method="post">
                    @csrf
                    <div class="form-group row">
                        <label for="kursus_id" class="col-sm-4 col-form-label"
                            >Program Kursus</label
                        >
                        <div class="col-sm-8">
                            <select
                                name="kursus_id"
                                id="kursus_id"
                                name="kursus_id"
                                class="custom-select"
                                onchange="refreshRow()"
                            >
                                @foreach($program as $pro)
                                <option value="{{ $pro->id }}" {{ Session::get('last_option') == $pro->id ? "selected" : ""}}>
                                    {{ $pro->nama }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama" class="col-sm-4 col-form-label"
                            >Nama Kompetensi</label
                        >
                        <div class="col-sm-8">
                            <input
                                type="text"
                                class="form-control"
                                id="nama"
                                name="nama"
                                placeholder="Masukkan Kompetensi"
                            />
                        </div>
                    </div>
                    <div class="mt-2 row d-flex justify-content-end">
                        <button type="submit" class="btn btn-success">
                            Simpan
                        </button>
                        <a href="/batal" class="ml-2 btn btn-danger">Batal</a>
                    </div>
                </form>

                
            </div>

            
        </div>

        <div class="card mt-2">
            <table class="table" id="tableKompetensi">
                <thead>
                    <tr>
                        <th style="width:80%">Kompetensi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection 

@push('javascript')
<script>
    refreshRow();
    function refreshRow() {
        $("#tableKompetensi > tbody").empty();
        var base_url = "{{ env('APP_URL') }}"
        let id_kursus = $("#kursus_id").find(":selected").attr('value')
        let api = base_url+"kompetensi/list/"+id_kursus
        var resultData
        $.get(api, function(data, status) {
            resultData = JSON.parse(data[0])
            resultData.forEach(element => {
                let uriDelete = base_url+'kompetensi/hapus/'+element.id
                let buttonHapus = "<a href="+uriDelete+" class='btn btn-danger'>Hapus</a>"
                $("#tableKompetensi > tbody:last-child").append('<tr>'+'<td>'+element.nama+'</td>'+'<td>'+buttonHapus+'</td>'+'</tr>');
            });
        });
    }
</script>
@endpush
