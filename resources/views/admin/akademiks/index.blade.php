@extends('admin.akademiks.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Kalender Akademik</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('admin.akademiks.create') }}">Buat Kalender Akademik Baru</a>
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
            <th>Nama Kegiatan</th>
            <th>Tahun Ajaran</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($akademiks as $akademik)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $akademik->nama_akademik }}</td>
            <td>{{ $akademik->tahun_akademik }}</td>
            <td>
                <form action="{{ route('admin.akademiks.destroy',$akademik->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('admin.akademiks.show',$akademik->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('admin.akademiks.edit',$akademik->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $akademiks->links() !!}

@endsection
