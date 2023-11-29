@extends('layouts.main')
@section('content')
<section class="py-5" style="margin-top: 100px">
    <div class="container col-xxl-8">
        <h4>Halaman Photo Kegiatan</h4>

        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#uploadModal">Tambah Data</a>

        @if (session()->has('success'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Informasi </strong>{{ session('success') }}
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
                        <th>Nama Karya</th>
                        <th>Jurusan</th>
                        <th>Image</th>
                        <th>Deskripsi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($konsentrasi as $k)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $k->nama }}</td>
                        <td>{{ $k->jurusan }}</td>
                        <td>
                            <img src="{{ $k->image_url }}" height="150" alt="">
                        </td>
                        <td>{{ $k->desc }}</td>
                        <td>
                            <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#editModal{{ $k->id }}">Edit</a>
                            <form action="{{ route('konsentrasi.hapus', $k->id) }}" method="POST" class="d-inline">
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

@foreach ($konsentrasi as $k)
<div class="modal fade" id="editModal{{ $k->id }}" tabindex="-1" aria-labelledby="editModalLabel{{ $k->id }}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel{{ $k->id }}">Edit Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('konsentrasi.update', $k->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="id_photo" value="{{ $k->id }}">

                    <div class="form-group mb-3">
                        <label for="">Pilih Photo</label>
                        <div class="col-lg-4">
                            <img src="{{ asset('storage/konsentrasi/' . $k->image) }}" height="150" alt="">
                        </div>
                        <input type="hidden" name="old_image" value="{{ $k->image }}">
                        <input type="file" name="image" class="form-control">
                    </div>

                    <div class="form-group mb-3">
                        <label for="">Nama Karya</label>
                        <input type="text" name="nama" class="form-control" value="{{ $k->nama }}">
                    </div>

                    <div class="form-group mb-3">
                        <label for="">Jurusan</label>
                        <input type="text" name="jurusan" class="form-control" value="{{ $k->jurusan }}">
                    </div>

                    <div class="form-group mb-3">
                        <label for="">Deskripsi</label>
                        <textarea name="desc" id="{{ $k->desc }}" cols="20" rows="10" ></textarea>
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
                <form action="{{ route('konsentrasi.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group mb-3">
                        <label for="">Pilih Photo</label>
                        <input type="file" name="image" class="form-control">
                    </div>

                    <div class="form-group mb-3">
                        <label for="">Nama Karya</label>
                        <input type="text" name="nama" class="form-control">
                    </div>

                    <div class="form-group mb-3">
                        <label for="">Jurusan</label>
                        <select name="jurusan" class="form-select">
                            <option value="AKUNTANSI">AKUNTANSI</option>
                            <option value="TEKNIK ALAT BERAT">TEKNIK ALAT BERAT</option>
                            <option value="TEKNIK AUDIO VISUAL">TEKNIK AUDIO VISUAL</option>
                            <option value="TEKNIK KOMPUTER JARINGAN">TEKNIK KOMPUTER JARINGAN</option>
                            <option value="TEKNIK KENDARAAN RINGAN">TEKNIK KENDARAAN RINGAN</option>
                            <option value="TEKNIK SEPEDA MOTOR">TEKNIK SEPEDA MOTOR</option>
                            <!-- Tambahkan lebih banyak option sesuai dengan jurusan yang diinginkan -->
                        </select>
                    </div>
                    

                    <div class="form-group mb-3">
                        <label for="">Deskripsi</label>
                        <input type="text" name="desc" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
