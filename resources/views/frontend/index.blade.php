@extends('layouts.front')

@section('title')
    Lembur Crew
@endsection

@section('content')

<div class="container mt-5">
    <div class="row"> 
        <div id="frontend" class="card-header">
            <h1 class="profile text-center mt-3" style="font-weight: bold">Riwayat
            <span style="color: #EA9A00">Lembur</span></h1>
            <a href="#" class="btn primary float-right" style="color: #000000">Tambah</a>
        </div>
    
        <div class="card-body d-flex justify-content-center text-center">
            <table class="table table-striped thead">
                <thead>
                    <tr>
                        <th style="font-weight: bold">Id</th>
                        <th style="font-weight: bold">Tanggal</th>
                        <th style="font-weight: bold">NIK</th>
                        <th style="font-weight: bold">Nama Karyawan</th>
                        <th style="font-weight: bold">Jam Mulai</th>
                        <th style="font-weight: bold">Jam Selesai</th>
                        <th style="font-weight: bold">Jumlah Jam Lembur</th>
                        <th style="font-weight: bold">Keterangan</th>
                        <th style="font-weight: bold">Action</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
@endsection

