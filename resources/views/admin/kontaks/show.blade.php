@extends('kontaks.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Lihat Data Kontak</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('kontaks.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>No Hotline:</strong>
                {{ $kontak->hotline }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Alamat Email:</strong>
                {{ $kontak->email }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Alamat Sekolah:</strong>
                {{ $kontak->alamat }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Sosial Media:</strong>
                {{ $kontak->sosial_media }}
            </div>
        </div>
    </div>
@endsection
