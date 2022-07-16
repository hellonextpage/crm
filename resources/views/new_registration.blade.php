<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
    <script type="text/javascript" src="{{asset('js/own_script.js') }}"></script>
</head>
<body>
    <div class="container">
    <h3 class="text-success p-4">Enter Details <a href="{{url('/')}}" class="btn btn-primary float-right">Back</a></h3>
    
    <form action="{{url('new_validation')}}" method="post" enctype="multipart/form-data">
        @csrf 
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="name" class="form-control" value="{{old('name')}}" onkeypress="return isAlfa(event)">
            <span class="text-danger">{{$errors->first('name')}}</span>
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="email" name="email" class="form-control" value="{{old('email')}}">
            <span class="text-danger">{{$errors->first('email')}}</span>
        </div>
        <div class="form-group">
            <label for="">Password</label>
            <input type="password" name="password" class="form-control" value="{{old('password')}}">
            <span class="text-danger">{{$errors->first('password')}}</span>
        </div>
        <div class="form-group">
            <label for="">Mobile</label>
            <input type="text" name="mobile" class="form-control" value="{{old('mobile')}}" onkeypress="return isNumber(event)">
            <span class="text-danger">{{$errors->first('mobile')}}</span>
        </div>
        <div class="form-group">
            <label for="">Address</label>
            <input type="text" name="address" class="form-control" value="{{old('address')}}">
            <span class="text-danger">{{$errors->first('address')}}</span>
        </div>
        <div class="form-group">
            <label for="">Image</label>
            <input type="file" name="image" class="form-control" value="{{old('image')}}">
            <span class="text-danger">{{$errors->first('image')}}</span>
        </div>

        <div class="form-group">
            <button type="submit"class="btn  btn-primary">Submit</button>
        </div>

        </div>
    </form>
</body>
</html>