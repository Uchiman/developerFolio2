@extends('admin.templates.default')

@section('content')

    <div class="box">
        <div class="box-header">

            <div class="box-body">
                <table id="dataTable" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Jumlah Peminjaman</th>
                            <th>Bergabung</th>
                        </tr>
                    </thead>
                    @php
                    $page = 1;
                    if (request()->has('page')) {
                    $page = request('page');
                    }
                    $no = (10 * $page) - (10 - 1);
                    @endphp
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->borrow_count }}</td>
                                <td>{{ $user->created_at }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $users->links() }}
            </div>
        </div>

        <form action="" method="post" id="deleteForm">
            @csrf
            @method("DELETE")
            <input type="submit" value="Hapus" style="display: none">
        </form>
    @endsection
