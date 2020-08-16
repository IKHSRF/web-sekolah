@extends('admin.jurusans.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Lihat Jurusan</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('admin.jurusans.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Jurusan:</strong>
                {{ $jurusan->nama_jurusan }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Detail Jurusan:</strong>
                {{ $jurusan->detail_jurusan }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tahun Berdiri:</strong>
                {{ $jurusan->tahun_berdiri }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Foto:</strong>
                {{ $jurusan->foto_jurusan }}
            </div>
        </div>
    </div>
@endsection
