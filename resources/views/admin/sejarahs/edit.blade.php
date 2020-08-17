@extends('layouts.admin.main')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Sejarah</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('admin.sejarahs.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.sejarahs.update',$sejarah->id) }}" method="POST">
        @csrf
        @method('PUT')

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Judul Sejarah:</strong>
                    <input type="text" name="judul_sejarah" value="{{ $sejarah->judul_sejarahs }}" class="form-control" placeholder="Judul Sejarah">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Detail Sejarah:</strong>
                    <textarea class="form-control" style="height:150px" name="detail_sejarah" placeholder="Detail Sejarah">{{ $sejarah->detail_sejarah }}</textarea>
                </div>
            </div>
        </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection
