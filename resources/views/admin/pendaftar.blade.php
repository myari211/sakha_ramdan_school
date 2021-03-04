@extends('admin.layouts.app')
@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Kompetensi</th>
                                <th scope="col">Tempat, Tanggal Lahir</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">Kewarganegaraan</th>
                                <th scope="col">Agama</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pendaftar as $no => $data)
                                <tr>
                                    <td>{{ ++$no }}</td>
                                    <td>{{ $data->nama_lengkap }}</td>
                                    <td>{{ $data->keahlian }}</td>
                                    <td>{{ $data->tempat_lahir }}, {{ $data->tanggal_lahir }}</td>
                                    <td>{{ $data->jenis_kelamin }}</td>
                                    <td>{{ $data->Kewarganegaraan }}</td>
                                    <td>{{ $data->agama }}</td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-primary p-2" onclick="location.href='/admin/pendaftar/{{ $data->id }}';">
                                            <i class="fas fa-eye text-white"></i>
                                        </button>
                                        <button type="button" class="btn btn-sm btn-danger p-2">
                                            <i class="fas fa-trash"></i>
                                        </button>
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
@endsection