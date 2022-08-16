@extends('layouts.template')

@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <h5 class="title-num text-black font-w600" style="text-align:center">Manajemen Lampu
                    @if($kontrol == null)
                    <button type="button" onclick="functionCreate()" class="btn btn-primary" data-toggle="modal"
                        data-target="#modalKontrol" style="float: right">Tambah</button>
                    @else
                    <a style="float: right" onclick="functionDelete({{$kontrol->id}})" href="#"
                        class="btn btn-danger">Menyetel Ulang</a>
                    @endif
                </h5>
            </div>
        </div>
    </div>

    @if($kontrol)
    @if($kontrol->status == 'manual')
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Laporan Data Manual</h4>
            </div>
        </div>
    </div>
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
                                <input id="switch1" name="teras_rumah" type="checkbox" switch="none" {{
                                    $userkontrol->teras_rumah == '1' ? 'checked' : '' }} />
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
                                <input id="switch2" name="ruang_tamu" type="checkbox" switch="none" {{
                                    $userkontrol->ruang_tamu == '1' ? 'checked' : '' }} />
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
                                <input id="switch3" name="kamar_utama" type="checkbox" switch="none" {{
                                    $userkontrol->kamar_utama == '1' ? 'checked' : '' }} />
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
                                <input id="switch4" name="kamar_kedua" type="checkbox" switch="none" {{
                                    $userkontrol->kamar_kedua == '1' ? 'checked' : '' }} />
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
                                <input id="switch5" name="dapur" type="checkbox" switch="none" {{ $userkontrol->dapur ==
                                '1' ? 'checked' : '' }} />
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
                                <input id="switch6" name="toilet" type="checkbox" switch="none" {{ $userkontrol->toilet
                                == '1' ? 'checked' : '' }} />
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
    @else
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Laporan Data Otomatis</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-responsive-md" n style="text-align: center">
                        <thead>
                            <tr>
                                <th>Teras Rumah</th>
                                <th>Ruang Tamu</th>
                                <th>Kamar Utama</th>
                                <th>Kamar Kedua</th>
                                <th>Dapur</th>
                                <th>Toilet</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($kontrol1 as $key => $value)
                            <tr>
                                <td>{{ $value->teras_rumah_on }} - {{ $value->teras_rumah_off}}</td>
                                <td>{{ $value->ruang_tamu_on }} - {{ $value->ruang_tamu_off}}</td>
                                <td>{{ $value->kamar_utama_on }} - {{ $value->kamar_utama_off}}</td>
                                <td>{{ $value->kamar_kedua_on }} - {{ $value->kamar_kedua_off}}</td>
                                <td>{{ $value->dapur_on }} - {{ $value->dapur_off}}</td>
                                <td>{{ $value->toilet_on }} - {{ $value->toilet_off}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
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
    @endif
    @endif

</div>
<div class="modal fade" id="modal-all">
    <div class="modal-dialog modal-lg" role="document">
        <form action="" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="_method" id="method">
            <input type="hidden" name="id" id="id">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal-title"></h5>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group" align="center">
                        <label class="radio-inline mr-3"><input type="radio" name="status" value="manual" id="manual"
                                onclick="functionCreate()" required checked> Manual</label>
                        <label class="radio-inline mr-3"><input type="radio" name="status" value="otomatis"
                                id="otomatis" onclick="functionCreate()" required> Otomatis</label>
                    </div>
                    <div class="form-row" id="form_hilang">
                        <div class="form-group input-group-sm col-md-1"></div>
                        <div class="form-group input-group-sm col-md-2">
                            <label>Teras Rumah ON</label>
                            <input type="time" style="color: black" class="form-control input-rounded"
                                name="teras_rumah_on" id="teras_rumah_on">
                        </div>
                        <div class="form-group input-group-sm col-md-2">
                            <label>Teras Rumah OFF</label>
                            <input type="time" style="color: black" class="form-control input-rounded"
                                name="teras_rumah_off" id="teras_rumah_off">
                        </div>
                        <div class="form-group input-group-sm col-md-2"></div>
                        <div class="form-group input-group-sm col-md-2">
                            <label>Ruang Tamu ON</label>
                            <input type="time" style="color: black" class="form-control input-rounded"
                                name="ruang_tamu_on" id="ruang_tamu_on">
                        </div>
                        <div class="form-group input-group-sm col-md-2">
                            <label>Ruang Tamu OFF</label>
                            <input type="time" style="color: black" class="form-control input-rounded"
                                name="ruang_tamu_off" id="ruang_tamu_off">
                        </div>
                        <div class="form-group input-group-sm col-md-1"></div>
                    </div>
                    <div class="form-row" id="form_hilang1">
                        <div class="form-group input-group-sm col-md-1"></div>
                        <div class="form-group input-group-sm col-md-2">
                            <label>Kamar Utama ON</label>
                            <input type="time" style="color: black" class="form-control input-rounded"
                                name="kamar_utama_on" id="kamar_utama_on">
                        </div>
                        <div class="form-group input-group-sm col-md-2">
                            <label>Kamar Utama OFF</label>
                            <input type="time" style="color: black" class="form-control input-rounded"
                                name="kamar_utama_off" id="kamar_utama_off">
                        </div>
                        <div class="form-group input-group-sm col-md-2"></div>
                        <div class="form-group input-group-sm col-md-2">
                            <label>Kamar Kedua ON</label>
                            <input type="time" style="color: black" class="form-control input-rounded"
                                name="kamar_kedua_on" id="kamar_kedua_on">
                        </div>
                        <div class="form-group input-group-sm col-md-2">
                            <label>Kamar Kedua OFF</label>
                            <input type="time" style="color: black" class="form-control input-rounded"
                                name="kamar_kedua_off" id="kamar_kedua_off">
                        </div>
                        <div class="form-group input-group-sm col-md-1"></div>
                    </div>
                    <div class="form-row" id="form_hilang2">
                        <div class="form-group input-group-sm col-md-1"></div>
                        <div class="form-group input-group-sm col-md-2">
                            <label>Dapur ON</label>
                            <input type="time" style="color: black" class="form-control input-rounded" name="dapur_on"
                                id="dapur_on">
                        </div>
                        <div class="form-group input-group-sm col-md-2">
                            <label>Dapur OFF</label>
                            <input type="time" style="color: black" class="form-control input-rounded" name="dapur_off"
                                id="dapur_off">
                        </div>
                        <div class="form-group input-group-sm col-md-2"></div>
                        <div class="form-group input-group-sm col-md-2">
                            <label>Toilet ON</label>
                            <input type="time" style="color: black" class="form-control input-rounded" name="toilet_on"
                                id="toilet_on">
                        </div>
                        <div class="form-group input-group-sm col-md-2">
                            <label>Toilet OFF</label>
                            <input type="time" style="color: black" class="form-control input-rounded" name="toilet_off"
                                id="toilet_off">
                        </div>
                        <div class="form-group input-group-sm col-md-1"></div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light" data-dismiss="modal">Batal</button>
                    <span id="btnVersion"></span>
                </div>
            </div>
        </form>
    </div>
</div>

{{-- modal hapus --}}
<div class="modal fade" id="modal-hapus">
    <div class="modal-dialog" role="document">
        <form action="" method="POST">
            {{ csrf_field('delete') }}
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="id_hapus" id="id_hapus">
                    <h2><b>Apakah Kamu Yakin?</b></h2>
                    <p>Menyetel Ulang Kontrol <b class="text_nama text-danger"></b></p>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger light">Menyetel Ulang</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@section('js')
<script type="text/javascript">
    // function membuat data baru
    function functionCreate() {
        $('#modal-title').html('Tambah Data Kontrol');
        $('#modal-all').modal('show');
        $('#method').val("POST");

        $('#id').val('');
            $('#status').val('');
            if ($('#otomatis').is(':checked')) {
                $('#form_hilang').show();
                $('#form_hilang1').show();
                $('#form_hilang2').show();
            } else {
                $('#form_hilang').hide();
                $('#form_hilang1').hide();
                $('#form_hilang2').hide();
            }
            $('#teras_rumah_on').val('');
            $('#teras_rumah_off').val('');
            $('#ruang_tamu_on').val('');
            $('#ruang_tamu_off').val('');
            $('#kamar_utama_on').val('');
            $('#kamar_utama_off').val('');
            $('#kamar_kedua_on').val('');
            $('#kamar_kedua_off').val('');
            $('#dapur_on').val('');
            $('#dapur_off').val('');
            $('#toilet_on').val('');
            $('#toilet_off').val('');
            
        $('form').attr('action', '{{ route('kontrol.create') }}');
        $('#btnVersion').html('<button type="submit" class="btn btn-primary">Simpan</button>');
    }
</script>

<script>
    function functionDelete(id) {
    $('form').attr('action', '{{ route('kontrol.destroy') }}');
    $('#id_hapus').val(id);
    $('#modal-hapus').modal('show');
}
</script>
@endsection