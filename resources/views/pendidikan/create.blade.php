@extends('layout_backend.master')
@section('content')
    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <!-- Default Basic Forms Start -->
                <div class="pd-20 card-box mb-30">
                    <div class="clearfix">
                        <div class="pull-left">
                            <h4 class="text-blue h4">Menambahkan Pendidikan</h4>
                            <p class="mb-30">input form tambah data pendidikan dibawah ini</p>
                        </div>
                    </div>
                    <form action="{{route('pendidikan.store')}}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Nama</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" name="nama" type="text">
                            </div>
                        </div>
                        <div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Tingkatan</label>
							<div class="col-sm-12 col-md-10">
								<select class="custom-select col-12" name="tingkatan" required>
									<option selected="">Pilih</option>
                                    <option value="1">TK</option>
                                    <option value="2">SD</option>
									<option value="3">SMP</option>
									<option value="4">SMA/SMK</option>
                                    <option value="5">D3</option>
									<option value="6">D4/S1</option>
									<option value="7">S2</option>
                                    <option value="8">S3</option>
								</select>
							</div>
						</div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Tahun Masuk</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" class="datepicker" name="tahun_masuk" type="text">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Tahun Keluar</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" name="tahun_keluar" type="text" dateFormat="yyyy">
                            </div>
                        </div>
                        <button class="btn btn-info" type="submit">Save</button>
                        <a class="btn btn-secondary" href="{{route('pendidikan.index')}}">cancel</a>
                    </form>
                </div>
                <!-- Default Basic Forms End -->
            </div>
        </div>
    </div>
@endsection('content')
