@extends('admin.akademiks.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit kalender Akademik</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('admin.akademiks.index') }}"> Back</a>
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

    <form action="{{ route('admin.akademiks.update',$akademik->id) }}" method="POST">
        @csrf
        @method('PUT')

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Kegiatan:</strong>
                    <input type="text" name="nama_akademik" value="{{ $akademik->nama_akademik }}" class="form-control" placeholder="Nama Kegiatan">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tahun Ajaran:</strong>
                    <textarea class="form-control" style="height:150px" name="tahun_akademik" placeholder="Tahun Ajaran">{{ $akademik->tahun_akademik }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection
