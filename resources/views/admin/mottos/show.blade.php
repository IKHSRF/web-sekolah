@extends('mottos.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Lihat Visi Misi</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('mottos.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Visi Sekolah:</strong>
                {{ $motto->visi }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Misi Sekolah:</strong>
                {{ $motto->misi }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Motto Sekolah:</strong>
                {{ $motto->mottot }}
            </div>
        </div>
    </div>
@endsection
