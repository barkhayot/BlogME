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

    <h2>Blogs List</h2>
    <br>
    <br>
    <?php
	if (isset($_GET["page"]))
		$page = $_GET["page"];
	else
		$page = 1;

	$con = mysqli_connect("localhost", "root", "", "blog-db");
	$sql = "select * from blog order by num desc";
	$result = mysqli_query($con, $sql);
	$total_record = mysqli_num_rows($result); // 전체 글 수

	$scale = 2;

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
	  $num         = $row["num"];
	  $author      = $row["author_id"];
      $subject     = $row["subject"];
      $content      = $row["content"];
      $pic         = $row["pic_ad"];
      $regist_day  = $row["regist_day"];
?>
    <div  class="row">
    <div class="col-lg-8">
    <div class="card mb-4">
		 <a href="#!"><img class="center" style=" text-align: center;" src="<?=$pic?>" /></a>
		 <br>
         <div class="card-body">
		 <div class="small text-muted"><span style="font-size: 14px;"> Created: <?=$regist_day?> | Author:</span> <span style="font-size: 14px; color:red">@<?=$author?> </span> </div>
		 <hr>
         <h3 class="card-title"><a href="GetBlogById.php?num=<?=$num?>&page=<?=$page?>"><?=$subject?></a></h2>
		 <br>
		 <p class="card-text" style="font-size: 14px;"><?=$content?></p>
         <a class="btn btn-lg btn-danger"  href="GetBlogById.php?num=<?=$num?>&page=<?=$page?>">Read more →</a>
      </div>
  </div>
    </div>
    </div>


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
		echo "<a class='btn btn-danger btn-lg' href='GetBlogs.php?page=$new_page''>◀ Prev</a> ";
	}		
	else 
		echo "<li>&nbsp;</li>";

   	// 게시판 목록 하단에 페이지 링크 번호 출력
   	for ($i=1; $i<=$total_page; $i++)
   	{
		if ($page == $i)     // 현재 페이지 번호 링크 안함
		{
            echo "<span class='btn btn-lg' style='border: 2px solid black'> $i </span>";
		}
		else
		{
			echo " <a class='btn btn-danger btn-lg' href='GetBlogs.php?page=$i'> $i </a>";
		}
   	}
   	if ($total_page>=2 && $page != $total_page)		
   	{
		$new_page = $page+1;	
		echo " <a class='btn btn-danger btn-lg' href='GetBlogs.php?page=$new_page''>Next ▶</a> ";
	}
	else 
		echo "<li>&nbsp;</li>";
?>

</body>

    <footer class="pt-4 my-md-5 pt-md-5 border-top">
      <p style="text-align: center;">Footer 2022</p>
  </footer>
      
    
</html>

