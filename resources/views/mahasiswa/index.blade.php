@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Data Mahasiswa
                    <a href="{{ route('tambah.mahasiswa') }}" class="btn btn-md btn-primary float-right">Tambah Data</a>
                </div>
                <div class="card-body">
                    <div class="table table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <th>No</th>
                                <th>NPM</th>
                                <th>Nama Lengkap</th>
                                <th>Tempat, Tanggal Lahir</th>
                                <th>Jenis Kelamin</th>
                                <th>Telepon</th>
                                <th>Alamat</th>
                                <th>Action</th>
                            </tr>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($mahasiswa as $mhs)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$mhs->npm}}</td>
                                <td>{{$mhs->user->name}}</td>
                                <td>{{$mhs->tempat_lahir.','.$mhs->tgl_lahir}}</td>
                                <td>{{$mhs->gender == 'L' ? 'Laki-Laki' : 'Perempuan'}}</td>
                                <td>{{$mhs->telepon}}</td>
                                <td>{{$mhs->alamat}}</td>
                                <td>
                                    <a href="{{route('mahasiswa.edit', $mhs->id)}}" class="btn btn-md btn-warning">Edit</a>
                                    <a href="{{route('mahasiswa.hapus', $mhs->id)}}" class="btn btn-md btn-danger">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection