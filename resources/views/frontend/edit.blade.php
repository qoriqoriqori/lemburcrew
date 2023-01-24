@extends('layouts.front')

@section('title')
    Lembur Crew
@endsection

@section('content')

<div class="container mt-3">
    <div class="card-body">
        <form action="{{ url('frontend-update/'.$frontend->id) }}" method="post" enctype="multipart/form-data">
        @csrf  
        @method('PUT')
       
        <div class="row">
            <div class="mt-2">
                <div class="card-header">
                    <h1 class="profile text-center mb-3" style="font-weight: bold">Edit 
                    <span style="color: #EA9A00">Formulir</span></h1>
                    <a href="{{ url('/') }}" class="btn primary float-right mb-3" style="color: #000000">Kembali</a>
                </div>
                
                <div class="col-md-6 offset-md-3 mt-3">
                    <label for="">Tanggal</label>
                    <input type="text" value="{{ $frontend->tanggal }}" class="form-control" name="tanggal">
                </div>

                <div class="col-md-6 offset-md-3 mt-3"> 
                    <label for="">NIK</label>
                    <input type="text" value="{{ $frontend->nik }}"  class="form-control" name="nik">
                </div>

                <div class="col-md-6 offset-md-3 mt-3">
                    <label for="">Nama</label>
                    <input type="text" value="{{ $frontend->nama }}" class="form-control" name="nama">
                </div>

                <div class="col-md-6 offset-md-3 mt-3">
                    <label for="">Jam Mulai</label>
                    <input type="text" value="{{ $frontend->jam_mulai}}" class="form-control" name="jam_mulai">
                </div>

                <div class="col-md-6 offset-md-3 mt-3">
                    <label for="">Jam Selesai</label>
                    <input type="text" value="{{ $frontend->jam_selesai }}" class="form-control" name="jam_selesai">
                </div>
                
                <div class="col-md-6 offset-md-3 mt-3">
                    <label for="">Jumlah Jam Lembur</label>
                    <input type="text" value="{{ $frontend->total_jam }}" class="form-control" name="total_jam">
                </div>
                
                <div class="col-md-6 offset-md-3 mt-3">
                    <button type="submit" class="btn primary">Edit</button>
                </div>
                
            </div>
        </div>
    </form>
</div>

@endsection