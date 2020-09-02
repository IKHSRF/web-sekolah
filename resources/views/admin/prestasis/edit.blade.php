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
                    <form method="post" class="form-data" id="form-data" action="{{route('admin.prestasis.update', $prestasis->id)}}" enctype="multipart/form-data">
                        @method('patch')
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Nama Prestasi</label>
                                    <input type="text" name="nama_prestasi" id="nama_prestasi" class="form-control"
                                        required="true" value="{{$prestasis->nama_prestasi}}">
                                        <label>Detail Prestasi</label>
                                    <textarea name="detail_prestasi" id="detail_prestasi" class="form-control"
                                        required="true" style="height:150px;">{{$prestasis->detail_prestasi}}</textarea>
                                        <label>Foto Prestasi</label>
                                    <img id="imagePreview" src="{{ asset('gambar/prestasi/'.$prestasis->foto_prestasi) }}"
                                        style="object-fit: cover; width: 60%; padding: 10px;">
                                    <input type="file" name="foto_prestasi" id="foto_prestasi" class="form-control"
                                        value="{{$prestasis->foto_prestasi}}">
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

    $('#foto_prestasi').change(function () {
        imagePreview(this);
    });
    </script>
@endsection