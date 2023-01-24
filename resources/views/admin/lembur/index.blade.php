@extends('layouts.admin')

@section('title')
    Lembur Crew
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card mt-0">
                <div class="card-header">
                    <h3>Data Lembur
                        <a href="{{ 'lembur-history' }}" class="btn primary float-right">Riwayat Lembur</a>
                    </h3>
                    <hr class="mt-4">
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
                        @foreach($lembur as $item)
                            <tr>
                                <td>{{ $item->tanggal }}</td>
                                <td>{{ $item->nik }}</td>
                                <td>{{ $item->nama }}</td> 
                                <td>{{ $item->jam_mulai }}</td>
                                <td>{{ $item->jam_selesai }}</td>
                                <td>{{ $item->total_jam }}</td>
                                <td>{{ $item->status == '0' ?'Pending' : 'Disetujui'}}</td>
                                <td>
                                    <a href="{{ url('lembur-view/'.$item->id) }}" class="btn primary btn-sm">View</a>
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