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
                                            @elseif($data->keahlian == "tbsm")
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
                            </div>
                            <div class="col-lg-6">
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection