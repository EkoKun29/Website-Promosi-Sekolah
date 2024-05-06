@extends('layouts.main')
@section('content')
<section class="py-5" style="margin-top: 100px">
    <div class="container col-xxl-8">
        <h4>Halaman Profil Guru</h4>

        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#uploadModal"> + Tambah Data</a>

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
                        <th>Nama</th>
                        <th>Bidang</th>
                        <th>Foto</th>
                        <th>Deskripsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($guru as $g)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $g->name }}</td>
                        <td>{{ $g->bidang }}</td>
                        <td>
                            <img src="{{ url('storage/guru/' . basename($g->image_url)) }}" height="150" alt="">

                            {{-- <img src="{{ $g->image_url }}" height="150" alt=""> --}}
                        </td>
                        <td>{{ $g->desc }}</td>
                        <td>
                            <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#editModal{{ $g->id }}">Edit</a>
                            <form action="{{ route('guru.hapus', $g->id) }}" method="POST" class="d-inline">
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

@foreach ($guru as $g)
<div class="modal fade" id="editModal{{ $g->id }}" tabindex="-1" aria-labelledby="editModalLabel{{ $g->id }}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel{{ $g->id }}">Edit Photo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('guru.update', $g->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="id_photo" value="{{ $g->id }}">

                    <div class="form-group mb-3">
                        <label for="">Pilih Photo</label>
                        <div class="col-lg-4">
                            <img src="{{ asset('storage/guru/' . $g->image) }}" height="150" alt="">
                        </div>
                        <input type="hidden" name="old_image" value="{{ $g->image }}">
                        <input type="file" name="image" class="form-control">
                    </div>

                    <div class="form-group mb-3">
                        <label for="">Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control" value="{{ $g->name }}">
                    </div>

                    <div class="form-group mb-3">
                        <label for="">Bidang Pekerjaan</label>
                        <input type="text" name="bidang" class="form-control" value="{{ $g->bidang }}">
                    </div>

                    <div class="form-group mb-3">
                        <label for="">Deskripsi</label>
                        <textarea name="desc" id="{{ $g->desc }}" cols="20" rows="10" ></textarea>
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
                <h5 class="modal-title" id="uploadModalLabel">Data Guru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('guru.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group mb-3">
                        <label for="">Pilih Photo</label>
                        <input type="file" name="image" class="form-control">
                    </div>

                    <div class="form-group mb-3">
                        <label for="">Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control">
                    </div>

                    <div class="form-group mb-3">
                        <label for="">Bidang Pekerjaan</label>
                        <input type="text" name="bidang" class="form-control">
                    </div>

                    <div class="form-group mb-3">
                        <label for="">Deskripsi</label>
                        <textarea name="desc" id="desc" cols="30" rows="10"></textarea>
                        
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
