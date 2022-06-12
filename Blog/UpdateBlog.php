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

    <script src="//code.jquery.com/jquery-3.4.1.min.js"></script>
<script>
  function check_input() {
      if (!document.board_form.subject.value)
      {
          alert("제목을 입력하세요!");
          document.board_form.subject.focus();
          return;
      }
      if (!document.board_form.content.value)
      {
          alert("내용을 입력하세요!");    
          document.board_form.content.focus();
          return;
      }
      document.board_form.submit();
   }
</script>
</head>
<<body>
    <header>
    <?php include("../header.php");?>
    </header>

<?php
	$num  = $_GET["num"];
	$page = $_GET["page"];
	
	$con = mysqli_connect("localhost", "root", "", "blog-db");
	$sql = "select * from blog where num=$num";
	$result = mysqli_query($con, $sql);
	$row = mysqli_fetch_array($result);
	$author       = $row["author_id"];
	$subject    = $row["subject"];
	$content    = $row["content"];		
	$pic_ad  = $row["pic_ad"];
?>
 
<div class="container">
    <h2>Create Blog</h2>
    <br>
    <br>
    <div  class="row">
    <div class="col-lg-8">
    <form  name="board_form" method="post" action="update_insert.php?num=<?=$num?>&page=<?=$page?>" enctype="multipart/form-data">
        <input type="hidden" name="btable" value="qna">
        <input type="hidden" name="bno" value="">
        <input type="hidden" name="del_no">
        <input type="hidden" name="p" value="">
        <input type="hidden" name="lcate" value="">	
  

        <div class="card mb-4">
                    <h3 id="blog-title">Updaye Blog Form</h3>
                  <div class="card-body">
                          <input type="text" name="subject" value="<?=$subject?>" id="title" class="form-control" placeholder="Title" style="font-size: 22px;">
                          <br>
                          <textarea name="content" id="comment" cols="30" rows="10" class="form-control" placeholder="Enter the Content of the Blog" style="font-size: 22px;"><?=$content?></textarea>
                          <br>
                          <input type="text" name="pic_ad" value="<?=$pic_ad?>" id="img" placeholder="Link of Image" style="font-size: 22px;" class="form-control">
                          <br>
                          <button class="btn btn-lg btn-danger" type="submit">Submit</button>
    </form>
    </div>
                  </div>
    </div>
	
                
    </body>

    <footer class="pt-4 my-md-5 pt-md-5 border-top">
      <p style="text-align: center;">Footer 2022</p>
  </footer>
      
    
</html>
