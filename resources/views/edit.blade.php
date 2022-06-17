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
@if($message = Session::get('success'))
<div class="row">
	<div class="col-12">
		<div class="alert alert-danger alert-dismissible fade show" role="alert">
		  <strong>{{$message}}!</strong>

		</div>
	</div>
</div>
@endif
<form action="{{ Route('update', $user->id) }}" method="POST" enctype="multipart/form-data">
   @csrf
  @method('patch')
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $user->name }}" >
               @error('name')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
               @enderror
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                <input type="text" name="email" class="form-control" placeholder="Email" value="{{ $user->email }}">
                @error('email')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>
        </div>  

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>number:</strong>
                <input type="bigInteger" name="number" class="form-control" placeholder="number" value="{{ $user->number }}">
                @error('number')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>
        </div>  
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>DOB:</strong>
                <input type="date" name="DOB" class="form-control" placeholder="DOB" value="{{ $user->DOB }}">
                @error('DOB')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>
        </div>  

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>adhar:</strong>
                <input type="bigInteger" name="adhar" class="form-control" placeholder="adhar" value="{{ $user->adhar }}">
                @error('adhar')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>
        </div>  

        <div class="form-group" {{ $errors->has('gender') ? 'has-error' : ''}}>
                                        <label> Gender </label>
                                        <select class="form-control text-capitalize" name="gender" value="{{ old('gender') }}">
                                            <option value="{{ $user->gender }}"> {{ $user->gender }} </option>

                                            @if($user->gender == "male")
                                               <option value="female"> Female </option>
                                            @else
                                                <option value="male"> Male </option>
                                            @endif
                                        </select>
                                        {!! $errors->first('gender', '<small class="text-danger">:message </small>') !!}
                                    </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Post Image:</strong>
                 <input type="file" name="profile_photo" class="form-control" placeholder="your profile" value="{{ $user->profile_photo }}">
                @error('profile_photo')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
               @enderror
            </div>
            <div class="form-group">

<img src="{{ Storage::url($user->profile_photo)}}" height="200" width="200" alt="" />


</div>
        </div>
        <button type="submit" class="btn btn-primary ml-3">Submit</button>
    </div>
   
</form>

</body>
</html>