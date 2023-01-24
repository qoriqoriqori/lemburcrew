@extends('layouts.admin')

@section('title')
    Lembur Crew
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card mt-0">
                <div class="card-header" style="background-color: #FDEBD0">
                    <a href="{{ url('lembur') }}" class="btn primary float-end" style="color: #000000">Kembali</a>
            </div>

            <div div class="card-body">
                <div class="row">
                    <div class="col-md-6 order-details">
                        <div class="border mt-4">
                            <label class="px-2 pb-2 text-muted-bold" for="">Tanggal</label>
                            <P class="mb-0 px-2">{{ $lembur->tanggal }}</P>
                        </div>

                        <div class="border mt-3">
                            <label class="px-2 pb-2 text-muted-bold" for="">NIK</label>
                            <P class="mb-0 px-2">{{ $lembur->nik }}</P>
                        </div>

                        <div class="border mt-3">
                            <label class="px-2 pb-2 text-muted-bold" for="">Nama</label>
                            <P class="mb-0 px-2">{{ $lembur->nama }}</P>
                        </div>
                    </div>

                    <div class="col-md-6 order-details">
                        <div class="border mt-4">
                            <label class="px-2 pb-2 text-muted-bold" for="">Jam Mulai</label>
                            <P class="mb-0 px-2">{{ $lembur->jam_mulai }}</P>
                        </div>

                        <div class="border mt-3">
                            <label class="px-2 pb-2 text-muted-bold" for="">Jam Selesai</label>
                            <P class="mb-0 px-2">{{ $lembur->jam_selesai }}</P>
                        </div>

                        <div class="border mt-3">
                            <label class="px-2 pb-2 text-muted-bold" for="">Jumlah Jam</label>
                            <P class="mb-0 px-2">{{ $lembur->total_jam }}</P>
                        </div>
                    </div>

                    <div class="mt-5 px-2">
                        <label class="pb-2" style="font-weight: bold" for="">Status Lembur</label>
                        <form action="{{ url('lembur-update/'.$lembur->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <select class="form-select" name="lembur_status">
                                <option {{ $lembur->status == '0'? 'selected':'' }} value="0">Pending</option>
                                <option {{ $lembur->status == '1'? 'selected':'' }} value="1">Setujui</option>
                            </select>
                            <button type="submit" class="btn float-end mt-3 text-white" style="background-color: #EA9A00">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection