@extends('layouts.master')

@section('title')
    DASHBOARD ADMIN | SPK
@endsection

@section('content')

<div class="content-body">
            <div class="container-fluid">
                <!-- row -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Data Kriteria</h4>
                            </div>
                            <div class="card-body">
                                <a href="{{route('kriteria.create')}}" class="btn btn-info mb-2">
                                    <i class="fa fa-plus"></i> Tambah Data
                                </a>
                                <div class="table-responsive">
                                    <table id="example" class="table table-bordered table-striped display" style="min-width: 845px">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama Kriteria</th>
                                                    <th>Sub-Kriteria</th>
                                                    <th>Bobot</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php($no = 1)
                                                @foreach ($kriteria as $dd)
                                                    <tr class="odd">
                                                        <td>{{ $no++}}</td>
                                                        <td>{{ $dd->nama_kriteria}}</td>
                                                        <td>{{ $dd->sub_kriteria}}</td>
                                                        <td>{{ $dd->bobot}}</td>
                                                        <td>
                                                            <a href="{{route('kriteria.editdata', $dd->id)}}" class="btn btn-warning">
                                                                <i class="fa fa-pencil fa-fw"></i> Update
                                                            </a>
                                                            <a href="{{route('kriteria.deletdata', $dd->id)}}" class="btn btn-danger">
                                                                <i class="fa fa-trash-o fa-fw"></i> Hapus
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
