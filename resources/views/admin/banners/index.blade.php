@extends('admin.banners.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Banner</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('admin.banners.create') }}">Buat Banner</a>
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
            <th>Nama Banner</th>
            <th>Foto Banner</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($banners as $banner)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $banner>nama_banner }}</td>
            <td>{{ $banner->foto_banner }}</td>
            <td>
                <form action="{{ route('admin.banners.destroy',$banner->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('admin.banners.show',$banner->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('admin.banners.edit',$banner->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $banners->links() !!}

@endsection
