
            <nav class="navbar navbar-expand-lg navbar-dark">
                <a href="../index.php" class="navbar-brand"><h3>BlogMe</h3></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                      <?php session_start();
                        if(!isset($_SESSION['userid'])) { ?>
                            <li class="nav-item active"><a id='mover' class="nav-link" href="/Auth/login_form.php" >Login</a></li>
                            <li class="nav-item active"><a id='mover' class="nav-link" href="/Auth/member_form.php" >Register</a></li>

                        <?php } 
                        else {  
                            $userid = $_SESSION["userid"]; ?> 
                            <li class="nav-item active">
                                <a id='mover' class="nav-link" href="/Blog/CreateBlog.php">
                                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                </svg>
                                Post Blog</a>
                            </li>
                            <li class="nav-item active"><a id='mover' class="nav-link" href="/Blog/GetBlogs.php">All Blogs</a></li>
                            <li class="nav-item active"><a id='mover' class="nav-link" href="/Blog/Dashboard.php">Dashboard</a></li>
                            <li class="nav-item active"><a id='mover' class="nav-link" href="/Auth/logout.php" >Logout</a></li>

                            <?php } ?>
                    
                    
                    
                  </ul>
                </div>
            </nav>
            <br>
