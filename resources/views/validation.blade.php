<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <h3 class="text-success p-4">Registration <a href="{{url('new_reg')}}" class="btn btn-primary float-right">Create a New Account</a></h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Sno</th>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile</th>
               
                
            </tr>
        </thead>
        <tbody>
            @foreach($regi as $key=>$val)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$val->name}}</td>
                <td>{{$val->email}}</td>
                <td>{{$val->mobile}}</td>
                
                
            </tr>
        </tbody>
        @endforeach
    </table>
    </div>
</body>
</html>