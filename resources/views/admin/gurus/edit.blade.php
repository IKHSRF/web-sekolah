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
                    <form method="post" class="form-data" id="form-data" action="{{route('admin.gurus.update', $gurus->id)}}" enctype="multipart/form-data">
                        @method('patch')
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Nama Guru</label>
                                    <input type="text" name="nama_guru" id="nama_guru" class="form-control"
                                        required="true" value="{{$gurus->nama_guru}}">
                                    <label>Jabatan</label>
                                    <input type="text" name="jabatan" id="jabatan" class="form-control"
                                        required="true" value="{{$gurus->jabatan}}">
                                    <label>Foto Guru</label>
                                    <img id="imagePreview" src="{{ asset('gambar/guru/'.$gurus->foto_guru) }}"
                                        style="object-fit: cover; width: 60%; padding: 10px;">
                                    <input type="file" name="foto_guru" id="foto_guru" class="form-control"
                                        value="{{$gurus->foto_guru}}">
                                    <b><i class="text-danger">kosongkan jika tidak ingin mengubah foto</i></b>
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
@section('js')
    <script>
    function imagePreview(input) {
        if (input.files && input.files[0]) {
            let reader = new FileReader();
            reader.onload = function (e) {
                $('#imagePreview').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    $('#foto_guru').change(function () {
        imagePreview(this);
    });
    </script>
@endsection