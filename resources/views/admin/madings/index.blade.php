@extends('admin.madings.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Mading</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('admin.madings.create') }}">Buat Mading Baru</a>
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
            <th>Detail</th>
            <th>Foto Mading</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($madings as $mading)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $mading->nama_mading }}</td>
            <td>{{ $mading->detail_mading }}</td>
            <td>{{ $mading->foto_mading }}</td>
            <td>
                <form action="{{ route('admin.madings.destroy',$mading->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('admin.madings.show',$mading->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('admin.madings.edit',$mading->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $madings->links() !!}

@endsection
