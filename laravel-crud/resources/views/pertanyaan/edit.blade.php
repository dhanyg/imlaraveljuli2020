@extends('layouts.app')
@section('title', 'Buat Pertanyaan')
    
@section('content')
    <div class="container-fluid">
        <div class="row p-3 justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Ubah pertanyaan</h5>
                    </div>
                    <div class="card-body">
                        <form action="/pertanyaan/{{ $data->id }}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="judul">Judul</label>
                            <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" id="judul" value="{{ old('judul', $data->judul) }}" autofocus>
                            @error('judul')
                            <small class="mt-2 form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="isi">Isi pertanyaan</label>
                            <textarea name="isi" id="isi" cols="30" rows="10" class="form-control @error('isi') is-invalid @enderror">{{ old('isi', $data->isi) }}</textarea>
                            @error('isi')
                            <small class="mt-2 form-text text-danger">Isi tidak boleh kosong</small>
                            @enderror
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary">Update & Publish</button>
                            <a href="/pertanyaan" class="btn btn-danger">Batal</a>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection