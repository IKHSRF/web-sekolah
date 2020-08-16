@extends('admin.akademiks.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Lihat Kalender Akademik</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('admin.akademiks.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Kegiatan:</strong>
                {{ $akademik->nama_akademik }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tahun Ajaran:</strong>
                {{ $akademik->tahun_akademik }}
            </div>
        </div>
    </div>
@endsection
