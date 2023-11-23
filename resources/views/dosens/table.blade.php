<!-- resources/views/dosens/tabel.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Data Dosen</h2>
        <a href="{{ route('dosens.create') }}" class="btn btn-primary mb-2">Tambah Dosen</a>

        <table class="table">
            <thead>
                <tr>
                    <th>NIDN</th>
                    <th>Nama Lengkap</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>Program Studi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($dosens as $dosen)
                    <tr>
                        <td>{{ $dosen->nidn }}</td>
                        <td>{{ $dosen->nama_lengkap }}</td>
                        <td>{{ $dosen->tempat_lahir }}</td>
                        <td>{{ $dosen->tanggal_lahir }}</td>
                        <td>{{ $dosen->jenis_kelamin }}</td>
                        <td>{{ $dosen->alamat }}</td>
                        <td>{{ $dosen->program_studi }}</td>
                        <td>
                            <a href="{{ route('dosens.show', $dosen->id) }}" class="btn btn-info btn-sm">Detail</a>
                            <a href="{{ route('dosens.edit', $dosen->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('dosens.destroy', $dosen->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8">Tidak ada data dosen</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
