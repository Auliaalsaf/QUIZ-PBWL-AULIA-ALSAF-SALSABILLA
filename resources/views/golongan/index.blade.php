@extends('layouts.app')
@section('content')
    <div class="card m-4">
        <div class="card-header">
            <h3 class="card-title">Data Golongan</h3>
        </div>
        <div class="card-body">
        <a href="{{ route('pel_create') }}" class="btn btn-primary" 
        style="background-color: #342D7E; color: white;">Tambah Data Golongan</a>
            <table class="table table-striped text-center">
                <thead>
                    <tr>
                        <th style="width: 10px">No</th>
                        <th>Kode Golongan</th>
                        <th>Nama Golongan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    @foreach ($data as $d)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $d->gol_kode }}</td>
                            <td>{{ $d->gol_nama }}</td>
                            <td>
                                <a href="{{ route('golongan.edit', ['id' => $d->id]) }}" class="btn btn-warning">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <form action="{{ route('delete', ['id' => $d->id]) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fas fa-trash"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
@endsection
