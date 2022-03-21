@extends('layouts.master')
@section('title', 'Dashboard')

@section('content')
<div class="page-heading text-center">
    <h3>Selamat Datang {{  Auth::user()->name }} di Aplikasi Peduli Diri</h3>
</div>
<div class="page-content">
    <section class="row">
        <div class="col-12 col-lg-8">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header text-center text-md-start">
                            <h4>Catatan Terbaru</h4>
                        </div>
                        <div class="card-body">
                            <table class="table" id="historyTable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Tanggal</th>
                                        <th>Waktu</th>
                                        <th>Lokasi</th>
                                        <th>Suhu Tubuh</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($travelHistory as $i => $history)
                                    <tr>
                                        <td>{{ $i += 1 }}.</td>
                                        <td>{{ Carbon\Carbon::parse($history->tanggal)->isoFormat('dddd, D MMMM Y') }}</td>
                                        <td>{{ $history->jam  }}</td>
                                        <td>{{ $history->lokasi }}</td>
                                        <td>{{ $history->suhu_tubuh }}&deg;C</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-4">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body py-4-5">
                            <div class="row">
                                <div class="col-md-4 mx-auto">
                                    <div class="stats-icon blue">
                                        <i class="iconly-boldBookmark"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Total Catatan</h6>
                                    <h6 class="font-extrabold mb-0">{{ $total }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-header text-center text-md-start">
                            <h4>Tambah Catatan</h4>
                        </div>
                        <div class="card-body">
                                <form action="{{ route('travel-history.store') }}" class="form form-horizontal" method="POST">
                                    @csrf
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Tanggal</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <input type="date" id="tanggal" class="form-control" name="tanggal"
                                                    placeholder="Tanggal">
                                            </div>
                                            <div class="col-md-4">
                                                <label>Jam</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <input type="time" id="jam" class="form-control" name="jam"
                                                    placeholder="Jam">
                                            </div>
                                            <div class="col-md-4">
                                                <label>Lokasi</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <input type="text" id="lokasi" class="form-control" name="lokasi"
                                                    placeholder="Lokasi">
                                            </div>
                                            <div class="col-md-4">
                                                <label>Suhu Tubuh</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <input type="text" id="suhu_tubuh" class="form-control" name="suhu_tubuh"
                                                    placeholder="Suhu Tubuh">
                                            </div>
                                            <div class="col-sm-12 d-flex justify-content-end">
                                                <button type="submit" class="btn btn-primary me-1 mb-1">Simpan</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
</div>
@endsection

@push('addon-script')
<script>
    $(document).ready(function() {
        $('#historyTable').DataTable({
            // "paging":   false,
            // "info":     false,
            // "searching": false
            responsive: true
        });
    } );
</script>
@endpush
