@extends('layouts.app')
@section('title', 'Pertanyaan')
@push('sweetalert2-css')
    <link rel="stylesheet" href="{{ asset('/vendor/adminlte/plugins/sweetalert2/sweetalert2.min.css') }}">
@endpush
@push('toastr-css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
@endpush
    
@section('content')
    <div class="container-fluid">
        <div class="row p-3">
            <div class="col-md-4">
                <h3>Semua Pertanyaan</h3>
                <hr>
                <a href="/pertanyaan/create" class="btn btn-sm btn-primary">Tambah Pertanyaan</a>
            </div>
        </div>
        
        <div class="row px-3">
            @forelse ($questions as $question)
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-header bg-info">
                        <h5 class="card-title text-white text-bold">{{ $question->judul }}</h5>
                    </div>
                    <div class="card-body">
                        {{ Str::limit($question->isi, 60) }}
                        <div class="mt-3 d-flex justify-content-between align-items-center">
                            <a href="/pertanyaan/{{ $question->id }}">Read more</a>
                            <div class="d-flex align-items-center">
                                <a href="/pertanyaan/{{ $question->id }}/edit" class="btn btn-sm btn-outline-info">Edit</a>
                                <span>&NonBreakingSpace;&NonBreakingSpace;</span>
                                <form action="/pertanyaan/{{ $question->id }}" method="post">
                                @csrf
                                @method('delete')
                                    <button type="submit" id="btn-delete" class="btn btn-sm btn-outline-danger">Hapus</button>
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
@push('sweetalert2-js')
    <script src="{{ asset('/vendor/adminlte/plugins/sweetalert2/sweetalert2.all.min.js') }}"></script>
    <script>
        $('#btn-delete').on('click', function(e){
            e.preventDefault();
            Swal.fire({
                title: 'Yakin ingin menghapus pertanyaan?',
                // text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya!',
                cancelButtonText: 'Tidak',
            }).then((result) => {
            if (result.value) {
                $(this).closest('form').submit();
            }
            })
        });
    </script>
@endpush
@push('toastr-js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    @if (session('success'))
        <script>
            toastr["success"]('{{ session('success') }}');
        </script>
    @endif
@endpush