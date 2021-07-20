@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Data Mata Kuliah
                    <a href="{{ route('tambah.makul') }}" class="btn btn-md btn-primary float-right">Tambah Data</a>
                </div>
                <div class="card-body">
                    <div class="table table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <th>No</th>
                                <th>Kode Mata Kuliah</th>
                                <th>Nama Mata Kuliah</th>
                                <th>SKS</th>
                                <th>Action</th>
                            </tr>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($makul as $mk)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$mk->kd_makul}}</td>
                                <td>{{$mk->nama_makul}}</td>
                                <td>{{$mk->sks}}</td>
                                <td>
                                    <a href="{{route('makul.edit', $mk->id)}}" class="btn btn-md btn-warning">Edit</a>
                                    <a href="{{route('makul.hapus', $mk->id)}}" class="btn btn-md btn-danger">Delete</a>
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