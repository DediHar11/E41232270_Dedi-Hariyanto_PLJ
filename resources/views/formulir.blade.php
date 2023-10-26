<!DOCTYPE html>
<html>

<head>
    <title>Request Dengan Input Laravel 10</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
        rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-center">Form Validation Dengan Laravel 10</h1>
                <form action="{{ route('/formulir/proses') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nama" class="control-label">Nama Lengkap</label>
                        <input type="text" id="nama" name="nama"
                            class="form-control {{ $errors->has('nama') ? ' is-invalid' : '' }}"
                            placeholder="Nama Lengkap" value="{{ old('nama') }}">
                        @if ($errors->has('nama'))
                            <span class="text-danger small">
                                <p>{{ $errors->first('nama') }}</p>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="alamat" class="control-label">Alamat</label>
                        <input type="text" id="alamat" name="alamat"
                            class="form-control {{ $errors->has('alamat') ? ' is-invalid' : '' }}" placeholder="alamat"
                            value="{{ old('alamat') }}">
                        @if ($errors->has('alamat'))
                            <span class="text-danger small">
                                <p>{{ $errors->first('alamat') }}</p>
                            </span>
                        @endif
                    </div>
                    <input type="submit" value="Simpan" class="btn btn-primary">
                </form>

            </div>
        </div>
    </div>
</body>

</html>
