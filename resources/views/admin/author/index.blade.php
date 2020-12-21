@extends('admin.templates.default')

@section('content')

    <div class="card">
        <div class="card-header">
            <h3 class="box-title">Data Penulis</h3>
            <a href="#" class="btn btn-primary">Tambah Penulis</a>
        </div>
    
        <div class="card-body">
    
            <table id="dataTable" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nama</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>

    <form action="" method="post" id="deleteForm">
        @csrf
        @method("DELETE")
        <input type="submit" value="Hapus" style="display: none">
    </form>
@endsection

@push('scripts')
<script>
    $(function () {
        $('#dataTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ route('admin.author.data') }}',
            columns: [
                { data: 'id'},
                { data: 'name'},
            ]
        });
    });
</script>
@endpush