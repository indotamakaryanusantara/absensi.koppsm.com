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
                            <form action="{{ route('cabang.update', $item->id) }}" method="post"
                                enctype="multipart/form-data" class="needs-validation" novalidate="">
                                @method('PUT')
                                @csrf
                                <div class="card-header">
                                    <h4>Silahkan isi form berikut untuk edit data cabang</h4>
                                </div>
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Nama Cabang</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="{{ $item->nama_cabang }}"
                                                required="" name="nama_cabang">
                                            <div class="invalid-feedback">
                                                Silahkan masukkan nama cabang
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Alamat Cabang</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" required="" name="alamat_cabang"
                                                value="{{ $item->alamat_cabang }}">
                                            <div class="invalid-feedback">
                                                Silahkan masukkan alamat cabang
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
