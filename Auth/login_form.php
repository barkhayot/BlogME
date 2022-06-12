<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlogMe </title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="../css/index.css">
<link rel="stylesheet" href="../css/navbar.css">
</head>

<body>
    <header>
    <?php include("../header.php");?>
    </header>
 
<div class="container">
    <h2>Login</h2>
    <br>
    <br>

    <div class="card bg-light" style="text-align: center;">
    <article class="card-body mx-auto" style="max-width: 400px;">
        <h4 class="card-title mt-3 text-center">Please Login</h4>
        <hr>
        <br>


      <form name="bform" id="login_form" action="login.php" method="post">
      <input type="hidden" name="btable" value="qna">
      <input type="hidden" name="bno" value="">
      <input type="hidden" name="del_no">
      <input type="hidden" name="p" value="">
      <input type="hidden" name="lcate" value="">	

      <div class="form-group input-group">
            <div class="input-group-prepend">
             </div>
             <input class="form-control" type="text" name="id" placeholder="Username" required>
        </div> 
    
        <div class="form-group input-group">
            <div class="input-group-prepend">
                
            </div>
            <input class="form-control" type="password" name="pass" id="" placeholder="Password" required>
        </div>                                   
        <div class="form-group">
            <br>
            <button type="submit" class="btn btn-block btn-danger" style="border-radius: 50px;"> Login  </button>
        </div>  
        <br>    
        <p class="text-center">If you dont have an account you can <a href="member_form.php">Create</a> it now </p>
    </article>
    </div>
</div>
</body>
</html>