@extends('layouts.template')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Laporan Data 2</h4>
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
        var oTable = $('#dataLaporanData').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: '{{ route('laporan-data2.show') }}'
            },
            columns: [
            {data: 'DT_RowIndex', orderable: false, searchable: false},
            {data: 'created_at'},
            {data: 'created_at1'},
            {data: 'kode_hari'},
            {data: 'kamar_kedua'},
            {data: 'dapur'},
            {data: 'toilet'}
        ],
        });
    });
</script>
@endsection
