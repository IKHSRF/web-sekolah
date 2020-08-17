@extends('layouts.admin.main')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Lihat Data Sejarah</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('admin.sejarahs.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>judul:</strong>
                {{ $sejarah->judul_sejarah }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Detail Sejarah:</strong>
                {{ $sejarah->detail_sejarah }}
            </div>
        </div>
    </div>
@endsection
