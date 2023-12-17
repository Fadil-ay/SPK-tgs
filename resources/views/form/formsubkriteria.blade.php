@extends('layouts.master')

@section('title')
    Form create | Sub kriteria
@endsection

@section('content')
<div class="content-body">
    <div class="container-fluid">
        <!-- row -->
        <div class="row">
            <div class="col-12">
                @if(isset($subkriteria))
                        <form action="{{route('subkriteria.create.updatedata', $subkriteria->id)}}" method="POST">
                        @else
                        <form action="{{route('subkriteria.create.simpan')}}" method="POST">
                        @endif
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-info">{{ isset($subkriteria) ? 'Form Edit Data Sub Kriteria' : 'Form Tambah Data Sub Kriteria' }}</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="nama_kriteria">Nama Kriteria</label>
                                            <input type="text" class="form-control" name="nama_kriteria" value="{{isset($subkriteria) ? $subkriteria->nama_kriteria : ''}}" id="nama_kriteria">
                                        </div>
                                        <div class="form-group">
                                            <label for="sub_kriteria">Sub-Kriteria</label>
                                            <input type="text" class="form-control" name="sub_kriteria" value="{{isset($subkriteria) ? $subkriteria->sub_kriteria : ''}}"  id="sub_kriteria">
                                        </div>
                                        <div class="form-group">
                                            <label for="bobot">Jenis</label>
                                            <input type="text" class="form-control" name="jenis" value="{{isset($subkriteria) ? $subkriteria->jenis : ''}}" id="jenis">
                                        </div>
                                    </div>
                                        <div class="form-group">
                                            <label for="bobot">Kompetensi</label>
                                            <input type="text" class="form-control" name="kompetensi" value="{{isset($subkriteria) ? $subkriteria->kompetensi : ''}}" id="kompetensi">
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
