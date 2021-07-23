<?php

namespace App\Http\Controllers;

use App\Models\Bayaran;
use Illuminate\Http\Request;

class BayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bayaran = Bayaran::all();
        return view('pages.payment', [
            'bayar' => $bayaran,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bayaran = new Bayaran;

        $bayaran->nama = $request->nama;
        $bayaran->no_tel = $request->no_tel;
        $bayaran->status = $request->status;

        $bayaran->save();

        return redirect('/applications/payment/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bayaran  $bayaran
     * @return \Illuminate\Http\Response
     */
    public function show(Bayaran $bayaran)
    {
        return view('bayar.show', [
            'bayar' => $bayaran
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bayaran  $bayaran
     * @return \Illuminate\Http\Response
     */
    public function edit(Bayaran $bayaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bayaran  $bayaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bayaran $bayaran)
    {
        $bayaran = new Bayaran;

        $bayaran->nama = $request->nama;
        $bayaran->no_tel = $request->no_tel;
        $bayaran->status = $request->status;

        $bayaran->save();

        return redirect('/applications/payment/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bayaran  $bayaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bayaran $bayaran)
    {
        //
    }
}
