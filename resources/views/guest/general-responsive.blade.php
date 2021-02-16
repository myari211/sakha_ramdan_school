@extends('guest.layouts.app')
@section('responsive')
    <div class="container">
        <div class="row mt-long">
            <div class="col-sm-12 d-flex justify-content-center">
                <h3>Form Pendaftaran</h3>
            </div>
        </div>
        <div class="row mt-4 d-flex justify-content-center">
            <div class="col-lg-10">
                <h5>Kompetesi Keahlian Yang Dipilih</h5>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-lg-10">
                <select name="kompetensi" class="form-control" id="kompetensi">
                    <option value="TBSM">Teknik Dan Bisnis Sepeda Motor</option>
                    <option value="TKJ">Teknik Komputer Dan Jaringan</option>
                    <option value="AKL">Akuntansi Dan Keuangan Lembaga</option>
                </select>
            </div>
        </div>
        <div class="row d-flex justify-content-center mt-4">
            <div class="col-lg-10">
                <h5>Keterangan Tentang Siswa</h5>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-md-10">
                <div class="md-form md-outline mb-0">
                    <input type="text" name="nama_lengkap" class="form-control" id="nama_lengkap">
                    <label for="nama_lengkap">Nama Lengkap</label>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-md-10">
                <div class="md-form md-outline mt-0">
                    <input type="text" name="nama_panggilan" class="form-control" id="nama_panggilan">
                    <label for="nama_panggilan">Nama Panggilan</label>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-lg-10">
                <span>Jenis Kelamin</span>
                <select name="jenis_kelamin" class="form-control">
                    <option value="l">Laki - Laki</option>
                    <option value="p">Perempuan</option>
                </select>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-lg-10">
                <div class="md-form md-outline">
                    <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir">
                    <label for="tempat_lahir">Tempat Lahir</label>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-lg-10">
                <div class="md-form md-outline">
                    <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir">
                    <label for="tanggal_lahir">Tanggal Lahir</label>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-lg-10">
                <span>Agama</span>
                <select name="agama" class="form-control">
                    <option value="islam">Islam</option>
                    <option value="protestan">Protestan</option>
                    <option value="katholik">Katholik</option>
                    <option value="hindu">Hindu</option>
                    <option value="budha">Budha</option>
                    <option value="konghuchu">Konghuchu</option>
                </select>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-lg-10">
                <div class="md-form md-outline">
                    <span>Kewarganegaraan</span>
                    <input type="text" name="kewarganegaraan" class="form-control" id="kewarganegaraan">
                    <label for="kewarganegaraan">Kewarganegaraan</label>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-lg-10">
                <h5>Keluarga</h5>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-lg-10">
                <div class="md-form md-outline">
                    
                </div>
            </div>
        </div>
    </div>
@endsection