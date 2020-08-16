@extends('admin.saranas.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Sarana Prasarana</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('admin.saranas.create') }}">Buat Jurusan Baru</a>
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
            <th>Nama Sarana</th>
            <th>Detail Sarana</th>
            <th>Foto Sarana</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($saranas as $sarana)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $jurusan->nama_sarana }}</td>
            <td>{{ $jurusan->detail_sarana }}</td>
            <td>{{ $jurusan->foto_sarana }}</td>
            <td>
                <form action="{{ route('admin.saranas.destroy',$sarana->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('admin.saranas.show',$sarana->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('admin.saranas.edit',$sarana->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $saranas->links() !!}

@endsection
