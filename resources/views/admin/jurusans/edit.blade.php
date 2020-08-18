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
                    <form method="post" class="form-data" id="form-data" action="{{route('admin.jurusans.update', $jurusan->id)}}">
                        @method('patch')
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Nama Jurusan</label>
                                    <input type="text" name="nama_jurusan" id="nama_jurusan" class="form-control"
                                        required="true" value="{{$madings->nama_jurusan}}">
                                    <label>Detail Jurusan</label>
                                    <input type="text" name="detail_jurusan" id="detail_jurusan" class="form-control"
                                        required="true" value="{{$madings->detail_jurusan}}">
                                    <label>Foto Jurusan</label>
                                    <input type="file" name="foto_jurusan" id="foto_jurusan" class="form-control"
                                        required="true" value="{{$madings->foto_jurusan}}">
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
