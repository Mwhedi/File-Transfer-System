<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload page</title>
</head>
<body>

    <div class="container mt-3">

        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
          <a class="navbar-brand" href="{{route('main_page')}}">Main Page</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('upload_page')}}">Upload File</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('filesuploaded')}}">Show Files</a>
                    </li>
                </ul>
            </div>
          </div>
        </div>
      </nav>


    <form action="{{route('uploadfile')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="container" >
            <br>
    <h1 class="text-primary">upload page</h1>
    <div class="form-floating mb-4">
        <input type="text" class="form-control" id="floatingInput" name="filename">
        <label for="floatingInput">File Name</label>
    </div>
    <div class="form-floating mb-4">
        <input type="text" class="form-control" name="description" id="floatingPassword">
        <label for="floatingPassword">File Descriptoin</label>
    </div>
    <div class="form-floating mb-4">
        <input type="file" class="form-control" name="file" id="floatingPassword">
        <label for="floatingPassword">Upload File</label>
    </div>
    <button type="submit" class="btn btn-primary">Upload</button>

</div>
</form>
</body>
</html>
