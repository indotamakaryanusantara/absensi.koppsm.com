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
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form action="{{ route('jabatan.update', $item->id) }}" method="post"
                                enctype="multipart/form-data" class="needs-validation" novalidate="">
                                @method('PUT')
                                @csrf
                                <div class="card-header">
                                    <h4>Silahkan isi form berikut untuk edit data jabatan</h4>
                                </div>
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Nama Jabatan</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="{{ $item->nama_jabatan }}"
                                                required="" name="nama_jabatan">
                                            <div class="invalid-feedback">
                                                Silahkan masukkan nama jabatan
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-right">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
