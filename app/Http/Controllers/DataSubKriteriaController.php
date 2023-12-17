<?php

namespace App\Http\Controllers;

use App\Models\DataSubKriteriaModel;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Symfony\Component\Mime\Part\DataPart;

class DataSubKriteriaController extends Controller
{
    public function datasubkriteria(Request $request){
        $subkriteria = DataSubKriteriaModel::get();
        return view('admin.datasubkriteria', ['subkriteria' => $subkriteria]);
    }

    public function formsubkriteria(Request $request){
        return view('form.formsubkriteria');
    }

    public function simpan(Request $request){
        $validation = Validator::make($request->all(),
        [
            'nama_kriteria' => 'required',
            'sub_kriteria' => 'required',
            'jenis' => 'required',
            'kompetensi' => 'required',
        ],

        [
            'nama_kriteria.required' => 'Form nama kriteria tidak boleh kosong',
            'sub_kriteria.required' => 'Form sub kriteria tidak boleh kosong',
            'jenis.required' => 'Form jenis tidak boleh kosong',
            'kompetensi.required' => 'Form kompetensi tidak boleh kosong',
        ]

        );

        if($validation->fails()){
            $errors = $validation->errors()->first();
            return redirect()->route('subkriteria');
        }

        $data = new DataSubKriteriaModel;
        $data->nama_kriteria = $request->input('nama_kriteria');
        $data->sub_kriteria = $request->input('sub_kriteria');
        $data->jenis = $request->input('jenis');
        $data->kompetensi = $request->input('kompetensi');
        $data->save();

        return redirect()->route('subkriteria');
    }

    public function editdata($id){
        $subkriteria = DataSubKriteriaModel::find($id);

        return view('form.formsubkriteria', compact('subkriteria'));
    }

    public function updatedata(Request $request, $id){
        $validation = Validator::make($request->all(),
        [
            'nama_kriteria' => 'required',
            'sub_kriteria' => 'required',
            'jenis' => 'required',
            'kompetensi' => 'required',
        ],

        [
            'nama_kriteria.required' => 'Form nama kriteria tidak boleh kosong',
            'sub_kriteria.required' => 'Form sub kriteria tidak boleh kosong',
            'jenis.required' => 'Form jenis tidak boleh kosong',
            'kompetensi.required' => 'Form kompetensi tidak boleh kosong',
        ]

        );

        if($validation->fails()){
            $errors = $validation->errors()->first();

            return redirect()->route('subkriteria');
        }

        $data = DataSubKriteriaModel::find($id);

        $data->nama_kriteria = $request->input('nama_kriteria');
        $data->sub_kriteria = $request->input('sub_kriteria');
        $data->jenis = $request->input('jenis');
        $data->kompetensi = $request->input('kompetensi');
        $data->save();

        return redirect()->route('subkriteria');

    }

    public function deletdata($id){
        DataSubKriteriaModel::find($id)->delete();

        return redirect()->route('subkriteria');
    }

}
