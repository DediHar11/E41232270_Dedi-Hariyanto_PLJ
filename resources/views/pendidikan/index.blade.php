@extends('layout_backend.master')
@section('content')
    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <!-- Responsive tables Start -->
                <div class="pd-20 card-box mb-30">
                    <div class="clearfix mb-20">
                        <div class="pull-left">
                            <h4 class="text-blue h4">Pendidikan</h4>
                        </div>
                        <div class="pull-right">
                            <a href="{{ route('pendidikan.create') }}" class="btn btn-outline-primary btn-sm"><i
                                    class="fa fa-plus"></i> Tambah</a>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Tingkatan</th>
                                    <th scope="col">Tahun Masuk</th>
                                    <th scope="col">Tahun Keluar</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($data as $d)
                                <tbody>
                                    <tr>
                                        <th scope="row">{{ $no++ }}</th>
                                        <td>{{ $d->nama }}</td>
                                        <td>
                                            @if ($d->tingkatan == 1)
                                            TK
                                            @elseif ($d->tingkatan == 2)
                                            SD
                                            @elseif ($d->tingkatan == 3)
                                            SMP
                                            @elseif ($d->tingkatan == 4)
                                            SMA/SMK
                                            @elseif ($d->tingkatan == 5)
                                            D3
                                            @elseif ($d->tingkatan == 6)
                                            D4/S1
                                            @elseif ($d->tingkatan == 7)
                                            S2
                                            @elseif ($d->tingkatan == 8)
                                            S3
                                            @endif
                                        </td>
                                        <td>{{ $d->tahun_masuk }}</td>
                                        <td>{{ $d->tahun_keluar }}</td>
                                        <td>
                                            <form action="{{ route('pendidikan.destroy', $d->id)}}" method="POST">
                                                <a href="{{ route('pendidikan.edit', $d->id) }}"
                                                    class="btn btn-outline-warning btn-sm">
                                                    <span class="icon-copy ti-pencil-alt"></span>
                                                </a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-outline-danger btn-sm"
                                                    onclick="return confirm('Apa anda yakin ingin menghapus data tersebut ?')">
                                                    <span class="icon-copy ti-trash"></span>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
                <!-- Responsive tables End -->
            </div>
        </div>
    </div>
@endsection('content')
