@extends('layouts.template')

@section('content')
<div class="row">
    <div class="col-md-12 col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Informasi</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <p>
                        Internet of things merupakan sebuah konsep di mana suatu benda atau objek ditanamkan
                        teknologi-teknologi seperti sensor dan software dengan tujuan untuk berkomunikasi,
                        mengendalikan, menghubungkan, dan bertukar data melalui perangkat lain selama masih terhubung ke
                        internet.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4 col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Teras Rumah</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form style="text-align: center">
                        <div class="form-group">
                            @if ($userkontrol->teras_rumah == '1')
                                <span style="font-size: 16pt; font-weight: bold; color:green;">On</span>
                            @else
                                <span style="font-size: 16pt; font-weight: bold; color: red;">Off</span>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4 col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Ruang Tamu</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form style="text-align: center">
                        <div class="form-group">
                            @if ($userkontrol->ruang_tamu == '1')
                                <span style="font-size: 16pt; font-weight: bold; color:green;">On</span>
                            @else
                                <span style="font-size: 16pt; font-weight: bold; color: red;">Off</span>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4 col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Kamar Utama</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form style="text-align: center">
                        <div class="form-group">
                            @if ($userkontrol->kamar_utama == '1')
                                <span style="font-size: 16pt; font-weight: bold; color:green;">On</span>
                            @else
                                <span style="font-size: 16pt; font-weight: bold; color: red;">Off</span>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4 col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Kamar Kedua</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form style="text-align: center">
                        <div class="form-group">
                            @if ($userkontrol->kamar_kedua == '1')
                                <span style="font-size: 16pt; font-weight: bold; color:green;">On</span>
                            @else
                                <span style="font-size: 16pt; font-weight: bold; color: red;">Off</span>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4 col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Dapur</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form style="text-align: center">
                        <div class="form-group">
                            @if ($userkontrol->dapur == '1')
                                <span style="font-size: 16pt; font-weight: bold; color:green;">On</span>
                            @else
                                <span style="font-size: 16pt; font-weight: bold; color: red;">Off</span>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4 col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Toilet</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form style="text-align: center">
                        <div class="form-group">
                            @if ($userkontrol->toilet == '1')
                                <span style="font-size: 16pt; font-weight: bold; color:green;">On</span>
                            @else
                                <span style="font-size: 16pt; font-weight: bold; color: red;">Off</span>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Informasi Lampu Hidup</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-responsive-md"n style="text-align: center">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Posisi Lampu</th>
                                <th>Jadwal Lampu On</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>01</strong></td>
                                <td>Teras Rumah</td>
                                <td>08.00 - 01.29</td>
                            </tr>
                            <tr>
                                <td><strong>02</strong></td>
                                <td>Ruang Tamu</td>
                                <td>08.00 - 01.29</td>
                            </tr>
                            <tr>
                                <td><strong>03</strong></td>
                                <td>Kamar Utama</td>
                                <td>08.00 - 01.29</td>
                            </tr>
                            <tr>
                                <td><strong>04</strong></td>
                                <td>Kamar Kedua</td>
                                <td>08.00 - 01.29</td>
                            </tr>
                            <tr>
                                <td><strong>05</strong></td>
                                <td>Dapur</td>
                                <td>08.00 - 01.29</td>
                            </tr>
                            <tr>
                                <td><strong>06</strong></td>
                                <td>Toilet</td>
                                <td>08.00 - 01.29</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection