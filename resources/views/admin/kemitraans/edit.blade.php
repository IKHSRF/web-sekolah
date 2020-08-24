@extends('layouts.admin.main')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">

                </div><!-- /.col -->
                <div class="col-sm-6">

                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">Ubah Data</h3>

                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form method="post" class="form-data" id="form-data" action="{{route('admin.kemitraans.update', $kemitraans->id)}}">
                        @method('patch')
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Nama Mitra</label>
                                    <input type="text" name="nama_mitra" id="nama_mitra" class="form-control"
                                        required="true" value="{{$kemitraans->nama_mitra}}">
                                    <label>Detail Mitra</label>
                                    <input type="text" name="detail_mitra" id="detail_mitra" class="form-control"
                                        required="true" value="{{$kemitraans->detail_mitra}}">
                                        <label>Tahun Bermitra</label>
                                    <input type="text" name="tahun_mitra" id="tahun_mitra" class="form-control"
                                        required="true" value="{{$kemitraans->tahun_mitra}}">
                                    <label>Foto Mitra</label>
                                    <input type="file" name="foto_mitra" id="foto_mitra" class="form-control"
                                        required="true" value="{{$kemitraans->foto_mitra}}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="simpan" id="simpan" class="btn btn-primary">
                                <i class="fa fa-save"></i> Update
                            </button>
                        </div>
                    </form>
                    <hr>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.card-body -->

        </div>
</div>
</section>
<!-- /.content -->
</div>

@endsection
