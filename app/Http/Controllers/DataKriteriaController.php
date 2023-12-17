<?php

namespace App\Http\Controllers;

use App\Models\DataKriteriaModel;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Symfony\Component\Mime\Part\DataPart;

class DataKriteriaController extends Controller
{
    public function datakriteria(Request $request){
        $kriteria = DataKriteriaModel::get();
        return view('admin.datakriteria', ['kriteria' => $kriteria]);
    }

    public function formkriteria(Request $request){
        return view('form.formkriteria');
    }

    public function simpan(Request $request){
        $validation = Validator::make($request->all(),
        [
            'nama_kriteria' => 'required',
            'sub_kriteria' => 'required',
            'bobot' => 'required',
        ],

        [
            'nama_kriteria.required' => 'Form nama kriteria tidak boleh kosong',
            'sub_kriteria.required' => 'Form sub kriteria tidak boleh kosong',
            'bobot.required' => 'Form bobot tidak boleh kosong',
        ]

        );

        if($validation->fails()){
            $errors = $validation->errors()->first();
            return redirect()->route('admin');
        }

        $data = new DataKriteriaModel;
        $data->nama_kriteria = $request->input('nama_kriteria');
        $data->sub_kriteria = $request->input('sub_kriteria');
        $data->bobot = $request->input('bobot');
        $data->save();

        return redirect()->route('kriteria');
    }

    public function editdata($id){
        $kriteria = DataKriteriaModel::find($id);

        return view('form.formkriteria', compact('kriteria'));
    }

    public function updatedata(Request $request, $id){
        $validation = Validator::make($request->all(),
        [
            'nama_kriteria' => 'required',
            'sub_kriteria' => 'required',
            'bobot' => 'required',
        ],

        [
            'nama_kriteria.required' => 'Form nama kriteria tidak boleh kosong',
            'sub_kriteria.required' => 'Form sub kriteria tidak boleh kosong',
            'bobot.required' => 'Form bobot tidak boleh kosong',
        ]

        );

        if($validation->fails()){
            $errors = $validation->errors()->first();

            return redirect()->route('kriteria');
        }

        $data = DataKriteriaModel::find($id);

        $data->nama_kriteria = $request->input('nama_kriteria');
        $data->sub_kriteria = $request->input('sub_kriteria');
        $data->bobot = $request->input('bobot');
        $data->save();

        return redirect()->route('kriteria');

    }

    public function deletdata($id){
        DataKriteriaModel::find($id)->delete();

        return redirect()->route('kriteria');
    }

}
