@extends('layouts.master')
@section('title', 'Dashboard')

@section('content')
<div class="page-heading d-flex justify-content-between">
    <h3>Catatan Perjalanan</h3>
    <a href="{{ route('tambah-catatan') }}" class="btn btn-primary">Tambah Catatan</a>
</div>

<section class="page-content">
    <div class="card">
        <div class="card-body">
            <table class="table" id="table1">
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
                        <td>{{ $i += 1 }}</td>
                        <td>{{ Carbon\Carbon::parse($history->tanggal)->format('d F Y') }}</td>
                        <td>{{ $history->jam }}</td>
                        <td>{{ $history->lokasi }}</td>
                        <td>{{ $history->suhu_tubuh }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</section>
@endsection



@push('addon-script')
<script>
    $(document).ready(function() {
        $('#siswaTable').DataTable();
    } );
</script>
<script>
    // Jquery Datatable
    let jquery_datatable = $("#table1").DataTable()
</script>
@endpush
