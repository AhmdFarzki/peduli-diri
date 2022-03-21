@extends('layouts.master')
@section('title', 'Dashboard')

@section('content')
<div class="page-heading d-flex justify-content-between">
    <h3>Catatan Perjalanan</h3>
    <a href="{{ route('travel-history.create') }}" class="btn btn-primary">Tambah Catatan</a>
</div>

<section class="page-content">
    <div class="card">
        <div class="card-body">
            <table class="table" id="historyTable">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Tanggal</th>
                        <th>Waktu</th>
                        <th>Lokasi</th>
                        <th>Suhu Tubuh</th>
                        <th>Aksi</th>
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
                        <td>
                            <a href="{{ route('travel-history.edit', $history->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('travel-history.destroy', $history->id) }}" method="POST" class="d-inline" id="delete{{ $history->id }}">
                                @csrf
                                @method('delete')
                                <button type="button" class="btn btn-danger" onclick="deleteData({{ $history->id }})">Hapus</button>
                            </form>
                        </td>
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
        $('#historyTable').DataTable({
            dom: 'Bfrtip',
            buttons: [
            {
                extend: 'pdfHtml5',
                text: 'Export PDF',
                className: 'btn btn-info',
                exportOptions: {
                    columns: ':not(:last-child)',
                },
                // download: 'open',
                customize: function(doc) {
                    doc.defaultStyle.alignment = 'center';
                    doc.styles.tableHeader.alignment = 'center';
                    doc.content[1].table.widths = 
                    Array(doc.content[1].table.body[0].length + 1).join('*').split('');
                }  
            },
                
            ],
            responsive: true
        });
        
    } );
</script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script>
      function deleteData(id){
          Swal.fire({
                  title: 'PERINGATAN!',
                  text: "Yakin ingin menghapus catatan?",
                      icon: 'warning',
                      showCancelButton: true,
                      confirmButtonColor: '#fe7c96',
                      cancelButtonColor: '#c3bdbd',
                      confirmButtonText: 'Yakin',
                      cancelButtonText: 'Batal',
                  }).then((result) => {
                  if (result.value) {
                          $('#delete'+id).submit();
                      }
                  })
      }
  </script>
@endpush
