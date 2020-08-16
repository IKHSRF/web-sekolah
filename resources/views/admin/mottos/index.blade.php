@extends('mottos.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Visi Misi & Motto</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('mottos.create') }}">Tambah Visi Misi & Motto</a>
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
            <th>Visi Sekolah</th>
            <th>Misi Sekolah</th>
            <th>Motto Sekolah</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($mottos as $motto)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $motto->visi }}</td>
            <td>{{ $motto->misi }}</td>
            <td>{{ $motto->motto }}</td>
            <td>
                <form action="{{ route('mottos.destroy',$motto->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('mottos.show',$motto->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('mottos.edit',$motto->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $mottos->links() !!}

@endsection
