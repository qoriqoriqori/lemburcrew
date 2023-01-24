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
            <a href="{{route('add-lembur')}}" class="btn primary float-right" style="color: #000000">Tambah</a>
        </div>
    
        <div class="card-body d-flex justify-content-center text-center">
            <table id="myTable" class="table table-striped thead">
                <thead>
                    <tr>
                        <th style="font-weight: bold">Tanggal</th>
                        <th style="font-weight: bold">NIK</th>
                        <th style="font-weight: bold">Nama</th>
                        <th style="font-weight: bold">Jam Mulai</th>
                        <th style="font-weight: bold">Jam Selesai</th>
                        <th style="font-weight: bold">Jumlah Jam</th>
                        <th style="font-weight: bold">Keterangan</th>
                        <th style="font-weight: bold">Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($frontend as $item)
                        <tr>
                            <!-- <td>{{ $item->id }}</td> -->
                            <td>{{ $item->tanggal }}</td>
                            <td>{{ $item->nik }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->jam_mulai }}</td>
                            <td>{{ $item->jam_selesai }}</td>
                            <td>{{ $item->total_jam }}</td>
                            <td>{{ $item->status == '0' ?'Pending' : 'Disetujui'}}</td>
                            <td>
                                <a href="{{ url('frontend-edit/'.$item->id) }}" class="btn btn-success btn-sm">Edit</a>
                                <a href="{{ url('frontend-delete/'.$item->id) }}" class="btn btn-danger btn-sm">Hapus</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection

