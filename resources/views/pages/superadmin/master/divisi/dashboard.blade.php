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
                                <h4>Daftar Data Divisi</h4>
                            </div>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped" id="table-1">
                                        <thead>
                                            <tr>
                                                <th class="text-center">
                                                    #
                                                </th>
                                                <th>Nama Divisi</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $no = 1;
                                            @endphp
                                            @foreach ($divisi as $item)
                                                <tr>
                                                    <td>
                                                        {{ $no++ }}
                                                    </td>
                                                    <td>{{ $item->nama_divisi }}</td>
                                                    <td>
                                                        @if ($item->active == 1)
                                                            <div class="badge badge-success">Aktif</div>
                                                        @else
                                                            <div class="badge badge-danger">Tidak Aktif</div>
                                                        @endif
                                                    </td>
                                                    <td><a href="{{ route('divisi.edit', $item->slug) }}"
                                                            class="btn btn-primary">Edit Data</a>
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
                        // var id = $(this).data('id')
                        window.location.href = "{{ route('divisi.show', ':id') }}".replace(':id', id);
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
