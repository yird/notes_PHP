<html>
  <head>
    <title>Notes</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
  </head>
  <body>
    <div class="container"style="text-align:center;">
      <div class="page-header">
        <h1>Notes <small>by Yird</small></h1>
      </div>
      <div style="text-align:center">
      <form action="notes/create" method="post"class="navbar-form" >
          <input type="text" name="note" class="form-control">
          <input type="submit"value="Add"class="btn btn-success">
          <a class="btn btn-danger" href="notes/delete">Clear</a>
      </form>
    </div><br/>

      <div>
        @foreach($notes as $note)
        <a href="#" class="list-group-item">{{ $note->note }}</a>
        @endforeach
      </div>
   </div>
  </body>
</html>
