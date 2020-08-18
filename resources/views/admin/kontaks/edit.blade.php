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
                    <form method="post" class="form-data" id="form-data" action="{{route('admin.kontaks.update', $kontaks->id)}}">
                        @method('patch')
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Hotline</label>
                                    <input type="number" name="hotline" id="hotline" class="form-control"
                                        required="true" value="{{$kontaks->hotline}}">
                                    <label>Email</label>
                                    <input type="email" name="email" id="email" class="form-control"
                                        required="true" value="{{$kontaks->email}}">
                                    <label>Alamat Sekolah</label>
                                    <input type="text" name="alamat" id="alamat" class="form-control"
                                        required="true" value="{{$kontaks->alamat}}">
                                        <label>Youtube</label>
                                    <input type="text" name="youtube" id="youtube" class="form-control"
                                        required="true" value="{{$kontaks->youtube}}">
                                        <label>Facebook</label>
                                    <input type="text" name="facebook" id="facebook" class="form-control"
                                        required="true" value="{{$kontaks->facebook}}">
                                        <label>Instagram</label>
                                    <input type="text" name="instagram" id="instagram" class="form-control"
                                        required="true" value="{{$kontaks->instagram}}">
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
