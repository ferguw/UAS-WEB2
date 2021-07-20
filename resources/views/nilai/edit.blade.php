@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tambah Data Nilai</div>
                <div class="card-body">
                    <form action="{{route('nilai.update', $nilai->id)}}" method="post">
                        @csrf
                        <div class="form-group row mb-4 mt-3">
                            <label for="" class="col-sm-2 offset-1 col-form-label"><b>Nama Mahasiswa</b></label>
                            <div class="col-sm-8">
                                <select name="mahasiswa_id" id="" class="form-control">
                                    <option value="" disabled selected>-- Pilih Mahasiswa --</option>
                                        @foreach($user as $u)
                                            <option value="{{$u->id}}" {{$nilai->mahasiswa_id == $u->id ? 'selected' : ''}}>{{$u->name}}</option>
                                        @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="" class="col-sm-2 offset-1 col-form-label"><b>Nama Mata Kuliah</b></label>
                            <div class="col-sm-8">
                                <select name="makul_id" id="" class="form-control">
                                    <option value="" disabled selected>-- Pilih Mata Kuliah --</option>
                                        @foreach($makul as $m)
                                            <option value="{{$m->id}}" {{$nilai->makul_id == $m->id ? 'selected' : ''}}>{{$m->nama_makul}}</option>
                                        @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="" class="col-sm-2 offset-1 col-form-label"><b>Nilai</b></label>
                            <div class="col-sm-3">
                                <input type="number" name="nilai" class="form-control" id="" value="{{$nilai->nilai}}">
                            </div>
                        </div>
                        <div class="form-group row">
                                <div class="col-sm-11 d-flex flex-row-reverse">
                                    <a href="{{route('nilai')}}" class="btn btn-md btn-danger">Batal</a>
                                    &nbsp;&nbsp;&nbsp;
                                    <button type="submit" class="btn btn-md btn-primary">Simpan</button>
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