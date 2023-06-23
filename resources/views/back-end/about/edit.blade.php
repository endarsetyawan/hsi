@extends('back-end.layouts.template')
@section('content')
    <div class="content-wrapper">

        <!-- Main content -->
        <section class="content mt-3">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">About Us</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="card card-primary">
                                    <div class="card-header">
                                      <h3 class="card-title">Tambah Data</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                      <form action="{{ route('about-update', $about->id) }}" method="POST">
                                        {{ csrf_field() }}
                                        <div class="row">
                                          <div class="col-sm-12">
                                            <!-- text input -->
                                            <div class="form-group">
                                              <label>Judul</label>
                                              <input name="judul" type="text" class="form-control" placeholder="Masukkan Judul" value="{{ $about->judul }}" autofocus>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-sm-12">
                                            <!-- textarea -->
                                            <div class="form-group">
                                              <label>Isi</label>
                                              <textarea name="isi" class="form-control" rows="10" placeholder="Masukkan isi/ keterangan">{{ $about->isi }}</textarea>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="row">
                                            <button type="submit" class="btn btn-primary mx-auto" >Simpan</button>
                                        </div>
                                      </form>
                                    </div>
                                    <!-- /.card-body -->
                                  </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
