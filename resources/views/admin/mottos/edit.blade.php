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
                    <form method="post" class="form-data" id="form-data" action="{{route('admin.mottos.update', $mottos->id)}}">
                        @method('patch')
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Visi</label>
                                    <input type="text" name="visi" id="visi" class="form-control"
                                        required="true" value="{{$mottos->visi}}">
                                    <label>Misi</label>
                                    <input type="text" name="misi" id="misi" class="form-control"
                                        required="true" value="{{$mottos->misi}}">
                                    <label>Motto</label>
                                    <input type="text" name="motto" id="motto" class="form-control"
                                        required="true" value="{{$mottos->motto}}">
                                    <label>Kebijakan Mutu</label>
                                    <input type="text" name="kebijakan_mutu" id="kebijakan_mutu" class="form-control"
                                        required="true" value="{{$mottos->kebijakan_mutu}}">
                                    <label>Sasaran Mutu</label>
                                    <input type="text" name="sasaran_mutu" id="sasaran_mutu" class="form-control"
                                        required="true" value="{{$mottos->sasaran_mutu}}">
                                    <label>Karakter Utama</label>
                                    <input type="text" name="karakter_utama" id="karakter_utama" class="form-control"
                                        required="true" value="{{$mottos->karakter_utama}}">
                                    <label>Afirmasi Siswa</label>
                                    <input type="text" name="afirmasi_siswa" id="afirmasi_siswa" class="form-control"
                                        required="true" value="{{$mottos->afirmasi_siswa}}">
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
