<?php

namespace App\Http\Controllers;

use App\Models\Semakan;
use Illuminate\Http\Request;

class SemakanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $semakan = Semakan::all();
        return view('pages.permit', [
            'semak' => $semakan,
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
        $semakan = new Semakan;

        $semakan->nama = $request->nama;
        $semakan->no_permit = $request->no_permit;
        // $semakan->tarikh = $request->tarikh;
        $semakan->status = $request->status;

        $semakan->save();

        return redirect('/applications/permit/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Semakan  $semakan
     * @return \Illuminate\Http\Response
     */
    public function show(Semakan $semakan)
    {
        return view('semak.show', [
            'semak' => $semakan
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Semakan  $semakan
     * @return \Illuminate\Http\Response
     */
    public function edit(Semakan $semakan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Semakan  $semakan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Semakan $semakan)
    {
        $semakan = new Semakan;

        $semakan->nama = $request->nama;
        $semakan->no_permit = $request->no_permit;
        // $semakan->tarikh = $request->tarikh;
        $semakan->status = $request->status;

        $semakan->save();

        return redirect('/applications/permit/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Semakan  $semakan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Semakan $semakan)
    {
        //
    }
}
