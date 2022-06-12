<meta charset='utf-8'> 
<?php 
    $send_id = $_GET["send_id"]; 						
    $subject = $_POST['subject']; 
    $content = $_POST['content']; 
    $pic = $_POST['pic'];
    $subject = htmlspecialchars($subject, ENT_QUOTES); 				
    $content = htmlspecialchars($content, ENT_QUOTES); 
    $regist_day = date("Y-m-d (H:i)"); 	 // 현재의 '연-월-일-시-분' 저장
    if (!$send_id) {							
        echo("   
            <script>    
                alert('로그인 후 이용해주세요! ');    
                history.go(-1)  
            </script>
            ");  
            exit; 
    }
    $con = mysqli_connect("localhost", "root", "", "blog-db"); 		
    $sql = "insert into blog(author_id, subject, content, pic_ad,     
            regist_day) ";   
    $sql .= "values('$send_id', '$subject', '$content', '$pic',     
            '$regist_day')";    
    mysqli_query($con, $sql);  // $sql에 저장된 명령 실행 
    
    mysqli_close($con);  // DB 연결 끊기	
    echo "  
        <script>   
            location.href = '../index.php'; 			
        </script> ";
?> 