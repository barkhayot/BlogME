<?php
    $num = $_GET["num"];
    $page = $_GET["page"];

    $subject = $_POST["subject"];
    $content = $_POST["content"];
    $pic_ad = $_POST["pic_ad"];
          
    $con = mysqli_connect("localhost", "root", "", "blog-db");
    $sql = "update blog set subject='$subject', content='$content', pic_ad='$pic_ad' ";
    $sql .= " where num=$num";
    mysqli_query($con, $sql);

    mysqli_close($con);     

    echo "
	      <script>
	          location.href = 'GetBlogs.php?page=$page';
	      </script>
	  ";
?>