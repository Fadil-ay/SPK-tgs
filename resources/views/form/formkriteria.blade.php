@extends('layouts.master')

@section('title')
    Form create | kriteria
@endsection

@section('content')
<div class="content-body">
    <div class="container-fluid">
        <!-- row -->
        <div class="row">
            <div class="col-12">
                @if(isset($kriteria))
                        <form action="{{route('kriteria.create.updatedata', $kriteria->id)}}" method="POST">
                        @else
                        <form action="{{route('kriteria.create.simpan')}}" method="POST">
                        @endif
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-info">{{ isset($kriteria) ? 'Form Edit Data Kriteria' : 'Form Tambah Data Kriteria' }}</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="nama_kriteria">Nama Kriteria</label>
                                            <input type="text" class="form-control" name="nama_kriteria" value="{{isset($kriteria) ? $kriteria->nama_kriteria : ''}}" id="nama_kriteria">
                                        </div>
                                        <div class="form-group">
                                            <label for="sub_kriteria">Sub-Kriteria</label>
                                            <input type="text" class="form-control" name="sub_kriteria" value="{{isset($kriteria) ? $kriteria->sub_kriteria : ''}}"  id="sub_kriteria">
                                        </div>
                                        <div class="form-group">
                                            <label for="bobot">Bobot</label>
                                            <input type="text" class="form-control" name="bobot" value="{{isset($kriteria) ? $kriteria->bobot : ''}}" id="bobot">
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-info">Simpan</button>
                                        <a href="javascript:history.back()" class="btn btn-danger">Kembali</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection
