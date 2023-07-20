<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Files</title>
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
      <div class="container">

          <table class="table mt-3">
              <tr>
            <th>#</th>
            <th>Name</th>
            <th>Description</th>
            <th>File</th>
            <th>Download</th>
            <th>Delete</th>
        </tr>
        @foreach ($data as $data )
        <tr>
            <td> {{$i++}} </td>
            <td> {{$data->name}} </td>
            <td>{{$data->description}}</td>
            <td>{{$data->file}}</td>
            <td><a href="{{url('/download',$data->file)}}" class="btn btn-info"> Download </a></td>
            <td><a href="{{url('/delete',$data->id)}}" class="btn btn-danger"> Delete </a></td>
        </tr>
        @endforeach
    </table>
</div>

</body>
</html>
