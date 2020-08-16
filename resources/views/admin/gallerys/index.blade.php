@extends('admin.gallerys.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Galeri</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('admin.gallerys.create') }}">Tambah Galeri Baru</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Detail Galeri</th>
            <th>Foto Galeri</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($gallerys as $gallery)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $gallery->nama_galeri }}</td>
            <td>{{ $gallery->detail_galeri }}</td>
            <td>{{ $gallery->foto_galeri }}</td>
            <td>
                <form action="{{ route('admin.gallerys.destroy',$akademik->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('admin.gallerys.show',$akademik->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('admin.gallerys.edit',$akademik->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $gallerys->links() !!}

@endsection
