@extends('guest.layouts.app')
@section('content')
    <div class="container">
        <div class="row mt-long d-flex justify-content-center">
            <div class="col-lg-10">
                <div class="card">
                    <div class="card-body">
                        <div class="row d-flex justify-content-center">
                            <h4>Form Pendaftaran</h4>
                        </div>
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-10 mt-4">
                                <h5>
                                    <strong>Kompetensi Keahlian Yang Dipilih</strong>
                                </h5>
                                <div class="d-flex justify-content-between mt-2">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="defaultUnchecked" name="kompetensi_keahlian" value="otomotif">
                                        <label class="custom-control-label" for="defaultUnchecked">Teknik Dan Bisnis Sepeda Motor</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="defaultUnchecked" name="kompetensi_keahlian" value="tkj">
                                        <label class="custom-control-label" for="defaultUnchecked">Teknik Komputer Dan Jaringan</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="defaultUnchecked" name="kompetensi_keahlian" value="akuntan">
                                        <label class="custom-control-label" for="defaultUnchecked">Akuntansi</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4 d-flex justify-content-center">
                            <div class="col-lg-10">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h5>
                                            <strong>Keterangan Tentang Siswa</strong>
                                        </h5>
                                    </div>
                                </div>
                                <div class="md-form">
                                    <input type="text" name="full_name" class="form-control" id="full_name">
                                    <label for="full_name">Nama Lengkap</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2 d-flex justify-content-center">
                            <div class="col-lg-10">
                                <div class="md-form">
                                    <input type="text" name="nickname" class="form-control" id="nickname">
                                    <label for="nickname">Nama Panggilan</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2 d-flex justify-content-center">
                            <div class="col-lg-10">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <span>Jenis Kelamin</span>
                                    </div>
                                </div>
                                <div class="custom-control custom-radio mt-2">
                                    <input type="radio" class="custom-control-input" id="male" name="gender">
                                    <label class="custom-control-label" for="male">Laki - Laki</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="female" name="gender" checked>
                                    <label class="custom-control-label" for="female">Perempuan</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4 d-flex justify-content-center">
                            <div class="col-lg-10">
                                <span>Tempat Tanggal Lahir</span>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="md-form">
                                            <input type="text" name="place_of_birth" class="form-control" id="place_of_birth">
                                            <label for="place_of_birth">Tempat Lahir</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="md-form">
                                            <input type="date" name="date_of_birth" class="form-control" id="date_of_birth">
                                            <label for="date_of_birth">Tanggal Lahir</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-5">
                                <label>Agama</label>
                                <select name="religion" class="form-control">
                                    <option value="Islam">Islam</option>
                                    <option value="Protestan">Protestan</option>
                                    <option value="Katholik">Katholik</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Budha">Budha</option>
                                    <option value="Konghuchu">Konghuchu</option>
                                </select>
                            </div>
                            <div class="col-lg-5">
                                <div class="md-form">
                                    <input type="text" class="form-control" name="nationality" id="nationality">
                                    <label for="nationality">Kewarganegaraan</label>
                                </div>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center mt-4">
                            <div class="col-lg-10">
                                <span>Keluarga</span>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-5">
                                <div class="md-form">
                                    <input type="text" name="family" class="form-control" id="family">
                                    <label for="family">Jumlah Keluarga Kandung</label>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="md-form">
                                    <input type="text" name="step-family" class="form-control" id="step-family">
                                    <label for="step-family">Jumlah Keluarga Tiri</label>
                                </div>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-10 ml-0 pl-0">
                                <div class="col-lg-6">
                                    <div class="md-form">
                                        <input type="text" name="step-sibling" class="form-control" id="step-sibling">
                                        <label for="step-sibling">Jumlah Keluarga Angkat</step>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-10">
                                <div class="col-lg-5 ml-0 pl-0">
                                    <label>
                                        Status <br />
                                        <small class="text-danger">*Kosongkan Jika Tidak Sesuai</small>
                                    </label>
                                    <select name="status" class="form-control mt-2">
                                        <option value="yatim">Yatim</option>
                                        <option value="piatu">Piatu</option>
                                        <option value="yatim piatu">Yatim Piatu</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4 d-flex justify-content-center">
                            <div class="col-lg-10">
                                <span>Bahasa</span>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-10">
                                <div class="md-form">
                                    <input type="text" name="language" class="form-control" id="language">
                                    <label for="language">Bahasa Sehari - hari</label>
                                </div>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center mt-4">
                            <div class="col-lg-10">
                                <button type="submit" class="btn warning-color-dark text-white btn-md btn-block rounded-pill">Kirim</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection