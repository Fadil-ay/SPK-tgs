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
                                <h4 class="card-title">Data Perhitungan</h4>
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
                                <div class="table-responsive">
                                    <table id="example" class="table table-bordered table-striped display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>Kriteria <br>1.a</th>
                                                <th>Kriteria <br>1.b</th>
                                                <th>Kriteria <br>1.c</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $no = 1;
                                            @endphp
                                            <tr class="odd">
                                                <td>Karyawan</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr class="odd">
                                                <td>Tes</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr class="odd">
                                                <td>Tes</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr class="odd">
                                                <td>Kompetensi</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
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
