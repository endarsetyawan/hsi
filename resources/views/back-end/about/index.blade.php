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
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr style="width: 100%;text-align: center">
                                            <th style="width: 15%">Judul</th>
                                            <th style="width: 35%">Isi</th>
                                            <th style="width: 15%">Gambar</th>
                                            <th style="width: 5%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($qty_about == 0)
                                            <tr>
                                                <td style="text-align: center" colspan="3">Data Kosong</td>
                                                <td style="text-align: center">
                                                    <a href="{{ route('about-create') }}" class="btn btn-sm btn-success">Add</a>
                                                </td>
                                            </tr>
                                        @else
                                            
                                        @endif
                                        @foreach ($about as $data)
                                            <tr>
                                                <td>{{ $data->judul}}</td>
                                                <td>{{ $data->isi}}</td>
                                                <td style="text-align: center">{{ $data->gambar}}</td>
                                                <td style="text-align: center">
                                                    <a href="{{ route('about-edit', $data->id) }}" class="btn btn-sm btn-info">Edit</a>
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
