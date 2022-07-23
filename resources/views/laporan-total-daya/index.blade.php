@extends('layouts.template')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Laporan Data</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="dataLaporanTotalDaya" class="display min-w850">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Waktu</th>
                                <th>Tanggal</th>
                                <th>Kode-Hari</th>
                                <th>Total Watt Teras Rumah</th>
                                <th>Total Watt Ruang Tamu</th>
                                <th>Total Watt Kamar Utama</th>
                                <th>Total Watt Kamar Kedua</th>
                                <th>Total Watt Dapur</th>
                                <th>Total Watt Toilet</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    $(function() {
        var oTable = $('#dataLaporanTotalDaya').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: '{{ route('laporan-data.show') }}'
            },
            columns: [
            {data: 'DT_RowIndex', orderable: false, searchable: false},
            {data: 'tanggal'},
            {data: 'created_at1'},
            {data: 'kode_hari'},
            {data: 'total_watt_teras_rumah'},
            {data: 'total_watt_ruang_tamu'},
            {data: 'total_watt_kamar_utama'},
            {data: 'total_watt_kamar_kedua'},
            {data: 'total_watt_dapur'},
            {data: 'total_watt_toilet'},
        ],
        });
    });
</script>
@endsection
