@extends('jurusans.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Jurusan</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('jurusans.index') }}"> Back</a>
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

    <form action="{{ route('jurusans.update',$jurusan->id) }}" method="POST">
        @csrf
        @method('PUT')

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Jurusan:</strong>
                    <input type="text" name="nama_jurusan" value="{{ $jurusan->nama_jurusan }}" class="form-control" placeholder="Nama Jurusan">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tahun Berdiri:</strong>
                    <input type="number" name="tahun_berdiri" value="{{ $jurusan->tahun_berdiri }}" class="form-control" placeholder="Tahun Bediri">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Detail Jurusan:</strong>
                    <textarea class="form-control" style="height:150px" name="detail_jurusan" placeholder="Detail Jurusan">{{ $jurusan->detail_jurusan }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Upload Foto</strong>
                <input type="file" name="foto_jurusan">Upload</input>
            </div>
        </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection
