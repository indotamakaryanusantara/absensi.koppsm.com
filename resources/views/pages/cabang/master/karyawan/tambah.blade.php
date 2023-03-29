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
                            <form action="{{ route('cabang.karyawan-store') }}" method="post" enctype="multipart/form-data"
                                class="needs-validation" novalidate="">
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
                                                    class="selectgroup-input" checked="" required="">
                                                <span class="selectgroup-button">Training</span>
                                            </label>
                                            <label class="selectgroup-item">
                                                <input type="radio" name="status_karyawan" value="Kontrak"
                                                    class="selectgroup-input" required="">
                                                <span class="selectgroup-button">Kontrak</span>
                                            </label>
                                            <label class="selectgroup-item">
                                                <input type="radio" name="status_karyawan" value="Tetap"
                                                    class="selectgroup-input" required="">
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
                                            <input type="text" class="form-control" required="" name="nama_lengkap">
                                            <div class="invalid-feedback">
                                                Silahkan masukkan Nama Lengkap
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                        <div class="col-sm-9">
                                            <label class="selectgroup-item">
                                                <input type="radio" name="jenis_kelamin" value="Laki-Laki"
                                                    class="selectgroup-input" checked="" required="">
                                                <span class="selectgroup-button">Laki-laki</span>
                                            </label>
                                            <label class="selectgroup-item">
                                                <input type="radio" name="jenis_kelamin" value="Perempuan"
                                                    class="selectgroup-input" required="">
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
                                            <input type="text" class="form-control" required="" name="nik">
                                            <div class="invalid-feedback">
                                                Silahkan masukkan NIK Karyawan
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Tempat Lahir</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" required="" name="tempat_lahir">
                                            <div class="invalid-feedback">
                                                Silahkan masukkan Tempat Lahir
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Tanggal Lahir</label>
                                        <div class="col-sm-9">
                                            <input type="date" class="form-control" required="" name="tanggal_lahir">
                                            <div class="invalid-feedback">
                                                Silahkan masukkan Tanggal Lahir
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Alamat Asal</label>
                                        <div class="col-sm-9">
                                            <textarea class="summernote-simple" name="alamat_asal"></textarea>
                                            <div class="invalid-feedback">
                                                Silahkan masukkan Alamat Asal
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Alamat Saat Ini</label>
                                        <div class="col-sm-9">
                                            <textarea class="summernote-simple" name="alamat_saat_ini"></textarea>
                                            <div class="invalid-feedback">
                                                Silahkan masukkan Alamat Saat Ini
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Agama</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" required="" name="agama">
                                                <option value="">Silahkan Pilih Agama</option>
                                                <option value="Islam">
                                                    Islam
                                                </option>
                                                <option value="Kristen">
                                                    Kristen
                                                </option>
                                                <option value="Hindu">
                                                    Hindu
                                                </option>
                                                <option value="Budha">
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
                                            <input type="text" class="form-control" required="" name="hobi">
                                            <div class="invalid-feedback">
                                                Silahkan masukkan Hobi Anda
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Tanggal Masuk</label>
                                        <div class="col-sm-9">
                                            <input type="date" class="form-control" required=""
                                                name="tanggal_masuk">
                                            <div class="invalid-feedback">
                                                Silahkan masukkan tanggal masuk
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Referensi</label>
                                        <div class="col-sm-9">
                                            <input type="date" class="form-control" required="" name="referensi">
                                            <div class="invalid-feedback">
                                                Silahkan masukkan tanggal masuk
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Negara</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" required="" name="negara">
                                            <div class="invalid-feedback">
                                                Silahkan masukkan Negara Anda
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Nomor Rumah</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" required=""
                                                name="nomor_rumah">
                                            <div class="invalid-feedback">
                                                Silahkan masukkan Nomor Rumah
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Nomor HP</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" required="" name="nomor_hp">
                                            <div class="invalid-feedback">
                                                Silahkan masukkan Nomor HP
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Status Pernikahan</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" required="" name="status_pernikahan">
                                                <option value="">Silahkan Pilih Status Pernikahan</option>
                                                <option value="Belum Menikah">
                                                    Belum Menikah
                                                </option>
                                                <option value="Sudah Menikah">
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
                                                    <option value="{{ $cabang->id }}">
                                                        {{ $cabang->nama_cabang }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            <div class="invalid-feedback">
                                                Silahkan masukkan Cabang Anda
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Jabatan</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" required="" name="id_jabatan">
                                                <option value="">Silahkan Pilih Jabatan Anda</option>
                                                @foreach ($jabatan as $jabatan)
                                                    <option value="{{ $jabatan->id }}">
                                                        {{ $jabatan->nama_jabatan }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            <div class="invalid-feedback">
                                                Silahkan masukkan Jabatan Anda
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Divisi</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" required="" name="id_divisi">
                                                <option value="">Silahkan Pilih Divisi Anda</option>
                                                @foreach ($divisi as $divisi)
                                                    <option value="{{ $divisi->id }}">
                                                        {{ $divisi->nama_divisi }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            <div class="invalid-feedback">
                                                Silahkan masukkan Divisi Anda
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">TMT Karyawan</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" required="" name="tmt"
                                                id="dengan-rupiah">
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
                                            <input type="text" class="form-control" required="" name="name">
                                            <div class="invalid-feedback">
                                                Silahkan masukkan Username
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Email</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" required="" name="email">
                                            <div class="invalid-feedback">
                                                Silahkan masukkan Email
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Password</label>
                                        <div class="col-sm-9">
                                            <input type="password" class="form-control password-field" required=""
                                                name="password">
                                            <i class="fas fa-eye password-toggle" style="font-size: 20px;"></i>
                                            <div class="invalid-feedback">
                                                Silahkan masukkan Password
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

        var dengan_rupiah = document.getElementById('dengan-rupiah');
        dengan_rupiah.addEventListener('keyup', function(e) {
            dengan_rupiah.value = formatRupiah(this.value, 'Rp. ');
        });

        /* Fungsi */
        function formatRupiah(angka, prefix) {
            var number_string = angka.replace(/[^,\d]/g, '').toString(),
                split = number_string.split(','),
                sisa = split[0].length % 3,
                rupiah = split[0].substr(0, sisa),
                ribuan = split[0].substr(sisa).match(/\d{3}/gi);

            if (ribuan) {
                separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }

            rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
            return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
        }
    </script>
@endsection
