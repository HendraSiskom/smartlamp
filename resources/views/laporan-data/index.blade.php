@extends('layouts.template')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Laporan Data 1</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="dataLaporanData" class="display min-w850">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Waktu</th>
                                <th>Tanggal</th>
                                <th>Kode-Hari</th>
                                <th>Teras Rumah(Watt)</th>
                                <th>Ruang Tamu(Watt)</th>
                                <th>Kamar Utama(Watt)</th>
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
        var oTable = $('#dataLaporanData').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: '{{ route('laporan-data1.show') }}'
            },
            columns: [
            {data: 'DT_RowIndex', orderable: false, searchable: false},
            {data: 'created_at'},
            {data: 'created_at1'},
            {data: 'kode_hari'},
            {data: 'teras_rumah'},
            {data: 'ruang_tamu'},
            {data: 'kamar_utama'}
        ],
        });
    });
</script>
@endsection
