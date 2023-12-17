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
                                <h4 class="card-title">Data Alternatif</h4>
                            </div>
                            <div class="card-body">
                                <a href="{{route('alternatif.create')}}" class="btn btn-info mb-2">
                                    <i class="fa fa-plus"></i> Tambah Data
                                </a>
                                <div class="table-responsive">
                                    <table id="example" class="table table-bordered table-striped display" style="min-width: 845px">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama Alternatif</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php($no = 1)
                                                @foreach ($alternatif as $dd)
                                                    <tr class="odd">
                                                        <td>{{ $no++}}</td>
                                                        <td>{{ $dd->nama_alternatif}}</td>
                                                        <td>
                                                            <a href="{{route('alternatif.editdata', $dd->id)}}" class="btn btn-warning">
                                                                <i class="fa fa-pencil fa-fw"></i> Update
                                                            </a>
                                                            <a href="{{route('alternatif.deletdata', $dd->id)}}" class="btn btn-danger">
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
