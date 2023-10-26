@extends('layout_backend.master')
@section('content')
    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <!-- Default Basic Forms Start -->
                <div class="pd-20 card-box mb-30">
                    <div class="clearfix">
                        <div class="pull-left">
                            <h4 class="text-blue h4">Menambahkan Pengalaman Kerja</h4>
                            <p class="mb-30">input form tambah data pengalaman kerja dibawah ini</p>
                        </div>
                    </div>
                    <form action="{{route('pengalaman.store')}}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Nama Perusahaan</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" name="nama" type="text">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Jabatan</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" name="jabatan" type="text">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Tahun Masuk</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" id="tahun_masuk" class="datepicker" name="tahun_masuk" type="text">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Tahun Selesai</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" id="tahun_selesai" name="tahun_keluar" type="text" dateFormat="yyyy">
                            </div>
                        </div>
                        <button class="btn btn-info" type="submit">Save</button>
                        <a class="btn btn-secondary" href="{{route('pengalaman.index')}}">cancel</a>
                    </form>
                </div>
                <!-- Default Basic Forms End -->
            </div>
        </div>
    </div>
@endsection('content')
