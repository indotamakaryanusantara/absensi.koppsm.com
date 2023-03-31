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
                            <form action="{{ route('karyawan.update', $item->id) }}" method="post"
                                enctype="multipart/form-data" class="needs-validation" novalidate="" id="karyawan">
                                @method('PUT')
                                @csrf
                                <div class="card-header">
                                    <h4>Data Karyawan</h4>
                                </div>
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Status Karyawan</label>
                                        <div class="col-sm-9">
                                            <label class="selectgroup-item">
                                                <input type="radio" name="status_karyawan" value="Training"
                                                    class="selectgroup-input"
                                                    {{ $item->status_karyawan == 'Training' ? 'checked' : '' }}
                                                    required="">
                                                <span class="selectgroup-button">Training</span>
                                            </label>
                                            <label class="selectgroup-item">
                                                <input type="radio" name="status_karyawan" value="Kontrak"
                                                    class="selectgroup-input"
                                                    {{ $item->status_karyawan == 'Kontrak' ? 'checked' : '' }}
                                                    required="">
                                                <span class="selectgroup-button">Kontrak</span>
                                            </label>
                                            <label class="selectgroup-item">
                                                <input type="radio" name="status_karyawan" value="Tetap"
                                                    class="selectgroup-input"
                                                    {{ $item->status_karyawan == 'Tetap' ? 'checked' : '' }} required="">
                                                <span class="selectgroup-button">Tetap</span>
                                            </label>
                                            <div class="invalid-feedback">
                                                Silahkan masukkan status karyawan
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="{{ $item->nama_lengkap }}"
                                                required="" name="nama_lengkap">
                                            <div class="invalid-feedback">
                                                Silahkan masukkan nama lengkap
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                        <div class="col-sm-9">
                                            <label class="selectgroup-item">
                                                <input type="radio" name="jenis_kelamin" value="Laki-Laki"
                                                    class="selectgroup-input"
                                                    {{ $item->jenis_kelamin == 'Laki-Laki' ? 'checked' : '' }}
                                                    required="">
                                                <span class="selectgroup-button">Laki-laki</span>
                                            </label>
                                            <label class="selectgroup-item">
                                                <input type="radio" name="jenis_kelamin" value="Perempuan"
                                                    class="selectgroup-input"
                                                    {{ $item->jenis_kelamin == 'Perempuan' ? 'checked' : '' }}
                                                    required="">
                                                <span class="selectgroup-button">Perempuan</span>
                                            </label>
                                            <div class="invalid-feedback">
                                                Silahkan masukkan Jenis Kelamin
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">NIK</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" required=""
                                                value="{{ $item->nik }}" name="nik">
                                            <div class="invalid-feedback">
                                                Silahkan masukkan NIK Karyawan
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Tempat Lahir</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="{{ $item->tempat_lahir }}"
                                                required="" name="tempat_lahir">
                                            <div class="invalid-feedback">
                                                Silahkan masukkan Tempat Lahir
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Tanggal Lahir</label>
                                        <div class="col-sm-9">
                                            <input type="date" class="form-control" value="{{ $item->tanggal_lahir }}"
                                                required="" name="tanggal_lahir">
                                            <div class="invalid-feedback">
                                                Silahkan masukkan Tanggal Lahir
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Alamat Asal</label>
                                        <div class="col-sm-9">
                                            <textarea class="summernote-simple" name="alamat_asal">{{ $item->alamat_asal }}</textarea>
                                            <div class="invalid-feedback">
                                                Silahkan masukkan Alamat Asal
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Alamat Saat Ini</label>
                                        <div class="col-sm-9">
                                            <textarea class="summernote-simple" name="alamat_saat_ini">{{ $item->alamat_saat_ini }}</textarea>
                                            <div class="invalid-feedback">
                                                Silahkan masukkan Alamat Saat Ini
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Agama</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" required="" name="agama">
                                                <option value="">Silahkan Pilih Agama Anda</option>
                                                <option value="Islam" {{ $item->agama == 'Islam' ? 'selected' : '' }}>
                                                    Islam
                                                </option>
                                                <option value="Kristen" {{ $item->agama == 'Kristen' ? 'selected' : '' }}>
                                                    Kristen
                                                </option>
                                                <option value="Hindu" {{ $item->agama == 'Hindu' ? 'selected' : '' }}>
                                                    Hindu
                                                </option>
                                                <option value="Budha" {{ $item->agama == 'Budha' ? 'selected' : '' }}>
                                                    Budha
                                                </option>
                                            </select>
                                            <div class="invalid-feedback">
                                                Silahkan masukkan Agama Anda
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Hobi</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" required=""
                                                value="{{ $item->hobi }}" name="hobi">
                                            <div class="invalid-feedback">
                                                Silahkan masukkan Hobi Anda
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Tanggal Masuk</label>
                                        <div class="col-sm-9">
                                            <input type="date" class="form-control"
                                                value="{{ $item->tanggal_masuk }}" required="" name="tanggal_masuk">
                                            <div class="invalid-feedback">
                                                Silahkan masukkan tanggal masuk
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Referensi</label>
                                        <div class="col-sm-9">
                                            <input type="date" class="form-control" value="{{ $item->referensi }}"
                                                required="" name="referensi">
                                            <div class="invalid-feedback">
                                                Silahkan masukkan tanggal masuk
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Negara</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="{{ $item->negara }}"
                                                required="" name="negara">
                                            <div class="invalid-feedback">
                                                Silahkan masukkan Negara Anda
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Nomor Rumah</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="{{ $item->nomor_rumah }}"
                                                required="" name="nomor_rumah">
                                            <div class="invalid-feedback">
                                                Silahkan masukkan Nomor Rumah
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Nomor HP</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" required=""
                                                value="{{ $item->nomor_hp }}" name="nomor_hp">
                                            <div class="invalid-feedback">
                                                Silahkan masukkan Nomor HP
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Status Pernikahan</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" required="" name="status_pernikahan">
                                                <option value="">Silahkan Pilih Status Pernikahan Anda</option>
                                                <option value="Belum Menikah"
                                                    {{ $item->status_pernikahan == 'Belum Menikah' ? 'selected' : '' }}>
                                                    Belum Menikah
                                                </option>
                                                <option value="Sudah Menikah"
                                                    {{ $item->status_pernikahan == 'Sudah Menikah' ? 'selected' : '' }}>
                                                    Sudah Menikah
                                                </option>
                                            </select>
                                            <div class="invalid-feedback">
                                                Silahkan masukkan status pernikahan
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Cabang</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" required="" name="id_cabang">
                                                <option value="">Silahkan Pilih Cabang Anda</option>
                                                @foreach ($cabang as $cabang)
                                                    <option value="{{ $cabang->id }}"
                                                        {{ $cabang->id == $item->id_cabang ? 'selected' : '' }}>
                                                        {{ $cabang->nama_cabang }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            <div class="invalid-feedback">
                                                Silahkan masukkan cabang anda
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Jabatan</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" required="" name="id_jabatan">
                                                <option value="">Silahkan Pilih Jabatan Anda</option>
                                                @foreach ($jabatan as $jabatan)
                                                    <option value="{{ $jabatan->id }}"
                                                        {{ $jabatan->id == $item->id_jabatan ? 'selected' : '' }}>
                                                        {{ $jabatan->nama_jabatan }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            <div class="invalid-feedback">
                                                Silahkan masukkan jabatan anda
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Divisi</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" required="" name="id_divisi">
                                                <option value="">Silahkan Pilih Divisi Anda</option>
                                                @foreach ($divisi as $divisi)
                                                    <option value="{{ $divisi->id }}"
                                                        {{ $divisi->id == $item->id_divisi ? 'selected' : '' }}>
                                                        {{ $divisi->nama_divisi }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            <div class="invalid-feedback">
                                                Silahkan masukkan divisi anda
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">TMT Karyawan</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="{{ $item->tmt }}"
                                                required="" name="tmt">
                                            <div class="invalid-feedback">
                                                Silahkan masukkan TMT anda
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-header">
                                    <h4>Data User</h4>
                                </div>
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Username</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" required=""
                                                value={{ $item->name }} name="name">
                                            <div class="invalid-feedback">
                                                Silahkan masukkan Username
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Email</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" required="" name="email"
                                                value="{{ $item->email }}">
                                            <div class="invalid-feedback">
                                                Silahkan masukkan Email
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Ganti Password</label>
                                        <div class="col-sm-9">
                                            <select id="selectField" class="form-control" required="" name="">
                                                <option value="">Silahkan Masukkan Pilihan Anda</option>
                                                <option value="option1">
                                                    Ya, Ganti Password
                                                </option>
                                                <option value="option2">
                                                    Tidak, Jangan Ganti Password
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row" id="targetField">
                                        <label class="col-sm-3 col-form-label">Password Baru</label>
                                        <div class="col-sm-9">
                                            <input type="password" class="form-control password-field"
                                                name="password" id="inputField">
                                            <i class="fas fa-eye password-toggle" style="font-size: 20px;"></i>
                                            
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

        $(document).ready(function() {
            $('#targetField').hide();
            $('#selectField').change(function() {
                if ($(this).val() == 'option2') {
                    $('#targetField').hide();
                } else {
                    $('#targetField').show();
                }
            });
        });
    </script>

@endsection
