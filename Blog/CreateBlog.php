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



<script language="JavaScript">
    function validateForm() {
    let x = document.forms["bform"]["subject"].value;
    if (x == "") {
        alert("Title must be filled out");
    return false;
  }
  let y = document.forms["bform"]["content"].value;
    if (y == "") {
        alert("Content must be filled out");
    return false;
  }
  let z = document.forms["bform"]["pic"].value;
    if (z == "") {
        alert("Please enter the URL of image");
    return false;
  }
}
	
</script>

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
        <form name="bform" action="post_insert.php?send_id=<?=$userid?>" method="post" onsubmit="return validateForm()">
        <input type="hidden" name="btable" value="qna">
        <input type="hidden" name="bno" value="">
        <input type="hidden" name="del_no">
        <input type="hidden" name="p" value="">
        <input type="hidden" name="lcate" value="">	
                  <!-- Featured blog post-->
                  <div class="card mb-4">
                    <h3 id="blog-title">Please fill the boxes to create your blog</h3>
                  <div class="card-body">
                          <input type="text" name="subject" id="title" class="form-control" placeholder="Title" style="font-size: 22px;">
                          <br>
                          <textarea name="content" id="comment" cols="30" rows="10" class="form-control" placeholder="Enter the Content of the Blog" style="font-size: 22px;"></textarea>
                          <br>
                          <input type="text" name="pic" id="img" placeholder="Link of Image" style="font-size: 22px;" class="form-control">
                          <br>
                          <input class="btn btn-lg btn-danger" type="submit" value="Submit">
</form>
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
</div>
    
    
    </body>

    <footer class="pt-4 my-md-5 pt-md-5 border-top">
      <p style="text-align: center;">Footer 2022</p>
  </footer>
      
    
</html>


                
