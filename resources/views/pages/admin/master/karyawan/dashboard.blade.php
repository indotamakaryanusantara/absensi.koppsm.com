@extends('layouts.admin')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Daftar Data Karyawan</h4>
                            </div>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped" id="table-1">
                                        <thead>
                                            <tr>
                                                <th class="text-center">
                                                    #
                                                </th>
                                                <th>Nama Karyawan</th>
                                                <th>Alamat Email</th>
                                                <th>TMT Harian Karyawan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $no = 1;
                                            @endphp
                                            @foreach ($user as $item)
                                                <tr>
                                                    <td>
                                                        {{ $no++ }}
                                                    </td>
                                                    <td>{{ $item->nama_lengkap }}</td>
                                                    <td>{{ $item->email }}</td>
                                                    <td>{{ $item->tmt }}</td>
                                                    <td><a href="{{ route('admin.karyawan-edit', $item->id) }}"
                                                            class="btn btn-primary">Edit
                                                            Data Karyawan</a>
                                                        <button class="btn btn-danger deleted"
                                                            data-id="{{ $item->id }}">Delete</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script>
        $('.deleted').click(function() {
            var id = $(this).data('id');
            swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this post!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location.href = "{{ route('admin-user.show', ':id') }}".replace(':id', id);
                        swal('Poof! Your imaginary file has been deleted!', {
                            icon: 'success',
                        });
                    } else {
                        swal("Your post is safe!");
                    }
                });
        });
    </script>
@endsection
