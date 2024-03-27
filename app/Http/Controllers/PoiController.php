<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Vinkla\Hashids\Facades\Hashids;
use App\Models\Poi;
use App\Models\Kategori;
use Illuminate\Support\Facades\DB;


class PoiController extends Controller
{
    public function login(){
        // return view('bootstraplogin');
        return view('login3');
    }

    public function semua(){
        $semua = Poi::all();

        return view('poi.semua', ['data'=>$semua]);
    }

    public function tambah(){
        $all_kategori = Kategori::all();

        return view('poi.form', ['data_kategori' => $all_kategori]);

    }

    public function proses_tambah(Request $rekues){
        $dataValid = $rekues->validate([
            'judul' => 'required',
            'kategori_id' => 'required',
            'deskripsi' => 'required',
            'area' => 'required',
        ]);

        // dump($dataValid);
        $poi = new Poi();
        $poi->judul = $dataValid['judul'];
        $poi->kategori_id = $dataValid['kategori_id'];
        $poi->deskripsi = $dataValid['deskripsi'];
        $poi->area = $dataValid['area'];

        $poi->save();

        return redirect()->route('poi.semua')->with('success','Data berhasil disimpan.');
        
    }

    public function edit($id){
        $poi = Poi::findOrFail($id);
        $pois = Poi::orderBy('judul', 'asc')->get()->pluck('judul', 'id');
        $kategoris = Kategori::orderBy('nama', 'asc')->get()->pluck('nama', 'id');


        return response(view('products.edit', ['poi' => $poi, 'brands' => $brands, 'categories' => $categories]));

    }

    public function update_judul(Request $request, Poi $poi)
    {
        if($request->ajax()){
            $id = $request->id;
            $judul = $request->judul;

            DB::table('pois')
            ->where('id', $id)
            ->update(['judul' => $judul]);

        }

        // return "Update berhasil";
        // return redirect()->route('products.index')->with('success','Product updated successfully');
    }

    public function update_deskripsi(Request $request, Poi $poi)
    {
        if($request->ajax()){
            $id = $request->id;
            $deskripsi = $request->deskripsi;

            DB::table('pois')
            ->where('id', $id)
            ->update(['deskripsi' => $deskripsi]);

        }

        // return "Update berhasil";
        // return redirect()->route('products.index')->with('success','Product updated successfully');
    }


    public function hapus(){

    }

    public function detail($id){
        $decoded_id = Hashids::decode($id); //decode the hashed id
        $poi = Poi::find($decoded_id[0]);
        $id_asli = $decoded_id[0];

        return view('poi.detail', ['poi' => $poi, 'idnya' => $id_asli]);
    }

    public function kategori($id){
        $semua = Poi::where('kategori_id', $id)->get();

        return view('poi.semua', ['data'=>$semua]);
    }
}
