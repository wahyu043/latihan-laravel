@extends('layouts.app')

@section('content')

<div class="container d-flex justify-content-center">
    <div class="card w-50">
        <div class="card-header">
            <h3>Profil Siswa</h3>
        </div>
        <div class="card-body">
            <a href="{{ route('siswa.index') }}">Kembali</a>
            <div class="row mb-2">
                <div class="col-4">
                    <h4>Nama</h4>
                </div>
                <div class="col-8">
                    <h4>: {{$siswa->nama}}</h4>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-4">
                    <h4>NIS</h4>
                </div>
                <div class="col-8">
                    <h4>: {{$siswa->nis}}</h4>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-4">
                    <h4>Tanggal Lahir</h4>
                </div>
                <div class="col-8">
                    <h4>: {{$siswa->tgl_lahir}}</h4>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection