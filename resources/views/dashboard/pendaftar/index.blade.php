@extends('dashboard.layout')

@section('konten')

<div class="container mt-5">
    <h2>Data Pendaftar</h2>
    <a href="{{ route('dashboard.pendaftar.create') }}" class="btn btn-primary mb-3">Tambah Pendaftar</a>
    <a href="{{ route('dashboard.pendaftar.export') }}" class="btn btn-success mb-3">Export Excel</a>

    <div class="table-responsive">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th> <!-- Tambah kolom nomor -->
                <th>Nama Tim</th>
                <th>Ketua</th>
                <th>Email</th>
                <th>No HP</th>
                <th>Anggota 1</th>
                <th>Anggota 2</th>
                <th>Kartu Identitas</th>
                <th>Sekolah/Kampus</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $d)
            <tr>
                <td>{{ $loop->iteration }}</td> <!-- Nomor urut otomatis -->
                <td>{{ $d->nama_tim }}</td>
                <td>{{ $d->nama_ketua }}</td>
                <td>{{ $d->email }}</td>
                <td>{{ $d->no_hp }}</td>
                <td>{{ $d->nama_anggota_1 }}</td>
                <td>{{ $d->nama_anggota_2 }}</td>
                <td>
                    @if($d->kartu_identitas)
                        <a href="{{ asset('storage/uploads/' . $d->kartu_identitas) }}" target="_blank">Download</a>
                    @else
                        Tidak ada
                    @endif
                </td>
                <td>{{ $d->nama_sekolah }}</td>
                <td>
                    <a href="{{ route('dashboard.pendaftar.edit', $d->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('dashboard.pendaftar.destroy', $d->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Yakin ingin menghapus?')" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div> 
</div>

@endsection
