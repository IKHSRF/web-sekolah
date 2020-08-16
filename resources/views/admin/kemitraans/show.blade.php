@extends('admin.kemitraans.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Lihat Mitra</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('admin.kemitraans.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Mitra:</strong>
                {{ $kemitraan->nama_mitra }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Detail Mitra:</strong>
                {{ $kemitraam->detail_mitra }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tahun Bermitra:</strong>
                {{ $kemitraan->tahun_mitra }}
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
