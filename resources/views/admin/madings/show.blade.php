@extends('admin.madings.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Lihat Mading</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('admin.madings.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Judul:</strong>
                {{ $mading->nama_mading }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Detail:</strong>
                {{ $mading->detail_mading }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Foto Mading:</strong>
                {{ $mading->foto_mading }}
            </div>
        </div>
    </div>
@endsection
