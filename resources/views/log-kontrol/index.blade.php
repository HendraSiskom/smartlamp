@extends('layouts.template')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Log Kontrol</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="dataLogKontrol" class="display min-w850">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Waktu</th>
                                <th>Tanggal</th>
                                <th>Kode-Hari</th>
                                <th>Teras Rumah(Watt)</th>
                                <th>Ruang Tamu(Watt)</th>
                                <th>Kamar Utama(Watt)</th>
                                <th>Kamar Kedua(Watt)</th>
                                <th>Dapur(Watt)</th>
                                <th>Toilet(Watt)</th>
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
        var oTable = $('#dataLogKontrol').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: '{{ route('log-kontrol.show') }}'
            },
            columns: [
            {data: 'DT_RowIndex', orderable: false, searchable: false},
            {data: 'tanggal'},
            {data: 'waktu'},
            {data: 'kode_hari'},
            {data: 'teras_rumah'},
            {data: 'ruang_tamu'},
            {data: 'kamar_utama'},
            {data: 'kamar_kedua'},
            {data: 'dapur'},
            {data: 'toilet'},
        ],
        });
    });
</script>
@endsection
