<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="card col-10">
        <h1>

        </h1>
        <form  action="{{route('EditStudent',$Student->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="exampleFormControlInput1">name</label>
              <input type="text" value="{{$Student->name}}" class="form-control" name="name" id="exampleFormControlInput1" >
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">age</label>
                <input type="id" name= "age" value="{{$Student->age}}" class="form-control" id="exampleFormControlInput1">
              </div>
              <div class="form-group">
<<<<<<< HEAD
                <label for="exampleFormControlInput1">Email</label>
                <input type="email" class="form-control" value="{{$Student->email}}" name="email" id="exampleFormControlInput1" >
              </div>

=======
                <label for="exampleFormControlInput1">image</label>
                <input type="file" class="form-control" name="image" id="exampleFormControlInput1" style="width:20;" class="img-float" >
              </div>
            <div class="form-group">
>>>>>>> 388881b582000dca1a6dae867bfccf88a7ac1ef3

            <div class="form-group">
              <label for="exampleFormControlTextarea1">Qualification</label>
              <input class="form-control" type="text" value ="{{$Student->qualification}}" name="qualification" id="exampleFormControlTextarea1" rows="3">
            </div>
            <button type="submit" class="btn btn-primary">update student</button>
          </form>
    </div>

</body>
</html>
