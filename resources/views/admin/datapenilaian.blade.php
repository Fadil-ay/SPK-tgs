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
                                <h4 class="card-title">Data Penilaian</h4>
                            </div>

                            <div class="mt-3 ml-3">
                                <span><i class="fa fa-table fa-fw"></i> Loyalitas</span>
                            </div>

                            <!-- Button trigger modal -->
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary mb-3 mt-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                            + Tambah Data
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="table-responsive ">
                                    <table id="example" class="table table-bordered table-striped display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>Kriteria <br>1.a</th>
                                                <th>Kriteria <br>1.b</th>
                                                <th>Kriteria <br>1.c</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $no = 1;
                                            @endphp
                                            <tr class="odd">
                                                <td>Tes</td>
                                                <td>Tes</td>
                                                <td>Tes</td>
                                                <td>Tes</td>
                                                <td>
                                                    <a href="#" class="btn btn-warning">
                                                        <i class="fa fa-pencil fa-fw"></i> Edit
                                                    </a>
                                                    <a href="#" class="btn btn-danger">
                                                        <i class="fa fa-trash-o fa-fw"></i> Hapus
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
