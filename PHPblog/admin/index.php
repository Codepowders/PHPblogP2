<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   

    <title>Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet">

   

    <!-- Custom styles for this template -->
    <link href="../css/dashboard.css" rel="stylesheet">

    
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Blog</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php">Dashboard</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
          
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="index.php">Dashboard <span class="sr-only">(current)</span></a></li>
            <li><a href="posts.php">posts</a></li>
            <li><a href="comments.php">Comments</a></li>
            <li><a href="categories.php">Categories</a></li>
          </ul>
          
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Dashboard</h1>

         

          <h2 class="sub-header">Recent Posts</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Date Posted</th>
                  <th>Title</th>
                  <th>Author</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                
                <tr>
                  <td>1,013</td>
                  <td>torquent</td>
                  <td>per</td>
                  <td><a href="#" class="btn btn-warning">Edit</a>    <a href="#" class="btn btn-danger">Delete</a></td>
                 
                </tr>
                <tr>
                  <td>1,014</td>
                  <td>per</td>
                  <td>inceptos</td>
                  <td><a href="#" class="btn btn-warning">Edit</a>    <a href="#" class="btn btn-danger">Delete</a></td>
                 
                </tr>
                <tr>
                  <td>1,015</td>
                  <td>sodales</td>
                  <td>ligula</td>
                 <td><a href="#" class="btn btn-warning">Edit</a>    <a href="#" class="btn btn-danger">Delete</a></td>
                 
                </tr>
              </tbody>
            </table>
            
            
              <h2 class="sub-header">Recent Comments</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Comment</th>
                  
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                
                <tr>
                  <td>1,013</td>
                  
                  <td>per</td>
                  <td><a href="#" class="btn btn-success">Approve</a>    <a href="#" class="btn btn-danger">Delete</a></td>
                 
                </tr>
                <tr>
                  <td>1,014</td>
                  <td>per</td>
                 
                <td><a href="#" class="btn btn-success">Approve</a>    <a href="#" class="btn btn-danger">Delete</a></td>
                 
                 
                </tr>
                <tr>
                  <td>1,015</td>
                  <td>sodales</td>
               
                 <td><a href="#" class="btn btn-success">Approve</a>    <a href="#" class="btn btn-danger">Delete</a></td>
                 
                 
                </tr>
              </tbody>
            </table>
            
            <h2 class="sub-header">Recent Categories</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Title</th>
                  
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                
                <tr>
                  <td>1,013</td>
                  <td>torquent</td>
               
                  <td><a href="#" class="btn btn-warning">Edit</a>    <a href="#" class="btn btn-danger">Delete</a></td>
                 
                </tr>
                <tr>
                  <td>1,014</td>
                  <td>per</td>
                 
                  <td><a href="#" class="btn btn-warning">Edit</a>    <a href="#" class="btn btn-danger">Delete</a></td>
                 
                </tr>
                <tr>
                  <td>1,015</td>
                  <td>sodales</td>
                
                 <td><a href="#" class="btn btn-warning">Edit</a>    <a href="#" class="btn btn-danger">Delete</a></td>
                 
                </tr>
              </tbody>
            </table>
            
            
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   
    <script src="js/bootstrap.js"></script>
   
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>