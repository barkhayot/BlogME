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
<link rel="stylesheet" href="../css/table.css">
</head>
<body>
    <header>
    <?php include("../header.php");?>
    </header>
 
<div class="container">

    <h2> Dashboard Of <?=$userid?> </h2>
    <br>
    <br>

    <table class="table">
  <thead class="table table-striped bg-danger" id='dash-table'>
    <tr>
      <th scope="col"></th>
      <th scope="col">Title</th>
      <th scope="col">Author</th>
      <th scope="col">Date</th>
      <th scope="col">More</th>
    </tr>
  </thead>

    
    <?php
	if (isset($_GET["page"]))
		$page = $_GET["page"];
	else
		$page = 1;

	$con = mysqli_connect("localhost", "root", "", "blog-db");
	$sql = "select * from blog where author_id='$userid' order by num desc";
	$result = mysqli_query($con, $sql);
	$total_record = mysqli_num_rows($result); // 전체 글 수

	$scale = 4;

	// 전체 페이지 수($total_page) 계산 
	if ($total_record % $scale == 0)     
		$total_page = floor($total_record/$scale);      
	else
		$total_page = floor($total_record/$scale) + 1; 
 
	// 표시할 페이지($page)에 따라 $start 계산  
	$start = ($page - 1) * $scale;      

	$number = $total_record - $start;

   for ($i=$start; $i<$start+$scale && $i < $total_record; $i++)
   {
      mysqli_data_seek($result, $i);
      // 가져올 레코드로 위치(포인터) 이동
      $row = mysqli_fetch_array($result);
      // 하나의 레코드 가져오기
      $count = 0;
	  $num         = $row["num"];
	  $author      = $row["author_id"];
      $subject     = $row["subject"];
      $content      = $row["content"];
      $pic         = $row["pic_ad"];
      $regist_day  = $row["regist_day"];
?>


  <tbody id="table-body">
  <tr>
      <td></td>
      <td><?=$subject?></td>
      <td>@<?=$userid?></td>
      <td><?=$regist_day?></td>
      <td><a id="btn-main" class="btn"  href="GetBlogById.php?num=<?=$num?>&page=<?=$page?>">Read more →</a></td>
    </tr>
  



<?php
   	   $number--;
    }
   mysqli_close($con);

?>
</tbody>
</table>
                    
	    	</ul>
			<div class="boardPagination">
<?php
	if ($total_page>=2 && $page >= 2)	
	{
		$new_page = $page-1;
		echo "<a class='btn btn-danger btn-lg' href='Dashboard.php?page=$new_page''>◀ Prev</a> ";
	}		
	else 
		echo "<li>&nbsp;</li>";

   	for ($i=1; $i<=$total_page; $i++)
   	{
		if ($page == $i)     
		{
            echo "<span class='btn btn-lg' style='border: 2px solid black'> $i </span>";
		}
		else
		{
			echo " <a class='btn btn-danger btn-lg' href='Dashboard.php?page=$i'> $i </a>";
		}
   	}
   	if ($total_page>=2 && $page != $total_page)		
   	{
		$new_page = $page+1;	
		echo " <a class='btn btn-danger btn-lg' href='Dashboard.php?page=$new_page''>Next ▶</a> ";
	}
	else 
		echo "<li>&nbsp;</li>";
?>

<br>
<br>


</body>

    <footer class="pt-4 my-md-5 pt-md-5 border-top">
      <p style="text-align: center;">Footer 2022</p>
  </footer>
      
    
</html>
