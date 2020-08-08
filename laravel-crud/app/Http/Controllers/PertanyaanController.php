<?php

namespace App\Http\Controllers;

use App\Pertanyaan;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;

class PertanyaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = DB::table('questions')->orderBy('id', 'desc')->get();
        return view('pertanyaan.index', compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pertanyaan.create');
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
            'judul' => 'required|unique:questions',
            'isi' => 'required'
        ]);

        DB::table('questions')->insert([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
        ]);

        return redirect('/pertanyaan')->with('success', 'Pertanyaan telah dipublish');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pertanyaan  $pertanyaan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detail = DB::table('questions')->where('id', $id)->first();

        return view('pertanyaan.show', compact('detail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pertanyaan  $pertanyaan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = DB::table('questions')->where('id', $id)->first();
        return view('pertanyaan.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pertanyaan  $pertanyaan
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $request->validate([
            'judul' => ['required', Rule::unique('questions')->ignore($id),],
            'isi' => 'required'
        ]);

        DB::table('questions')
            ->where('id', $id)
            ->update([
                'judul' => $request->judul,
                'isi' => $request->isi,
                'updated_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]);

        return redirect('/pertanyaan')->with('success', 'Pertanyaan berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pertanyaan  $pertanyaan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('questions')->where('id', $id)->delete();
        return redirect('/pertanyaan')->with('success', 'Pertanyaan telah dihapus');
    }
}
