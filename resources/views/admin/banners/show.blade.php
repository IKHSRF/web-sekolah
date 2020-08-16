@extends('admin.banners.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Lihat Banner</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('admin.banners.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Banner:</strong>
                {{ $banner->nama_banner }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Foto Banner:</strong>
                {{ banner->foto_banner }}
            </div>
        </div>
    </div>
@endsection
