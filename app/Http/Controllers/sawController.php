<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Model\Tanaman;
use App\Model\Setting;
class sawController extends Controller
{
   
   
    public function get_matrix_nilai()
    {
        # code...
        $tanaman = Tanaman::all();
        foreach ($tanaman as $key) {
            # code...
            
            $key->l_tekanan_udara = $key->tekanan_udara;
            $key->l_kecepatan_angin = $key->kecepatan_angin;
            $key->l_kelembaban_udara = $key->kelembaban_udara;
            $key->l_penyinaran_matahari =$key->penyinaran_matahari;          
            $key->l_jumlah_curah_hujan = $key->jumlah_curah_hujan;
            $key->l_suhu = $key->suhu;
        }
        return $tanaman->all();
    }
    public function get_matrix_normalisasi()
    {
         /*
    tekanan_udara
    kecepatan_angin
    kelembaban_udara
    penyinaran_matahari
    jumlah_curah_hujan
    suhu
    */
        # code...
        $options = Setting::getAllKeyValue();
        $c1 = json_decode($options['c1']);
        $c2 = json_decode($options['c2']);
        $c3 = json_decode($options['c3']);
        $c4 = json_decode($options['c4']);
        $c5 = json_decode($options['c5']);
        $c6 = json_decode($options['c6']);
        $tanaman = $this->get_matrix_nilai();
        $temp_tekanan_udara = [];
        $temp_kecepatan_angin= [];
        $temp_kelembaban_udara = [];
        $temp_penyinaran_matahari = [];
        $temp_jumlah_curah_hujan = [];
        $temp_suhu = [];
        foreach ($tanaman as $key) {
            # code...
            $temp_tekanan_udara[] = $key->l_tekanan_udara;
            $temp_kecepatan_angin[] = $key->l_kecepatan_angin;
            $temp_kelembaban_udara[] = $key->l_kelembaban_udara;
            $temp_penyinaran_matahari[] = $key->l_penyinaran_matahari;
            $temp_jumlah_curah_hujan[] = $key->l_jumlah_curah_hujan;
            $temp_suhu[] = $key->l_suhu;
        }
        foreach ($tanaman as $key) {
            # code...
            $key->n_tekanan_udara = ($c1->is_cost) ? min($temp_tekanan_udara)/$key->l_tekanan_udara : $key->l_tekanan_udara/max($temp_tekanan_udara);
            $key->n_kecepatan_angin = ($c2->is_cost) ? min($temp_kecepatan_angin)/$key->l_kecepatan_angin : $key->l_kecepatan_angin/max($temp_kecepatan_angin);
            $key->n_kelembaban_udara= ($c3->is_cost) ? min($temp_kelembaban_udara)/$key->l_kelembaban_udara : $key->l_kelembaban_udara/max($temp_kelembaban_udara);
            $key->n_penyinaran_matahari = ($c4->is_cost) ? min($temp_penyinaran_matahari)/$key->l_penyinaran_matahari : $key->l_penyinaran_matahari/max($temp_penyinaran_matahari);
            $key->n_jumlah_curah_hujan = ($c5->is_cost) ? min($temp_jumlah_curah_hujan)/$key->l_jumlah_curah_hujan : $key->l_jumlah_curah_hujan/max($temp_jumlah_curah_hujan);
            $key->n_suhu = ($c6->is_cost) ? min($temp_suhu)/$key->l_suhu : $key->l_suhu/max($temp_suhu);
        }
        return $tanaman;
    }public function get_matrix_preferensi()
    {
        # code...
        $options = Setting::getAllKeyValue();
        $c1 = json_decode($options['c1']);
        $c2 = json_decode($options['c2']);
        $c3 = json_decode($options['c3']);
        $c4 = json_decode($options['c4']);
        $c5 = json_decode($options['c5']);
        $c6 = json_decode($options['c6']);
        $tanaman = $this->get_matrix_normalisasi();
        foreach ($tanaman as $key) {
            # code...
            $key->b_tekanan_udara = $key->n_tekanan_udara*$c1->weight;
            $key->b_kecepatan_angin = $key->n_kecepatan_angin*$c2->weight;
            $key->b_kelembaban_udara = $key->n_kelembaban_udara*$c3->weight;
            $key->b_penyinaran_matahari = $key->n_penyinaran_matahari*$c4->weight;
            $key->b_jumlah_curah_hujan = $key->n_jumlah_curah_hujan*$c5->weight;
            $key->b_suhu = $key->n_suhu*$c6->weight;
            $key->nilai_preferensi = $key->b_tekanan_udara+$key->b_kecepatan_angin+$key->b_kelembaban_udara+$key->b_penyinaran_matahari+$key->b_jumlah_curah_hujan+$key->b_suhu;

        }
        return $tanaman;
    }

    public function matrix_nilai()
    {
        # code...
        $tanaman = $this->get_matrix_nilai();
        return Datatables::of($tanaman)
                ->setRowId(function(Tanaman $tanaman){
                    return $tanaman->id;
                })->make(true);
    }
    public function matrix_normalisasi()
    {
        # code...
        $tanaman = $this->get_matrix_normalisasi();
        return Datatables::of($tanaman)
                ->setRowId(function(Tanaman $tanaman){
                    return $tanaman->id;
                })->make(true);
    }public function matrix_preferensi()
    {
        # code...
        $tanaman = $this->get_matrix_preferensi();
        return Datatables::of($tanaman)
                ->setRowId(function(Tanaman $tanaman){
                    return $tanaman->id;
                })->addColumn('aksi','admin.saw.action-button2')
                ->rawColumns(['aksi'])->make(true);
    }
}
