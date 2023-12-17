@extends('layouts.master')

@section('title')
    Form create | Alternatif
@endsection

@section('content')
<div class="content-body">
    <div class="container-fluid">
        <!-- row -->
        <div class="row">
            <div class="col-12">
                @if(isset($alternatif))
                        <form action="{{route('alternatif.create.updatedata', $alternatif->id)}}" method="POST">
                        @else
                        <form action="{{route('alternatif.create.simpan')}}" method="POST">
                        @endif
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-info">{{ isset($alternatif) ? 'Form Edit Data Alternatif' : 'Form Tambah Data Alternatif' }}</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="nama_alternatif">Nama Alternatif</label>
                                            <input type="text" class="form-control" name="nama_alternatif" value="{{isset($alternatif) ? $alternatif->nama_alternatif : ''}}" id="nama_alternatif">
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
