<?php

namespace App\Http\Controllers;

use App\Models\Kontrol;
use App\Models\UserKontrol;
use Illuminate\Http\Request;

class KontrolController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kontrol = Kontrol::first();
        $kontrol1 = Kontrol::get();
        $kontrolulang = Kontrol::all();
        $userkontrol = UserKontrol::first();
        return view('kontrol.index', compact('userkontrol', 'kontrol1', 'kontrol', 'kontrolulang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $kontrol = Kontrol::all();
        $count = $kontrol->count();
        if($count == 0) {
            $status = $request->status;
            if ($status == 'manual') {
                Kontrol::create([
                    'status' => $request->status
                ]);
            } else {
                Kontrol::create([
                    'status'          => $request->status,
                    'teras_rumah_on'  => $request->teras_rumah_on,
                    'teras_rumah_off' => $request->teras_rumah_off,
                    'ruang_tamu_on'   => $request->ruang_tamu_on,
                    'ruang_tamu_off'  => $request->ruang_tamu_off,
                    'kamar_utama_on'  => $request->kamar_utama_on,
                    'kamar_utama_off' => $request->kamar_utama_off,
                    'kamar_kedua_on'  => $request->kamar_kedua_on,
                    'kamar_kedua_off' => $request->kamar_kedua_off,
                    'dapur_on'        => $request->dapur_on,
                    'dapur_off'       => $request->dapur_off,
                    'toilet_on'       => $request->toilet_on,
                    'toilet_off'      => $request->toilet_off
                ]);
            }
            UserKontrol::create([
                'teras_rumah' => '2',
                'ruang_tamu'  => '2',
                'kamar_utama' => '2',
                'kamar_kedua' => '2',
                'dapur'       => '2',
                'toilet'      => '2',
            ]);
        }
        return redirect()->back();
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
    public function destroy()
    {
        Kontrol::query()->truncate();
        UserKontrol::query()->truncate();
        return redirect()->back();    
    }
}
