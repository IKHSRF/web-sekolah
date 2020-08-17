@extends('layouts.admin.main')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Sejarah Sekolah</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('admin.sejarahs.create') }}">Tambah Data Sejarah</a>
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
            <th>Detail Sejarah</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($sejarahs as $sejarah)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $sejarah->judul_sejarah }}</td>
            <td>{{ $sejarah->detail_sejarah }}</td>
            <td>
                <form action="{{ route('admin.sejarahs.destroy',$sejarah->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('admin.sejarahs.show',$sejarah->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('admin.sejarahs.edit',$sejarah->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $sejarahs->links() !!}

@endsection
