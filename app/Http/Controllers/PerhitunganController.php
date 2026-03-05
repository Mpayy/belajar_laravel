<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function Laravel\Prompts\alert;

class PerhitunganController extends Controller
{
    function index(){
        return view('balok.lp_balok');
    }

    function store(Request $request){
        // $angka1 = $request->angka1;

        // $angka1 adalah variable baru untuk menampung
        // $request sama dengan $_POST
        // angka1 adalah name

        $angka1 = $request->angka1;
        $angka2 = $request->angka2;
        $operator = $request->operator;

        $hasil = 0;
        switch ($operator) {
            case '+':
                $hasil = $angka1 + $angka2;
                break;
            case '-':
                $hasil = $angka1 - $angka2;
                break;
            case '*':
                $hasil = $angka1 * $angka2;
                break;
            case '/':
                if ($angka2 == 0){
                    return back()-with("error", "Pembagi Tidak Boleh 0!!");
                }
                $hasil = $angka1 / $angka2;
                break;
            
            default:
                alert("Masukan angka dan operatornya");
                break;
        }return view("perhitungan.index", compact("hasil"));
    }

    function storeLpKubus(Request $request){

        // LpKubus = 6*s^2
        $s = $request->sisi;
        $hasil = 6 * $s * $s;

        return view('balok.lp_balok', compact('hasil'));
    }

    function indexVolKubus()
    {
        return view('kubus.vl_kubus'); // ini nama file tempat formnya
    }

    public function storeVolKubus(Request $request){
        // Volume kubus = s^3
        $s = $request->sisiKubus;
        $hasilVolumeKubus = $s * $s * $s;

        return view('kubus.vl_kubus', compact('hasilVolumeKubus'));
    }
}
