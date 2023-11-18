@extends('layouts.main')
@section('content')

<section class="py-5" style="margin-top: 100px">
    <div class="container col-xxl-8">
        <h4>Halaman Photo Kegiatan</h4>

        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#uploadModal">Upload Photo</a>

        @if (session()->has('success'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Informasi</strong>{{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismisss="alert" aria-label="Close"></button>
        </div>
        @endif

        @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <div class="table-responsive py-3">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Judul</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($photo as $p)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            <img src="{{ asset('storage/photo/'.$p->image) }}" height="150" alt="">
                        </td>
                        <td>{{ $p->judul }}</td>
                        <td>
                            <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#editModal{{ $p->id }}">Edit</a>
                            <form action="{{ route('photo.hapus', $p->id) }}" method="POST" class="d-inline">
                                @csrf
                                <button type="submit" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data')" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>

@foreach ($photo as $p)
<div class="modal fade" id="editModal{{ $p->id }}" tabindex="-1" aria-labelledby="editModalLabel{{ $p->id }}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel{{ $p->id }}">Edit Photo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('photo.update', $p->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="id_photo" value="{{ $p->id }}">

                    <div class="form-group mb-3">
                        <label for="">Pilih Photo</label>
                        <div class="col-lg-4">
                            <img src="{{ asset('storage/photo/' . $p->image) }}" height="150" alt="">
                        </div>
                        <input type="hidden" name="old_image" value="{{ $p->image }}">
                        <input type="file" name="image" class="form-control">
                    </div>

                    <div class="form-group mb-3">
                        <label for="">Nama Kegiatan</label>
                        <input type="text" name="judul" class="form-control" value="{{ $p->judul }}">
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach

<div class="modal fade" id="uploadModal" tabindex="-1" aria-labelledby="uploadModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="uploadModalLabel">Upload Photo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('photo.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group mb-3">
                        <label for="">Pilih Photo</label>
                        <input type="file" name="image" class="form-control">
                    </div>

                    <div class="form-group mb-3">
                        <label for="">Nama Kegiatan</label>
                        <input type="text" name="judul" class="form-control">
                    </div>

                    <div class="form-group mb-3">
                        <label for="">Kategori</label>
                        <select name="kategori" class="form-select">
                            <option value="KEGIATAN">KEGIATAN</option>
                            <option value="PRESTASI">PRESTASI</option>
                            <option value="FASILITAS">FASILITAS</option>
                            <!-- Tambahkan lebih banyak option sesuai dengan jurusan yang diinginkan -->
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
