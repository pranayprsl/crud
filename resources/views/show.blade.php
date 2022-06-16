<!doctype html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.87.0">
    <title>Fixed top navbar example · Bootstrap v5.1</title>

    <!-- Bootstrap core CSS -->
    <link href="{!! url('assets/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .float-right {
        float: right;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="{!! url('assets/css/app.css') !!}" rel="stylesheet">
</head>
<body>
    <div class="bg-light p-4 rounded">
        <h1>Show user</h1>
        <div class="lead">
            
        </div>
        
        <div class="container mt-4">
            <div>
                Name: {{ $user->name }}
            </div>
            <div>
                Email:  {{ $user->email }}           </div>
            <div>
                Image: <img src="{{ Storage::url($user->profile_photo) }}" height="75" width="75" alt="" />
            </div>
        </div>

    </div>
    <div class="mt-4">
        <a href="{{ Route('edit',$user->id) }}" class="btn btn-info">Edit</a>
        <a href="/" class="btn btn-default">Back</a>
    </div>

    <script src="{!! url('assets/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>
      
      </body>
    </html>