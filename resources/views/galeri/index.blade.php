@extends('layouts.main')
@section('content')
<section class="py-5" style=" margin-top: 100px">
    <div class="container col-xxl-8">
        <h4>Halaman Foto</h4>
        <a href="" class="btn btn-primary">Upload Photo</a>

        @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Informasi</strong>{{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <div class="table-responsive py-3">
            <table class="table table-bordered">
                <thead>
                    <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Kegiatan</th>
                    <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php $no=1;
                 @endphp
                 </tbody>
            </table>

        </div>
    </div>
@endsection