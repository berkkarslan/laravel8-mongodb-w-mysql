<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Brand Page</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
  </head>
  <body>
    <div class="container">
     
    <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
     <div class="text-right">
        <a class="btn btn-success " href="brand/add" >Add</a>

      </div>
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Country</th>
        
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($brands as $brand)
      <tr>
        <td>{{$brand->id}}</td>
        <td>{{$brand->name}}</td>
        <td>{{$brand->country}}</td>
        
        <td><a href="brand/edit/{{$brand->id}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="brand/delete/{{$brand->id}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  </body>
</html>