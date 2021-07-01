<?php

namespace App\Http\Controllers;

use App\Models\Vaksin;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class VaksinController extends Controller
{
    public function index()
    {
        $vaksin = Vaksin::all();
        return response()->json([
            'code'   => 200,
            'status' => true,
            'message'=> 'Data Formulir Vaksin',
            'data'   => $vaksin
        ],200);
    }
    public function store(Request $req)
    {
        $validator = Validator::make($req->all(), [
            'jenis_pasien'          => 'required',
            'nama_lengkap'          => 'required',
            'tanggal_lahir'         => 'required',
            'no_handphone'          => 'required',
            'email'                 => 'required',
            'lokasi_pemeriksaan'    => 'required'
        ]);
        if($validator->fails()){
            return response()->json([
                'code'   => 400,
                'status' => false,
                'message'=> $validator->errors()
            ], 400);
        }
        try{
            $vaksin = Vaksin::create([
                'jenis_pasien'          => $req->jenis_pasien,
                'nama_lengkap'          => $req->nama_lengkap,
                'tanggal_lahir'         => $req->tanggal_lahir,
                'no_handphone'          => $req->no_handphone,
                'email'                 => $req->email,
                'lokasi_pemeriksaan'    => $req->lokasi_pemeriksaan
            ]);

            return response()->json([
                'code'   => 201,
                'status' => true,
                'message'=> 'Vaksin Data Added Successfully',
                'data'   => $vaksin
            ], 201);
        }catch(\Exception $exception){
            return response()->json([
                'code'   => 400,
                'status' => false,
                'message'=> "Can't Add Data Vaksin"
            ], 400);
        }
    }
    public function destroy($id)
    {
        try{
            $vaksin = Vaksin::findOrFail($id)->delete();
            return response()->json([
                'code'   => 200,
                'status' => true,
                'message'=> 'Vaksin Data Deleted Successfully',
            ],200);
        }catch(\Exception $exception){
            return response()->json([
                'code'   => 400,
                'status' => false,
                'message'=> "Can't Delete Data Vaksin"
            ],200);
        }
    }
}
