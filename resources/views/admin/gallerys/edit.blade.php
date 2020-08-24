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
                    <form method="post" class="form-data" id="form-data" action="{{route('admin.gallerys.update', $gallerys->id)}}">
                        @method('patch')
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Nama Galeri</label>
                                    <input type="text" name="nama_galeri" id="nama_galeri" class="form-control"
                                        required="true" value="{{$gallerys->nama_galeri}}">
                                    <label>Detail Galeri</label>
                                    <input type="text" name="detail_galeri" id="detail_galeri" class="form-control"
                                        required="true" value="{{$gallerys->detail_galeri}}">
                                    <label>Foto Galeri</label>
                                    <input type="text" name="foto_galeri" id="foto_galeri" class="form-control"
                                        required="true" value="{{$gallerys->foto_galeri}}">
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
