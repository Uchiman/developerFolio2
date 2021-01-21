@extends('admin.templates.default')

@section('content')
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Data Peminjaman Buku</h3>
    </div>

    <div class="box-body">

        <table id="dataTable" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nama</th>
                    <th>Judul Buku</th>
                    <th>Aksi</th>
                </tr>
            </thead>
        </table>
    </div>
</div>

<form action="" method="post" id="returnForm">
    @csrf
    @method("PUT")
    <input type="submit" value="Return" style="display: none">
</form>
@endsection

@push('styles')
<!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assetsplugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
@endpush

@push('scripts')
    <!-- DataTables -->
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bs-notify.min.js') }}"></script>
    @include('admin.templates.partials.alerts')
    <script>
        $(function () {
            $('#dataTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ route('admin.borrow.data') }}',
                columns: [
                    { data: 'DT_RowIndex', orderable: false, searchable : false},
                    { data: 'user'},
                    { data: 'book_title'},
                    { data: 'action'}
                ]
            });
        });
    </script>
@endpush
