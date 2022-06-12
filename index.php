<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlogMe </title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="css/navbar.css">
<link rel="stylesheet" href="css/image.css">

</head>




<body>
    <header>
    <?php include("header.php");?>
    </header>
        <div class="container">
          <div id="row" class="row" >
              <div class="col text-center" >
                  <img class="main" src="./img/4782178.jpg" alt="">
              
              </div>
          </div>
              
          
          <h2>Let's create great content together</h2>
          <br>
          <br>
              
          <div id='row' class="row" >
            <div class="col-md">
                <img id="second-img"  src="./img/3024038.jpg" alt="">
            </div>
            <div class="col-md">
                <div class="drive" >
                <h4>Do you have anything to share with the world?</h4>
                <p>Tell your story with others. BlogMe platform is for you!</p>
                <button id="btn-main" class="btn btn-block btn-lg" > Create your Story</button>
                <br>
                <br>  
              </div>
            </div>
            <hr>
            <br>
            <br>
            <h2>Latest Posts</h2>
            <br>
            <br>
            <br>

          
            <div class="row">
              <!-- Blog entries-->
              <div class="col-lg-8">
                  <!-- Featured blog post-->
                  <div class="card mb-4">
                      <a href="#!"><img class="card-img-top" id="index-img" src="./img/teamwork-making-online-blog.jpg" alt="..." /></a>
                      <div class="card-body">
                          <div class="small text-muted">23 May 2022</div>
                          <h3 class="card-title">Story about the logic of Computer Sience</h2>
                          <p class="card-text" style="font-size: 14px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                          <a id="btn-main" class="btn"  href="#!">Read more →</a>
                      </div>
                  </div>

                  <div class="card mb-4">
                    <a href="#!"><img class="card-img-top" id="post-img"  src="./img/que-es-un-blog-1.webp" alt="..." /></a>
                    <div class="card-body">
                        <div class="small text-muted">23 May 2022</div>
                        <h3 class="card-title">Story about the logic of Computer Sience</h2>
                        <p class="card-text" style="font-size: 14px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                        <a class="btn" id="btn-main" href="#!">Read more →</a>
                    </div>
                </div>

                <div class="card mb-4">
                    <a href="#!"><img class="card-img-top" id="index-img" src="./img/11.-Knowing-A-Brief-Explanation-of-The-Artificial-Intelligence-Industry-4.0.webp" alt="..." /></a>
                    <div class="card-body">
                        <div class="small text-muted">23 May 2022</div>
                        <h3 class="card-title">Story about the logic of Computer Sience</h2>
                        <p class="card-text" style="font-size: 14px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                        <a id="btn-main" class="btn"  href="#!">Read more →</a>
                    </div>
                </div>
                  
                  
                  
                  <!-- Pagination-->
                  <nav aria-label="Pagination">
                      <hr class="my-0" />
                      <ul class="pagination justify-content-center my-4">
                          <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Prev</a></li>
                          <li class="page-item"  aria-current="page"><a class="page-link" style="color:white; background-color:rgb(214, 79, 79)" href="#!">1</a></li>
                          <li class="page-item"><a class="page-link" href="#!">2</a></li>
                          <li class="page-item"><a class="page-link" href="#!">3</a></li>
                          <li class="page-item disabled"><a class="page-link" href="#!">...</a></li>
                          <li class="page-item"><a class="page-link" href="#!">15</a></li>
                          <li class="page-item"><a class="page-link" href="#!">Next</a></li>
                      </ul>
                  </nav>
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
                  
                  <!-- Side widget-->
                  <div class="card mb-4">
                      <div class="card-header" id="bg-main">Side Widget</div>
                      <div class="card-body">You can put anything you want inside of these side widgets. They are easy to use, and feature the card component!</div>
                  </div>
              </div>
          </div>
         
          </div>
              
        
        <br>

        <?php
    
include '/DB/db_connection.php';
$conn = OpenCon();
echo "Connected Successfully";
CloseCon($conn);
?>
    </body>
    <footer class="pt-4 my-md-5 pt-md-5 border-top">
      <p style="text-align: center;">Footer 2022</p>
  </footer>
      
    
</html>