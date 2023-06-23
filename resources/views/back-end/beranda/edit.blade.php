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
                                <h3 class="card-title">Nama Perusahaan</h3>
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
                                            {{-- <tr>
                                                <td style="text-align: center">{{ $data->id}}</td>
                                                <td style="text-align: center">{{ $data->nama_perusahaan}}</td>
                                                <td style="text-align: center">{{ $data->tagline}}</td>
                                                <td style="text-align: center">{{ $data->keterangan}}</td>
                                                <td style="text-align: center">
                                                    
                                                </td>
                                            </tr> --}}
                                        @endforeach
                                            <tr>
                                                <td colspan="4"></td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: center" class="bg-info"><b>Edit</b></td>
                                                <form action="{{ route('beranda.update', $data->id) }}" method="post">
                                                    @csrf
                                                    @method('PUT')
                                                    <td style="text-align: center">
                                                        <textarea name="nama_perusahaan" class="form-control" rows="3" placeholder="Nama Perusahaan" autofocus>{{ $data->nama_perusahaan}}</textarea>    
                                                    </td>
                                                    <td style="text-align: center">
                                                        <textarea name="tagline" class="form-control" rows="3" placeholder="Tagline" autofocus>{{ $data->tagline}}</textarea>    
                                                    </td>
                                                    <td style="text-align: center">
                                                        <textarea name="keterangan" class="form-control" rows="3" placeholder="Keterangan" autofocus>{{ $data->keterangan}}</textarea>    
                                                    </td>
                                                    <td style="text-align: center">
                                                        <textarea name="daftar" class="form-control" rows="3" placeholder="Link Form Pendaftaran" autofocus>{{ $data->daftar}}</textarea>    
                                                    </td>
                                                    <td style="text-align: center">
                                                        <button type="submit" class="btn btn-sm btn-info">
                                                            Simpan
                                                        </button>
                                                    </td>
                                                </form>
                                            </tr>
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
