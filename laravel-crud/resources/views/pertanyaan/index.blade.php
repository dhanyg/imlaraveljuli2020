@extends('layouts.app')
@section('title', 'Pertanyaan')
    
@section('content')
    <div class="container-fluid">
        <div class="row p-3">
            <div class="col-md-4">
                <a href="/pertanyaan/create" class="btn btn-sm btn-primary">Tambah Pertanyaan</a>
            </div>
        </div>
        @if (session('success'))
            <div class="row px-3">
                <div class="col-md-4">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                </div>
            </div>
        @endif
        <div class="row px-3">
            @forelse ($questions as $question)
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header bg-info">
                        <h5 class="card-title text-white text-bold">{{ $question->judul }}</h5>
                    </div>
                    <div class="card-body">
                        {{ $question->isi }}
                        <div class="mt-3 d-flex justify-content-between align-items-center">
                            <a href="/pertanyaan/{{ $question->id }}">Read more</a>
                            <div class="d-flex align-items-center">
                                <a href="/pertanyaan/{{ $question->id }}/edit" class="btn btn-sm btn-outline-info">Edit</a>
                                <span>&NonBreakingSpace;&NonBreakingSpace;</span>
                                <form action="/pertanyaan/{{ $question->id }}" method="post">
                                @csrf
                                @method('delete')
                                    <button type="submit" class="btn btn-sm btn-outline-danger">Hapus</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @empty
                <div class="col-md-12">
                    <h5 class="text-center">Tidak ada pertanyaan</h5>
                </div>
            @endforelse
        </div>
    </div>
@endsection