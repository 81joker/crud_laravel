<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Crude Larvel</title>
</head>
<body>
    <div class="container mt-5">
<h3 class="text-danger text-center">Crud Laravel</h3>
<table class="table  table-bordered ">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Avatar</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Job</th>
        <th></th>

      </tr>
    </thead>
    <tbody>
      @foreach ($cruds as $crud)
      <tr>

        <td><img src="{{$crud->imag}}" alt="{{$crud->name}}" class="rounded-circle" width="50" height="50"></td>
        <td>{{$crud->name}}</td>
        <td>{{$crud->job}}</td>
        <td>{{$crud->email}}</td>
        <td>
            <i class="fas fa-address-edit"></i>

            <a href="{{route('crud.edit', $crud)}}" class="" rel="noopener noreferrer"> <i class="fa fa-edit btn btn-info btn-sm"></i></a>
            <a href="#" class="" rel="noopener noreferrer"><i class="fa  fa-xs fa-trash btn btn-danger btn-sm"></i></a>


           </td>
      </tr>
      @endforeach



    </tbody>
  </table>
  <a   href="{{route('crud.create')}}" class="btn btn-info">Add User</a>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
