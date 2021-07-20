@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tambah Mata Kuliah</div>
                <div class="card-body">
                    <form action="{{route('simpan.makul')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col">
                                    <label for="">Kode Mata Kuliah</label>
                                    <input type="text" name="kd_makul" class="form-control" placeholder="Tambahkan Kode Mata Kuliah">
                                </div>
                                <div class="col">
                                    <label for="">Nama Mata Kuliah</label>
                                    <input type="text" name="nama_makul" class="form-control" placeholder="Tambahkan Nama Mata Kuliah">
                                </div>
                                <div class="col">
                                    <label for="">SKS</label>
                                    <input type="number" name="sks" class="form-control" placeholder="Tambahkan SKS Mata Kuliah">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-row  float-right">
                                <div class="col">
                                    <button type="submit" class="btn btn-md btn-primary">Simpan</button>
                                    <a href="{{route('makul')}}" class="btn btn-md btn-danger">Batal</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection