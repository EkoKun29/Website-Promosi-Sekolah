@extends('layouts.main')
@section('content')
<section class="py-5" style="margin-top: 100px">
    <div class="container col-xxl-8 ">
        <h4>Halaman Berita</h4>

        <a href="{{ route('karier.create') }}" class="btn btn-primary">Buat Berita</a>

        <div class="table-responsive">
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
                    <?php $no = 1; ?>
                    @foreach ($karier as $kr)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>
                                <img src="{{ asset('storage/karier/'.$kr->image) }}" height="100" alt="">
                            </td>
                            <td>{{ $kr->judul }}</td>
                            <td>
                                <a href="{{ route('karier.edit', $kr->id) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('karier.hapus', $kr->id) }}" method="POST" class="d-inline">
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
@endsection
