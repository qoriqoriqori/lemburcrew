@extends('layouts.front')

@section('title')
    Lembur Crew
@endsection

@section('content')

<div class="container mt-3">
    <div class="card-body">
        <form action="#" method="POST" enctype="multipart/form-data">
        @csrf
    
        <div class="row"> 
            <div class=" mt-5">
                <h1 class="profile text-center mb-5" style="font-weight: bold">Formulir <span style="color: #EA9A00">Lembur</span></h1>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="">Tanggal</label>
                        <input type="text" class="form-control" name="tanggal">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">NIK</label>
                        <input type="text" class="form-control" name="nik">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">Nama</label>
                        <input type="text" class="form-control" name="nama">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">Jam Mulai</label>
                        <input type="text" class="form-control" name="jam_mulai">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">Jam Selesai</label>
                        <input type="text" class="form-control" name="jam_selesai">
                    </div>
                    
                    <div class="col-md-6 mb-3">
                        <label for="">Jumlah Jam</label>
                        <input type="text" class="form-control" name="jumlah_jam">
                    </div>
                    
                    <div class="col-md-12">
                       <button type="submit" class="btn primary float-right">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection