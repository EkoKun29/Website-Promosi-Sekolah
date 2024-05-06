@extends('layouts.main')
@section('content')
<section class="py-5" style="margin-top: 100px">
    <div class="container col-xxl-8 ">
        <h4>Halaman Berita</h4>

        <a href="{{ route('berita.create') }}" class="btn btn-primary"> + Buat Berita</a>

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
                    @foreach ($berita as $b)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>
                            <img src="{{ url('storage/artikel/' . basename($b->image_url)) }}" height="150" alt="">

                                {{-- <img src="{{ $b->image_url }}" height="100" alt=""> --}}
                            </td>
                            <td>{{ $b->judul }}</td>
                            <td>
                                <a href="{{ route('berita.edit', $b->id) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('berita.hapus', $b->id) }}" method="POST" class="d-inline">
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
