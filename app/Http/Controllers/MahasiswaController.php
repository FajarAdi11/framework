<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    
    public function index(){
        $model = new Mahasiswa;
        $data=$model->all();

        return view('mahasiswa.show', [
            'title' => 'Mahasiswa',
            'students' => $data
        ]);
    }

    public function create(){
        return view('mahasiswa.add');
    }

    public function store(Request $request){
        $mhs = new Mahasiswa;
        $mhs->nim = $request->nim;
        $mhs->nama = $request->nama;
        $mhs->umur = $request->umur;
        $mhs->alamat = $request->alamat;
        $mhs->kota = $request->kota;
        $mhs->kelas = $request->kelas;
        $mhs->jurusan = $request->jurusan;
 
        $mhs->save();

        return redirect('/student')->with('status', 'Mahasiswa berhadil ditambahkan');
    }

    public function getEdit($nim){
        return view('mahasiswa.edit', [
            'title' => 'Edit Mahasiswa',
            "student" => DB::table("mahasiswas")->where("nim", $nim)->first()
        ]);
    }

    public function postEdit(Request $request, $nim) {
        $this->validate ($request,[
            'nim' => 'required',
            'nama' => 'required',
            'umur' => 'required',
            'alamat' => 'required',
            'kota' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
        ]);

        $save['nim'] = $request->get('nim');
        $save['nama'] = $request->get('nama');
        $save['umur'] = $request->get('umur');
        $save['alamat'] = $request->get('alamat');
        $save['kota'] = $request->get('kota');
        $save['kelas'] = $request->get('kelas');
        $save['jurusan'] = $request->get('jurusan');

        DB::table('mahasiswas')->where('nim',$nim)->update($save);

        return redirect('/student')->with(["status"=>"Berhasil diedit"]);
    }

    public function destroy($nim)
    {
        DB::Table('mahasiswas')->where('nim',$nim)->delete();

        return redirect('/student')->with('status','Berhasil dihapus');
    }

}
