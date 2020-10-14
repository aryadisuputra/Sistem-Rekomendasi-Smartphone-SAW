<?php

namespace App\Http\Controllers;
use Yajra\Datatables\Datatables;
use Validator;
use \App\Helper\Alert;
use \App\Model\Tanaman;
use Illuminate\Http\Request;

class tanamanController extends Controller
{
    //
    public function index()
    {
        # code...

        return Datatables::of(Tanaman::all())
                ->setRowId(function(Tanaman $tanaman){
                    return $tanaman->id;
                })->addColumn('aksi','admin.tanaman.action-button')
                ->rawColumns(['aksi'])
                ->make(true);
         }

    public function delete(Request $request){
        $validator = Validator::make($request->all(),[
            "id"=> "required|numeric|exists:tanaman,id"
        ]);
        $response = ['ok'=>true];
        if($validator->fails()){
            $response['ok'] = false;
            $response['msg'] = "Id tidak valid";
        }else{
            Tanaman::find($request->input('id'))->delete();
            $response['msg'] = "berhasil menghapus data";
        }
        return response()->json($response, 200);
    }
    public function store(Request $request)
    {
        # code...
        $res = ['stored'=>true];
        $validator = Validator::make($request->all(),[
            "nama_tanaman" => "required|min:3",
            'tekanan_udara' => 'required|numeric',
            'kecepatan_angin' => 'required|numeric',
            'kelembaban_udara' => 'required|numeric',
            'penyinaran_matahari' => 'required|numeric',
            'jumlah_curah_hujan' => 'required|numeric',
            'suhu' => 'required|numeric',
        ]);
        if($validator->fails()){
            $res['msg'] = Alert::errorList($validator->errors());
            $res['stored'] = false;
        }else{
            $tanaman = new Tanaman();
            $tanaman->nama_tanaman = $request->input("nama_tanaman");
            $tanaman->tekanan_udara = $request->input('tekanan_udara');
            $tanaman->kecepatan_angin = $request->input('kecepatan_angin');
            $tanaman->kelembaban_udara = $request->input('kelembaban_udara');
            $tanaman->penyinaran_matahari = $request->input('penyinaran_matahari');
            $tanaman->jumlah_curah_hujan = $request->input('jumlah_curah_hujan');
            $tanaman->suhu = $request->input('suhu');
            $tanaman->save();
            $res['msg'] = Alert::success("Berhasil Menambahkan Data");
        }

        return response()->json($res, 200);
    }
    public function update(Request $request)
    {
        # code...
        $validator = Validator::make($request->all(),[
            "name" => "required|min:3",
            'email' => 'required|email|max:60',
            'role' => 'required'
        ]);

        $response = ["stored"=>true];
        
        if($validator->fails()){
            $response['stored'] = false;
            $response['msg']    = Alert::errorList($validator->errors());
        }else{
            $user = User::find($request->input('id'));
            if($user){

                
                $user->name = $request->input("name");
                $user->email = $request->input('email');
                $user->save();
                $user->role()->sync($request->input('role'));
                $response['msg'] = Alert::success("Berhasil Memperbarui Data Portofolio");
            }else{
                $response['stored'] = false;
                $response['msg']    = Alert::errorList("Data tidak ditemukan");
            }
        }
        return response()->json($response, 200);
    }
}
