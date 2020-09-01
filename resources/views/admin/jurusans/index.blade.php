@extends('layouts.admin.main')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                @if (session('status'))
                    <div class="alert alert-success">
                    {{session('status')}}
                    </div>
                @endif

                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <!-- Main content -->
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-lg-6">
                        <h3 class="card-title">Data Jurusan</h3>
                    </div>
                    <div class="col-lg-6">
                        <button type="button" class="btn btn-primary float-lg-right" data-toggle="modal" data-target="#exampleModal">
                            Tambah Data
                        </button>
                    </div>
                </div>

            </div>
            <div class="card-body">
                <table id="table" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Jurusan</th>
                            <th>Detail Jurusan</th>
                            <th>Tahun Berdiri</th>
                            <th>Foto Jurusan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach( $jurusans as $jurusan )
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $jurusan->nama_jurusan }}</td>
                            <td>
                                @if(strlen($jurusan->detail_jurusan)>39)
                                    {{ substr($jurusan->detail_jurusan,0,40).' ....' }}
                                @elseif(strlen($jurusan->detail_jurusan)<40)
                                    {{ $jurusan->detail_jurusan }}
                                @endif
                            </td>
                            <td>{{ $jurusan->tahun_berdiri}}</td>
                            <td style="width: 170px; text-align: center">
                                <img src="{{ asset('gambar/jurusan/'.$jurusan->foto_jurusan) }}"
                                    style="width: 70%">
                            </td>
                            <td>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <a href="{{route('admin.jurusans.edit', $jurusan->id)}}" class="btn btn-success btn-sm edit_data"> <i class="fa fa-edit"></i>Edit</a>
                                    </div>
                                    <div class="col-lg-4">
                                        <form action="{{route('admin.jurusans.destroy', $jurusan->id)}}" method="post">
                                            @method('delete')
                                            @csrf
                                            <button  class="btn btn-danger btn-sm hapus_data"> <i class="fa fa-trash"></i>Hapus</button>
                                        </form>
                                    </div>
                                </div>


                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.card-body -->

        <!-- /.card-footer-->
</div>
</section>
<!-- /.content -->
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" class="form-data" id="form-data" action="{{route('admin.jurusans.store')}}" enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Nama Jurusan</label>
                                <input type="text" name="nama_jurusan" id="nama_jurusan" class="form-control" required>
                                <p class="text-danger">{{ $errors->first('nama_jurusan') }}</p>
                                <label>Detail Jurusan</label>
                                <textarea name="detail_jurusan" id="detail_jurusan" class="form-control" style="height:150px;" required></textarea>
                                <p class="text-danger">{{ $errors->first('detail_jurusan') }}</p>
                                <label>Tahun Berdiri</label>
                                <input type="number" name="tahun_berdiri" id="tahun_berdiri" class="form-control" required>
                                <p class="text-danger">{{ $errors->first('tahun_berdiri') }}</p>
                                <label>Foto Jurusan</label>
                                <input type="file" name="foto_jurusan" id="foto_jurusan" class="form-control" required>
                                <p class="text-danger">{{ $errors->first('foto_jurusan') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    $(function () {
        $("#table").DataTable();
    });
</script>
@endsection
