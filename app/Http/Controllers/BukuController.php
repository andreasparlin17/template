<?php

namespace App\Http\Controllers;
use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('buku.index')->with([
            'buku' => Buku::all(), 
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('buku.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul_buku'=>'required',
            'id_kategori'=>'required',
            'id_penerbit'=>'required',
            'pengarang'=>'required',
            'tahun_terbit'=>'required|numeric',
            'isbn'=>'required',
            'j_buku_baik'=>'required',
            'j_buku_rusak'=>'required',
        ]);

        $data = [
            'judul_buku' => $request->judul_buku,
            'id_kategori' => $request->id_kategori,
            'id_penerbit' => $request->id_penerbit,
            'pengarang' => $request->pengarang,
            'tahun_terbit' => $request->tahun_terbit,
            'isbn' => $request->isbn,
            'j_buku_baik' => $request->j_buku_baik,
            'j_buku_rusak' => $request->j_buku_rusak,

        ];
        Buku::create($data);
        return redirect()->route('buku.index')->with('success', 'Data berhasil ditambahkan'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Buku::where('judul_buku',$id)->first();
        return view('buku/edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul_buku'=>'required',
            'id_kategori'=>'required',
            'id_penerbit'=>'required',
            'pengarang'=>'required',
            'tahun_terbit'=>'required|numeric',
            'isbn'=>'required',
            'j_buku_baik'=>'required',
            'j_buku_rusak'=>'required',
        ]);


        $data = [
            'judul_buku' =>$request->input('judul_buku'),
            'id_kategori' =>$request->input('id_kategori'),
            'id_penerbit' =>$request->input('id_penerbit'),
            'pengarang' =>$request->input('pengarang'),
            'tahun_terbit' =>$request->input('tahun_terbit'),
            'isbn' =>$request->input('isbn'),
            'j_buku_baik' =>$request->input('j_buku_baik'),
            'j_buku_rusak' =>$request->input('j_buku_rusak'),
        ];

        Buku::where('judul_buku', $id)->update($data);
        return redirect('/buku')->with('success','Berhasil Update Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Buku::where('judul_buku', $id)->delete();
        return redirect('/buku')->with('success', 'Data Berhasil Dihapus');
    }
}
