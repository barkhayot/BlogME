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
<link rel="stylesheet" href="../css/image.css">
</head>
<body>
    <header>
    <?php include("../header.php");?>
    </header>
 
<div class="container">
    <h2>Create Blog</h2>
    <br>
    <br>
    <div  class="row">
    <div class="col-lg-8">
    <div class="card mb-4">
    <?php
	$num  = $_GET["num"];
	$page  = $_GET["page"];

	$con = mysqli_connect("localhost", "root", "", "blog-db");
	$sql = "select * from blog where num=$num";
	$result = mysqli_query($con, $sql);

	$row = mysqli_fetch_array($result);
	$num         = $row["num"];
	$author      = $row["author_id"];
    $subject     = $row["subject"];
    $content      = $row["content"];
    $pic         = $row["pic_ad"];
    $regist_day  = $row["regist_day"];

	
	mysqli_query($con, $sql);
?>
                      <a href="#!"><img class="center" style=" text-align: center;" src="<?=$pic?>" alt="..." /></a>
                      <div class="card-body">
                          <div class="small text-muted"><?=$regist_day?></div>
                          <h3 class="card-title"><?=$subject?></h2>
                          <p class="card-text" style="font-size: 14px;"><?=$content?></p>
                        </div>
                  </div>
    </div>
   


        <!-- Side widgets-->
        <div class="col-lg-4">
                  <!-- Search widget-->
                  <div class="card mb-4">
                      <div class="card-header" id="bg-main" >Search</div>
                      <div class="card-body">
                          <div class="input-group">
                              <input class="form-control" type="text" placeholder="Enter search term..." aria-label="Enter search term..." aria-describedby="button-search" />
                              <button class="btn" id="bg-main" type="button">Go!</button>
                          </div>
                      </div>
                  </div>
                  <!-- Categories widget-->
                  
                  <!-- Side widget-->
                  <div class="card mb-4">
                      <div class="card-header" id="bg-main">Side Widget</div>
                      <div class="card-body">You can put anything you want inside of these side widgets. They are easy to use, and feature the card component!</div>
                  </div>
         </div>
    </div>
    <?php  
                        if ($author == $userid) 			
                        {  
                            echo "<a href='UpdateBlog.php?num=$num&page=$page'class='btn btn-danger btn-lg'>Update</a>";
                            echo "<a class='btn btn-lg btn-danger' href='Delete_blog.php?num=$num&page=$page>'>Delete</a>";
                        }
                        else   
                            echo "<li>&nbsp;</li>";
                            ?>

</div>
    
    
    </body>

    <footer class="pt-4 my-md-5 pt-md-5 border-top">
      <p style="text-align: center;">Footer 2022</p>
  </footer>
      
    
</html>
