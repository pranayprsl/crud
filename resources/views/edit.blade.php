<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Blog Post Form - Laravel 9 CRUD Tutorial</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>

<div class="container mt-2">
  
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left mb-2">
            <h2>Add New Post</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="/"> Back</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ Route('update', $user->id) }}" method="POST" enctype="multipart/form-data">
   @csrf
  @method('patch')
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name">
               @error('name')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
               @enderror
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                <input type="text" name="email" class="form-control" placeholder="Email">
                @error('email')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>
        </div>  

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>number:</strong>
                <input type="bigInteger" name="number" class="form-control" placeholder="number">
                @error('number')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>
        </div>  
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>DOB:</strong>
                <input type="date" name="DOB" class="form-control" placeholder="DOB">
                @error('DOB')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>
        </div>  

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>adhar:</strong>
                <input type="bigInteger" name="adhar" class="form-control" placeholder="adhar">
                @error('adhar')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>
        </div>  

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>gender:</strong><br>
                <input type="radio" id="male" name="gender" value="male">
                <label for="html">Male</label>  &nbsp;&nbsp;&nbsp;
                <input type="radio" id="female" name="gender" value="female">
                <label for="html">Female</label>&nbsp;&nbsp;
                <input type="radio" id="html" name="gender" value="other">
                <label for="html">Other</label>
  
                @error('gender')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>
        </div>  
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Post Image:</strong>
                 <input type="file" name="profile_photo" class="form-control" placeholder="your profile">
                @error('profile_photo')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
               @enderror
            </div>
        </div>
        <button type="submit" class="btn btn-primary ml-3">Submit</button>
    </div>
   
</form>

</body>
</html>