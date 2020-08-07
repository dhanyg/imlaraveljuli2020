@extends('layouts.app')
@section('title', 'Buat Pertanyaan')
    
@section('content')
    <div class="container-fluid">
        <div class="row p-3 justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Buat pertanyaan baru</h5>
                    </div>
                    <div class="card-body">
                        <form action="/pertanyaan" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="judul">Judul</label>
                            <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" id="judul" autofocus>
                            @error('judul')
                            <small class="mt-2 form-text text-danger">Judul harus diisi</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="isi">Isi pertanyaan</label>
                            <textarea name="isi" id="isi" cols="30" rows="10" class="form-control @error('isi') is-invalid @enderror"></textarea>
                            @error('isi')
                            <small class="mt-2 form-text text-danger">Isi pertanyaan harus diisi</small>
                            @enderror
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary">Publish</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection