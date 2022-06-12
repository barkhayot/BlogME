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


<h3>Username Check</h3>
<p> 
<?php 
    $id = $_GET["userid"]; 					

    $con = mysqli_connect("localhost", "root", "", "blog-db"); 
    $sql = "select * from members where id='$id'";  
    $result = mysqli_query($con, $sql);  
    $num_record = mysqli_num_rows($result); 
    if ($num_record) 						
    {
        echo "<li> <span style='font-weight: bold;'>".$id. "</span> username has been taken.</li>";   
        echo "<li>Please chose different Username!</li>";
    }      
    else
    {
        echo "<li> <span style='font-weight: bold;'>" .$id." </span> username is Available to use!</li>";  
    } 
    mysqli_close($con);
?>
</p> 
</div>

</body>
</html>