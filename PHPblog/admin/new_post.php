<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
   
   
   <?php 
   include("includes/header.php");
   
   
   ?>
   
   
      <?php 
   include("includes/sidebar.php");
   
   
   ?>

    

    
          <h1 class="page-header">Add new post</h1>

    

          <div class="table-responsive">
              
              
              
              <form method="POST">
            
            
            <div class="form-group">
            <label>
                
                Post Title:
                
            </label>    
            
            <input class="form-control" type="text" name="title">
            </div>
            
            
            <div class="form-group">
            <label>
                
                Post Author:
                
            </label>    
            
            <input class="form-control" type="text" name="author">
            </div>
            
            <div class="form-group">
            <label>
                
                Post Category:
                
            </label>    
            
            <select name="category">
                <option>PHP</option>
                <option>JAVA</option>
                <option>CSS</option>
            </select>
            </div>
            
            
            
               <div class="form-group">
            <label>
                
                Post Body:
                
            </label>    
            
            <textarea name="body" class="form-control"></textarea>
            </div>
            
            
            
            
            
               <div class="form-group">
            <label>
                
                Post Keywords:
                
            </label>    
            
            <input class="form-control" type="text" name="Keywords">
            </div>
            
            
            <button type="submit" name="add_post" class="btn btn-default">Add post</button>
            
            </form>
            
              
            
            
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