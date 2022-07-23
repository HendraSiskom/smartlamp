<?php

namespace App\Http\Controllers;

use App\Models\LogKontrol;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class LogKontrolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('log-kontrol.index');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data = LogKontrol::orderBy('created_at', 'DESC')->get();
        return DataTables::of($data)
            ->editColumn('teras_rumah',function($data){
                if ($data->teras_rumah == '1') {
                    return 'On';
                }else{
                    return 'Off';
                }
            })
            ->editColumn('ruang_tamu',function($data){
                if ($data->ruang_tamu == '1') {
                    return 'On';
                }else{
                    return 'Off';
                }
            })
            ->editColumn('kamar_utama',function($data){
                if ($data->kamar_utama == '1') {
                    return 'On';
                }else{
                    return 'Off';
                }
            })
            ->editColumn('kamar_kedua',function($data){
                if ($data->kamar_kedua == '1') {
                    return 'On';
                }else{
                    return 'Off';
                }
            })
            ->editColumn('dapur',function($data){
                if ($data->dapur == '1') {
                    return 'On';
                }else{
                    return 'Off';
                }
            })
            ->editColumn('toilet',function($data){
                if ($data->toilet == '1') {
                    return 'On';
                }else{
                    return 'Off';
                }
            })
            ->addIndexColumn()
            ->make(true);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
