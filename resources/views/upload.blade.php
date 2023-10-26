<!DOCTYPE html>
<html>

<head>
    <title>Upload File Dengan Laravel 10</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
        rel="stylesheet">
</head>

<body>
    <div class="row">
        <div class="container">
            <h2 class="text-center">Upload File Dengan Laravel 10</h2>
            <div class="col-lg-8 mx-auto my-5">
                {{-- peringatan jika error --}}
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible">
                        <a href="#" class="close text-decoration-none" data-dismiss="alert" aria-label="close">&times;</a>
                        {{session('success')}}
                    </div>
                @endif
                @if (session('error'))
                    <div class="alert alert-danger alert-dismissible">
                        <a href="#" class="close text-decoration-none" data-dismiss="alert" aria-label="close">&times;</a>
                        {{session('error')}}
                    </div>
                @endif
                <form action="{{ route('upload.resize') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <b>File Gambar</b><br>
                        <input type="file" name="file">
                    </div>
                    <div class="form-group">
                        <b>Keterangan</b>
                        <textarea class="form-control" name="keterangan" id="keterangan" cols="30" rows="10"></textarea>
                    </div>
                    <input type="submit" value="Upload" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
</body>

</html>
