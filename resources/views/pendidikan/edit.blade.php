@extends('layout_backend.master')
@section('content')
    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <!-- Default Basic Forms Start -->
                <div class="pd-20 card-box mb-30">
                    <div class="clearfix">
                        <div class="pull-left">
                            <h4 class="text-blue h4">Edit Pendidikan</h4>
                            {{-- <p class="mb-30">edit form data pendidikan</p> --}}
                        </div>
                    </div>
                    <form action="{{route('pendidikan.update',$data->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Nama</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" value="{{$data->nama}}" name="nama" type="text">
                            </div>
                        </div>
                        <div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Tingkatan</label>
							<div class="col-sm-12 col-md-10">
								<select class="custom-select col-12" name="tingkatan" required>
									<option selected="">Pilih</option>
                                    <option value="1" {{(asset($data) && $data->tingkatan == 1) ? 'selected' : ''}}>TK</option>
                                    <option value="2" {{(asset($data) && $data->tingkatan == 2) ? 'selected' : ''}}>SD</option>
									<option value="3" {{(asset($data) && $data->tingkatan == 3) ? 'selected' : ''}}>SMP</option>
									<option value="4" {{(asset($data) && $data->tingkatan == 4) ? 'selected' : ''}}>SMA/SMK</option>
                                    <option value="5" {{(asset($data) && $data->tingkatan == 5) ? 'selected' : ''}}>D3</option>
									<option value="6" {{(asset($data) && $data->tingkatan == 6) ? 'selected' : ''}}>D4/S1</option>
									<option value="7" {{(asset($data) && $data->tingkatan == 7) ? 'selected' : ''}}>S2</option>
                                    <option value="8" {{(asset($data) && $data->tingkatan == 8) ? 'selected' : ''}}>S3</option>
								</select>
							</div>
						</div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Tahun Masuk</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" value="{{$data->tahun_masuk}}" name="tahun_masuk" type="text">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Tahun Keluar</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" value="{{$data->tahun_keluar}}" name="tahun_keluar" type="text">
                            </div>
                        </div>
                        <button class="btn btn-info" type="submit">Update</button>
                        <a class="btn btn-secondary" href="{{route('pendidikan.index')}}">cancel</a>
                    </form>
                </div>
                <!-- Default Basic Forms End -->
            </div>
        </div>
    </div>
@endsection('content')
