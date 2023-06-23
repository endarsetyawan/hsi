@extends('back-end.layouts.template')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        {{-- <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>DataTables</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">DataTables</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section> --}}

        <!-- Main content -->
        <section class="content mt-3">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Beranda</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr style="width: 100%;text-align: center">
                                            <th style="width: 5%">No</th>
                                            <th style="width: 20%">Nama</th>
                                            <th style="width: 20%">Tagline</th>
                                            <th style="width: 25%">Keterangan</th>
                                            <th style="width: 25%">Daftar</th>
                                            <th style="width: 5%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($np as $data)
                                            <tr>
                                                <td style="text-align: center">{{ $data->id}}</td>
                                                <td style="text-align: center">{{ $data->nama_perusahaan}}</td>
                                                <td style="text-align: center">{{ $data->tagline}}</td>
                                                <td style="text-align: center">{{ $data->keterangan}}</td>
                                                <td style="text-align: center">{{ $data->daftar}}</td>
                                                <td style="text-align: center">
                                                    <a href="{{ route('beranda.edit', $data->id) }}" class="btn btn-sm btn-info">Edit</a>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
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
