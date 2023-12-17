<?php

namespace App\Http\Controllers;

use App\Models\DataAlternatifModel;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Symfony\Component\Mime\Part\DataPart;

class DataAlternatifController extends Controller
{
    public function dataalternatif(Request $request){
        $alternatif = DataAlternatifModel::get();
        return view('admin.dataalternatif', ['alternatif' => $alternatif]);
    }
    public function formalternatif(Request $request){
        return view('form.formalternatif');
    }

    public function simpan(Request $request){
        $validation = Validator::make($request->all(),
        [
            'nama_alternatif' => 'required',
        ],

        [
            'nama_alternatif.required' => 'Form nama alternatif tidak boleh kosong',
        ]

        );

        if($validation->fails()){
            $errors = $validation->errors()->first();
            return redirect()->route('alternatif');
        }

        $data = new DataAlternatifModel;
        $data->nama_alternatif = $request->input('nama_alternatif');
        $data->save();

        return redirect()->route('alternatif');
    }

    public function editdata($id){
        $subkriteria = DataAlternatifModel::find($id);

        return view('form.formalternatif', compact('alternatif'));
    }

    public function updatedata(Request $request, $id){
        $validation = Validator::make($request->all(),
        [
            'nama_alternatif' => 'required'
        ],

        [
            'nama_alternatif.required' => 'Form nama alternatif tidak boleh kosong',
        ]

        );

        if($validation->fails()){
            $errors = $validation->errors()->first();

            return redirect()->route('alternatif');
        }

        $data = DataAlternatifModel::find($id);

        $data->nama_alternatif = $request->input('nama_alternatif');
        $data->save();

        return redirect()->route('alternatif');

    }

    public function deletdata($id){
        DataAlternatifModel::find($id)->delete();

        return redirect()->route('alternatif');
    }

}
