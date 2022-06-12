<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <script src="//code.jquery.com/jquery-3.4.1.min.js"></script>
  
    <script>
        function check_id(){
            var userid = document.getElementById("uid").value;
            if(userid) {
		        url = "member_check_id.php?userid="+userid;
		        window.open(url,"IDchk","width=400,height=200");
	        } else 
		        alert("Enter The ID of the User");
	        
        }
        function check_pw(){
            var pw1 = document.getElementById("pw1").value;
            var pw2 = document.getElementById("pw2").value;
            if(pw1!=pw2)
            {
               alert("Passwords are not same");
               return false;
            }
           
            return true;
        }
    </script>
</head>
<body>
    <header>
        <?php include("../header.php");?>
    </header>
    <div class="container">
        <h2>Registration</h2>
        <br>
        <br>

        <div class="card bg-light shadow-lg " style="text-align: center">
            <article class="card-body mx-auto" style="max-width: 400px;">
            <h4 class="card-title mt-3 text-center">Create Account</h4>
            <hr>
            <br>
            <form name="bform" action="member_insert.php" method="POST">

            <div class="form-group input-group">
                <div class="input-group-prepend"> </div>
                <input class="form-control" type="text" name="id" id="uid" placeholder="Username" required autofocus> <input type="button" class=" btn btn-primary form-control"  value="Check Username" onclick=
                "check_id()">           
                </div> <!-- form-group// -->

            <div class="form-group input-group">
                <div class="input-group-prepend"> </div>
                <input class="form-control" type="text" name="name" placeholder="Name"  required>  
                
                
            </div> <!-- form-group// -->

            <div class="form-group input-group">
                <div class="input-group-prepend">   
                </div>
                <input class="form-control" type="email" name="email" id="" placeholder="Email">
            </div> <!-- form-group// -->
        
            <div class="form-group input-group">
                <div class="input-group-prepend">
                </div>
                <input class="form-control" type="password" name="pass" id="pw1" placeholder="Password" required>
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                </div>
                <input class="form-control" type="password" name="pass_confirm" id="pw2" placeholder="Password Confirm" required>
            </div> <!-- form-group// -->                                      
            <div class="form-group">
                <br>
                <input class="btn  btn-block btn-danger " style="border-radius: 50px;" type="submit" value="Create Account" onclick="check_pw()">
            </div> <!-- form-group// -->   
            <br>   
            <p class="text-center">If you have an account you can <a href="login_form.php">Log In</a> to your page </p>                                                                 
        

            </article>
        </div>
        
            
    </div>
</body>
</html>