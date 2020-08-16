@extends('kemitraans.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Kemitraan</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('kemitraans.create') }}">Buat Data Mitra Baru</a>
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
            <th>Nama Mitra</th>
            <th>Detail Mitra</th>
            <th>Tahun Bermitra</th>
            <th>Foto Mitra</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($kemitraans as $kemitraan)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $kemitraan->nama_mitra }}</td>
            <td>{{ $kemitraan->detail_mitra }}</td>
            <td>{{ $kemitraan->tahun_mitra }}</td>
            <td>{{ $kemitraan->foto_mitra }}</td>
            <td>
                <form action="{{ route('kemitraans.destroy',$kemitraan->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('kemitraans.show',$kemitraan->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('kemitraans.edit',$kemitraan->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $kemitraans->links() !!}

@endsection
