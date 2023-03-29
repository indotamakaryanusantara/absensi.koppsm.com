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
                            <form action="{{ route('admin-user.update', $item->id) }}" method="post"
                                enctype="multipart/form-data" class="needs-validation" novalidate="">
                                @method('PUT')
                                @csrf
                                <div class="card-header">
                                    <h4>Silahkan isi form berikut untuk edit data cabang</h4>
                                </div>
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Username</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="{{ $item->name }}"
                                                required="" name="name">
                                            <div class="invalid-feedback">
                                                Silahkan masukkan username anda
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Email</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="{{ $item->email }}"
                                                required="" name="email">
                                            <div class="invalid-feedback">
                                                Silahkan masukkan email anda
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Password Baru</label>
                                        <div class="col-sm-9">
                                            <input type="password" class="form-control password-field" required=""
                                                name="password" value="">
                                            <i class="fas fa-eye password-toggle" style="font-size: 20px;"></i>
                                            <div class="invalid-feedback">
                                                Silahkan masukkan password anda
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-right">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <a href="{{ route('admin-user.index') }}" class="btn btn-danger">Batal</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <style>
        .password-toggle {
            position: absolute;
            top: 50%;
            right: 25px;
            transform: translateY(-50%);
            cursor: pointer;
        }

        .password-field[type="text"] {
            background-image: url('path-to-visible-password-icon.svg');
            background-position: right 10px center;
            background-repeat: no-repeat;
            background-size: 20px;
        }

        .fa-eye-slash:before {
            content: "\f070";
        }
    </style>
    <script>
        const passwordField = document.querySelector('.password-field');
        const passwordToggle = document.querySelector('.password-toggle');

        passwordToggle.addEventListener('click', () => {
            const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordField.setAttribute('type', type);
            passwordToggle.classList.toggle('fa-eye-slash');
        });
    </script>
@endsection
