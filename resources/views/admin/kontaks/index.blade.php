@extends('admin.kontaks.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Kontak</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('admin.kontaks.create') }}">Tambah Data Kontak</a>
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
            <th>Hotline</th>
            <th>Alamat Email</th>
            <th>Alamat Sekolah</th>
            <th>Sosial Media</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($kontaks as $kontak)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $kontak->hotline }}</td>
            <td>{{ $kontak->email }}</td>
            <td>{{ $kontak->alamat }}</td>
            <td>{{ $kontak->sosial_media }}</td>
            <td>
                <form action="{{ route('admin.kontaks.destroy',$kontak->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('admin.kontaks.show',$kontak->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('admin.kontaks.edit',$kontak->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $kontaks->links() !!}

@endsection
