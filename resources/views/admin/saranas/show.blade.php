@extends('admin.saranas.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Lihat Sarana Prasarana</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('admin.saranas.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Sarana:</strong>
                {{ $saranas->nama_sarana }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Detail Sarana:</strong>
                {{ $saranas->detail_sarana }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Foto Sarana:</strong>
                {{ $saranas->foto_sarana }}
            </div>
        </div>
    </div>
@endsection
