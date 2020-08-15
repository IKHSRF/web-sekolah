@extends('jurusans.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Jurusan</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('jurusans.create') }}">Buat Jurusan Baru</a>
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
            <th>Nama Jurusan</th>
            <th>Detail Jurusan</th>
            <th>Tahun Berdiri</th>
            <th>Foto Jurusan</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($jurusans as $jurusan)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $jurusan->nama_jurusan }}</td>
            <td>{{ $jurusan->detail_jurusan }}</td>
            <td>{{ $jurusan->tahun_jurusan }}</td>
            <td>{{ $jurusan->foto_jurusan }}</td>
            <td>
                <form action="{{ route('jurusans.destroy',$jurusan->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('jurusans.show',$jurusan->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('jurusans.edit',$jurusan->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $jurusans->links() !!}

@endsection
