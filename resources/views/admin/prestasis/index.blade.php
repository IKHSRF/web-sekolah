@extends('prestasis.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Prestasi</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('prestasis.create') }}">Buat Data Prestasi</a>
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
            <th>Foto Prestasi</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($prestasis as $prestasi)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $prestasi->nama_prestasi }}</td>
            <td>{{ $prestasi->detail_prestasi }}</td>
            <td>{{ $prestasi->foto_prestasi }}</td>
            <td>
                <form action="{{ route('prestasis.destroy',$prestasi->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('prestasis.show',$prestasi->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('prestasis.edit',$prestasi->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $prestasis->links() !!}

@endsection
