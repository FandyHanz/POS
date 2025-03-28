@extends('layout.template')
@section('content')
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ $page->title }}</h3>
            <div class="card-tools">
                <button onclick="modalAction('{{ url('level/import') }}')" class="btn btninfo">Import level</button>
                <a href="{{ url('level/export_excel') }}" class="btn btn-primary"><i class="fa fa-fileexcel"></i> Export Level excel</a>
                <a href="{{ url('level/export_pdf') }}" class="btn btn-warning"><i class="fa fa-filepdf"></i> Export Level pdf</a>
                <button onclick="modalAction('{{ url('level/create_ajax') }}')" class="btn btn-sm btn-success mt-1">Tambah
                    Ajax</button>
            </div>
        </div>
        <div class="card-body">
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif

            <table class="table table-bordered table-striped table-hover table-sm" id="table_user">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>Level kode</th>
                        <th>nama</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
            </table>
            <div id="myModal" class="modal fade animate shake" tabindex="-1" role="dialog" databackdrop="static"
                data-keyboard="false" data-width="75%" aria-hidden="true"></div>
        @endsection
        @push('css')
        @endpush
        @push('js')
            <script>
                function modalAction(url = '') {
                    $('#myModal').load(url, function() {
                        $('#myModal').modal('show');
                    });
                }

                var dataUser;
                $(document).ready(function() {
                    dataUser = $('#table_user').DataTable({
                    serverSide: true,
                        ajax: {
                            "url": "{{ url('level/list') }}",
                            "dataType": "json",
                            "type": "POST",

                        },
                        columns: [{
                            // nomor urut dari laravel datatable addIndexColumn()
                            data: "DT_RowIndex",
                            className: "text-center",
                            orderable: false,
                            searchable: false
                        }, {
                            data: "level_kode",
                            className: "",
                            // orderable: true, jika ingin kolom ini bisa diurutkan
                            orderable: true,
                            // searchable: true, jika ingin kolom ini bisa dicari
                            searchable: true
                        }, {
                            data: "level_nama",
                            className: "",
                            orderable: true,
                            searchable: true
                        }, {
                            data: "aksi",
                            className: "",
                            orderable: false,
                            searchable: false
                        }]
                });

                $('#table_user_filter input').unbind().bind().on('keyup', function(e) {
                    if (e.keyCode == 13) {
                        dataUser.search(this.value).draw();
                    }
                });

                $('#level_id').change(function() {
                dataUser.draw();
                });
                });
            </script>
        @endpush
