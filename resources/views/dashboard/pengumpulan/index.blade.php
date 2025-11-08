@extends('dashboard.layout')

@section('konten')
<div class="container mt-5">
    <h2>Data Pengumpulan Tugas</h2>

    <div class="mb-3">
        <a href="{{ route('dashboard.pengumpulan.create') }}" class="btn btn-primary">+ Tambah Pengumpulan</a>
    </div>
    <a href="{{ route('dashboard.pengumpulan.export') }}" class="btn btn-success mb-3">Export Excel</a>

    <div class="table-responsive">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th> <!-- Tambah nomor urut -->
                <th>Nama Tim</th>
                <th>Email</th>
                <th>File Tugas</th>
                <th>Waktu Pengumpulan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($data as $d)
            <tr>
                <td>{{ $loop->iteration }}</td> <!-- Nomor otomatis -->
                <td>{{ $d->nama_tim }}</td>
                <td>{{ $d->email }}</td>
                <td>
                    @if($d->pengumpulan)
                        <a href="{{ asset('storage/uploads/tugas/' . $d->pengumpulan) }}" download>Download</a>
                    @else
                        Belum ada file
                    @endif
                </td>
                <td>{{ $d->created_at->format('d-m-Y H:i') }}</td>
                <td>
                    <a href="{{ route('dashboard.pengumpulan.edit', $d->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('dashboard.pengumpulan.destroy', $d->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Yakin ingin menghapus data ini?')" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="6" class="text-center">Belum ada data pengumpulan</td>
            </tr>
            @endforelse
        </tbody>
    </table>
    </div> 
</div>
@endsection
