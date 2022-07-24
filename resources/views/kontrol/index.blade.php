@extends('layouts.template')

@section('content')
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
                            <label for="switch1" class="toggleSwitch nolabel" data-off-label="Off" data-on-label="On">
                                <input id="switch1" name="teras_rumah" type="checkbox" switch="none" {{ $userkontrol->teras_rumah == '1' ? 'checked' : '' }} />
                                <span>
                                    <span>Off</span>
                                    <span>On</span>
                                </span>
                                <a></a>
                            </label>
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
                            <label for="switch2" class="toggleSwitch nolabel" data-off-label="Off" data-on-label="On">
                                <input id="switch2" name="ruang_tamu" type="checkbox" switch="none" {{ $userkontrol->ruang_tamu == '1' ? 'checked' : '' }} />
                                <span>
                                    <span>Off</span>
                                    <span>On</span>
                                </span>
                                <a></a>
                            </label>
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
                            <label for="switch3" class="toggleSwitch nolabel" data-off-label="Off" data-on-label="On">
                                <input id="switch3" name="kamar_utama" type="checkbox" switch="none" {{ $userkontrol->kamar_utama == '1' ? 'checked' : '' }} />
                                <span>
                                    <span>Off</span>
                                    <span>On</span>
                                </span>
                                <a></a>
                            </label>
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
                            <label for="switch4" class="toggleSwitch nolabel" data-off-label="Off" data-on-label="On">
                                <input id="switch4" name="kamar_kedua" type="checkbox" switch="none" {{ $userkontrol->kamar_kedua == '1' ? 'checked' : '' }} />
                                <span>
                                    <span>Off</span>
                                    <span>On</span>
                                </span>
                                <a></a>
                            </label>
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
                            <label for="switch5" class="toggleSwitch nolabel" data-off-label="Off" data-on-label="On">
                                <input id="switch5" name="dapur" type="checkbox" switch="none" {{ $userkontrol->dapur == '1' ? 'checked' : '' }} />
                                <span>
                                    <span>Off</span>
                                    <span>On</span>
                                </span>
                                <a></a>
                            </label>
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
                            <label for="switch6" class="toggleSwitch nolabel" data-off-label="Off" data-on-label="On">
                                <input id="switch6" name="toilet" type="checkbox" switch="none" {{ $userkontrol->toilet == '1' ? 'checked' : '' }} />
                                <span>
                                    <span>Off</span>
                                    <span>On</span>
                                </span>
                                <a></a>
                            </label>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection