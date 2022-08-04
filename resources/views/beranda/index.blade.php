@extends('layouts.template')

@section('content')
<div class="row">
<div class="row">
<div class="col-xl-12">
<div class="card">
<div class="card-body">
<div class="d-md-flex d-block mb-md-4 mb-3 align-items-end">
<div class="mr-auto pr-3 mb-md-0 mb-3">
<h2 class="title-num text-black font-w600">SMART LAMP</h2>
<span class="fs-14">Be Smart With Internet of Things</span>
</div>
<ul class="users-lg">
<li><img src="{{ asset('vora/images/users/14.png')}}" alt=""></li>
<li><img src="{{ asset('vora/images/users/15.png')}}" alt=""></li>
<li><img src="{{ asset('vora/images/users/16.png')}}" alt=""></li>
<li><img src="{{ asset('vora/images/users/17.png')}}" alt=""></li>
<li><img src="{{ asset('vora/images/users/18.png')}}" alt=""></li>
<li><img src="{{ asset('vora/images/users/19.png')}}" alt=""></li>
<li><img src="{{ asset('vora/images/users/20.png')}}" alt=""></li>
</ul>
</div>
<div class="row">
<p class="fs-14 mr-auto col-lg-6">Smart Lampu adalah sebuah website untuk mengontrol secara manual maupun otomatis lampu rumah yang berbasis Internet of Things</p>
<div class="col-lg-6 text-lg-right text-left">
<a href="javascript:void(0)"  class="btn btn-primary rounded mr-3 mb-sm-0 mb-2"><i class="fa fa-user mr-3 scale5" aria-hidden="true"></i>Internet of Things</a>
<a href="javascript:void(0)"  class="btn btn-primary rounded mr-3 mb-sm-0 mb-2"><i class="fa fa-user mr-3 scale5" aria-hidden="true"></i>Smart Lamp</a>

</div>

<div class="modal fade" id="addOrderModal">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
 <h5 class="modal-title">Add Contact</h5>
<button type="button" class="close" data-dismiss="modal"><span>&times;</span>
</button>
</div>
<div class="modal-body">
<form>
<div class="form-group">
<label class="text-black font-w500">First Name</label>
<input type="text" class="form-control">
</div>
<div class="form-group">
<label class="text-black font-w500">Last Name</label>
<input type="text" class="form-control">
</div>
<div class="form-group">
<label class="text-black font-w500">Address</label>
<input type="text" class="form-control">
</div>
<div class="form-group">
<button type="button" class="btn btn-primary">SAVE</button>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
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