@extends('layouts.app')
@section('title', 'Detail Pertanyaan')
    
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="mt-5 col-md-10">
                <div class="card">
                    <div class="card-body">
                        <h3>{{ $detail->judul }}</h3>
                        <div class="mb-3">
                            {{ $detail->isi }}
                        </div>
                        <a href="/pertanyaan">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection