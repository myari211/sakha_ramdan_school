@extends('admin.layouts.app')
@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    @foreach($pendaftar as $data)
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="md-form md-outline">
                                            @if($data->keahlian == "tkj")
                                                <input type="text" class="form-control" id="keahlian" value="Teknik Komputer dan Jaringan" disabled>
                                            @elseif($data->keahlian == "otomotif")
                                                <input type="text" class="form-control" id="keahlian" value="Teknik dan Bisnis Sepeda Motor" disabled>
                                            @elseif($data->keahlian =="akuntan")
                                                <input type="text" class="form-control" id="keahlian" value="Akuntansi" disabled>
                                            @endif
                                            <label for="keahlian">Keahlian</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="md-form md-outline">
                                            <input type="text" class="form-control" id="name" value={{ $data->nama_lengkap }} disabled>
                                            <label for="name">Nama Lengkap</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="md-form md-outline">
                                            <input type="text" class="form-control" id="nickname" value="{{ $data->nama_panggilan }}" disabled>
                                            <label for="nickname">Nama Panggilan</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="md-form md-outline">
                                            <input type="text" class="form-control" id="jenis_kelamin" value="{{ $data->jenis_kelamin }}" disabled>
                                            <label for="jenis_kelamin">Jenis Kelamin</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="md-form md-outline">
                                            <input type="text" class="form-control" id="ttl" value="{{ $data->tempat_lahir }}, {{ $data->tanggal_lahir }}" disabled>
                                            <label for="ttl">Tempat, Tanggal Lahir</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="md-form md-outline">
                                            <input type="text" class="form-control" id="agama" value="{{ $data->agama }}" disabled>
                                            <label for="agama">Agama</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="md-form md-outline">
                                            <input type="text" class="form-control" id="kewarganegaraan" value="{{ $data->kewarganegaraan }}" disabled>
                                            <label for="kewarganegaraan">Kewarganegaraan</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="md-form md-outline">
                                            <input type="text" class="form-control" id="jumlah_keluarga_kandung" value="{{ $data->jumlah_keluarga_kandung }}" disabled>
                                            <label for="jumlah_keluarga_kandung">Jumlah Keluarga Kandung</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="md-form md-outline">
                                            @if($data->jumlah_keluarga_tiri == null)
                                                <input type="text" class="form-control" id="jumlah_keluarga_tiri" value="0" disabled>
                                            @else
                                                <input type="text" class="form-control" id="jumlah_keluarga_tiri" value="{{ $data->jumlah_keluarga_tiri }}" disabled>
                                            @endif    
                                            <label for="jumlah_keluarga_tiri">Jumlah Keluarga Tiri</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="md-form md-outline">
                                            @if($data->jumlah_keluarga_angkat == null)
                                                <input type="text" class="form-control" id="jumlah_keluarga_angkat" value="0" disabled>
                                            @else
                                                <input type="text" class="form-control" id="jumlah_keluarga_angkat" value="{{ $data->jumlah_keluarga_angkat }}" disabled>
                                            @endif
                                            <label for="jumlah_keluarga_angkat">Jumlah Keluarga Angkat</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="md-form md-outline">
                                            <input type="text" class="form-control" id="status" value="{{ $data->status }}" disabled>
                                            <label for="status">Status</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="md-form">
                                            <div class="md-form md-outline">
                                                <input type="text" class="form-control" id="kesenian" value="{{ $data->kesenian }}" disabled>
                                                <label for="kesenian">Kesenian</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="md-form md-outline">
                                            <input type="text" class="form-control" id="olahraga" value="{{ $data->olah_raga }}" disabled>
                                            <label for="olahraga">Olah raga</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="md-form md-outline">
                                            <input type="text" class="form-control" id="organisasi" value="{{ $data->organisasi }}" disabled>
                                            <label for="organisasi">Organisasi</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="md-form md-outline">
                                            <input type="text" class="form-control" id="lain_lain" value="{{ $data->lain_lain }}" disabled>
                                            <label for="lain_lain">Lain - Lain</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="md-form md-outline">
                                            <input type="text" class="form-control" id="nama_ayah" disabled value="{{ $data->nama_ayah }}">
                                            <label for="nama_ayah">Nama Ayah</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="md-form md-outline">
                                            <input type="text" class="form-control" id="tempat_lahir_ayah" disabled value="{{ $data->tempat_lahir_ayah }}">
                                            <label for="tempat_lahir_ayah">Tempat Lahir</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="md-form md-outline">
                                            <input type="text" class="form-control" id="tanggal_lahir_ayah" disabled value="{{ $data->tanggal_lahir_ayah }}">
                                            <label for="tanggal_lahir_ayah">Tanggal Lahir</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="md-form md-outline">
                                            <input type="text" class="form-control" id="agama_ayah" disabled value="{{ $data->agama_ayah }}">
                                            <label for="agama_ayah">Agama Ayah</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="md-form md-outline">
                                            <input type="text" class="form-control" id="kewarganegaraan_ayah" disabled value="{{ $data->kewarganegaraan_ayah }}">
                                            <label for="kewarganegaraan_ayah">Kewarganegaraan Ayah</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="md-form md-outline">
                                            <input type="text" class="form-control" id="pendidikan_terakhir_ayah" disabled value="{{ $data->pendidikan_terakhir_ayah }}">
                                            <label for="pendidikan_terakhir_ayah">Pendidikan Terakhir Ayah</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="md-form md-outline">
                                            <input type="text" class="form-control" id="pekerjaan_ayah" disabled value="{{ $data->pekerjaan_ayah }}">
                                            <label for="pekerjaan_ayah">Pekerjaan Ayah</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="md-form md-outline">
                                            <input type="text" class="form-control" id="pekerjaan_ayah" disabled value="{{ $data->pekerjaan_ayah }}">
                                            <label for="pekerjaan_ayah">Pekerjaan Ayah</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="md-form md-outline">
                                            <input type="text" class="form-control" id="penghasilan_ayah" disabled value="{{ $data->penghasilan_ayah }}">
                                            <label for="penghasilan_ayah">Penghasilan Ayah</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection