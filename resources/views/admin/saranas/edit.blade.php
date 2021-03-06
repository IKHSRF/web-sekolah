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
                    <form method="post" class="form-data" id="form-data" action="{{route('admin.saranas.update', $saranas->id)}}" enctype="multipart/form-data">
                        @method('patch')
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Nama Sarana</label>
                                    <input type="text" name="nama_sarana" id="nama_sarana" class="form-control"
                                        required="true" value="{{$saranas->nama_sarana}}">
                                        <label>Detail Saranan</label>
                                    <textarea name="detail_sarana" id="detail_sarana" class="form-control"
                                        required="true" style="height:150px;">{{$saranas->detail_sarana}}</textarea>
                                        <label>Foto Sarana</label>
                                    <img id="imagePreview" src="{{ asset('gambar/sarana/'.$saranas->foto_sarana) }}"
                                    style="object-fit: cover; width: 60%; padding: 10px;">
                                    <input type="file" name="foto_sarana" id="foto_sarana" class="form-control"
                                        value="{{$saranas->foto_sarana}}">
                                    <b><i class="text-danger">kosongkan jika tidak ingin mengubah foto</i></b>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="simpan" id="simpan" class="btn btn-primary mt-3">
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

    $('#foto_sarana').change(function () {
        imagePreview(this);
    });
    </script>
@endsection
