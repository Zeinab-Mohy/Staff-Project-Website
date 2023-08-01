<!DOCTYPE html>
<html lang="English">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FCAI_Staff_Portal</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/all.min.css"> 
    <link rel="stylesheet" href="../css/search_form.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/clear&grean.css">
</head>

<body>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/all.min.js"></script>
  
        <nav class="navbar navbar-expand-lg sticky-top ">
            <div class="container">
                <p class="l">Sadat Unvirsity Staff</p>
                <a class="logo" href="#" style="padding:5px;">
                    <img src="../img/usc.png" alt="logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main"
                    aria-controls="main" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa-solid fa-bars" style="color: white;"></i>
                </button>
                <div class="collapse navbar-collapse" id="main">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link p-2 p-lg-3 " href="index.php" target="_blank">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link p-2 p-lg-3 " href="#s">SEARCH</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link p-2 p-lg-3" href=#f>CONTACT </a>
                        </li>
                        
                    </ul>
                    <a class="btn btn-primary rounded-pill main-btn" id="login" href="login.php">LOGIN</a>
                    <a class="btn btn-primary rounded-pill main-btn" style="position: relative;left: 30px;" id="signup"
                        href="signup.php">SIGN UP</a>
                </div>
            </div>
           
        </nav>
        <script>
            let subMenu = document.getElementById("subMenu");
            function toggleMenu(){
                subMenu.classList.toggle("open-menu");
            }
        </script>


    <div class="landing"> 
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner"  >
              <div class="carousel-item active">
                <img src=" ../img/University2.jpg" class="d-block w-100" alt="..." style="height: 550px; width: 80%;" >
              </div>
              <div class="carousel-item">
                <img src="../img/usc1.jpg" class="d-block w-100" alt="..." style="height: 550px; width: 80%;" >
              </div>
              <!-- <div class="carousel-item">
                <img src="img/FCAI2.jpg" class="d-block w-100" alt="..." style="height: 550px; width: 80%;" >      
            </div> -->
            
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
       </div>




    <div class="features text-center pt-5">
        <div class="container">
           

<div class="row" style=" margin-top: 12px;" id="s">           
    <div class="container-form" >
        <div class="main-titel position-relative ">
            <i class="fa-sharp fa-solid fa-magnifying-glass" style="color: #070D59;  height: 80px; margin-bottom:10px;"></i>
        <br>
        </div>
        <form action="../Controller/search.php" method="POST">
            <div class="search-bar">
                 
                            <div class="input-box">
                                 <label class="details">Search by First name.</label>
                                <input type="text" name="search" placeholder="Search...">
                            </div>
                            <div class="input-box">
                            <label class="details">Search by Faculty.</label>
                             <select id="faculty" name="faculty" placeholder="faculty...">
                                        <option value="select" > Filter</option>
                                        <option value="FCAI">Faculty of Computer Science and Artificial Intelligence </option>
                                        <option value="FOP">Faculty of Pharmacy</option>
                                        <option value="VET">Faculty of Veterinary Medicine</option>
                                        <option value="LAW">Faculty of Law</option>
                                        <option value="COM">Faculty of Commerce</option>
                                        <option value="PHED">Faculty of Physical Education</option>
                                        <option value="FCH">Faculty of Childhood Education</option>
                                        <option value="EDU">Faculty of Education </option>
                                        <option value="FTH">Faculty of Tourism and Hotels</option>
                                        <option value="ESRI">Environmental Studies and Research Institute</option>
                                        <option value="GEPRI">Genetic Engineering and Biotechnology Research Institute</option>
                                    </select>       
                            </div>
                <button  class ="input-box"type="submit">Search</button>
            </div>
        
                </div>
            </form>
        </div>
    </div> 
     <br>
</div>
    </div>
        </div>
    <br>
    <br>

    
    <!-- <div class="our-team text-center pb-5 pt-5">
        <div class="container">
            <div class="main-titel position-relative ">
                
                <i class="fa-sharp fa-solid fa-building-columns" style="color: #070D59;  height: 80px;"></i>
                <h3 style="color: #070D59;" id="ourteam">University Figures" </h3>
                <br>
            </div>
            <br>
            <p class="text-center mb-5" style="color: #070D59; font-size: 20px; ">Persons with a position or influence on USC or FCAI community</p>
            <div class="row" style="color: white;">
                <div class="col-md-6 col-lg-3">
                   
                    <div class="card" style="width: 18rem; height: 450px">
                        <img src="img/ibrahem3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="" style="text-decoration: none;">
                               <h4 class="p-2 text-light">Deen.Ibrahiem Selim</h4>
                            </a>
                            <p class="card-text" style="color: black;">Doctor and Professor Ibrahiem Selim the deen of Faculty of Computer and Artificial Inteligentce Univercity of Sadat city</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
               
                    <div class="card" style="width: 18rem;">
                        <img src="img/DR.shaden.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="" style="text-decoration: none; ">
                                <h4 class="p-2 text-light">Dr.Shaden Moaoya</h4>
                            </a>
                            <p class="card-text" style="color: black;">The current President of Univercity of Sadat city , the Former Vice Presidentof of University of Sadat City  for Postgraduate Studies and Scientific Research. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <div class="donate pt-4 pb-4 text-center text-md-start">
       

<!-- chatbot -->

<div class="container">
        <div class="chatbox">
            <div class="chatbox__support">
                <div class="chatbox__header">
                    <div class="chatbox__image--header">
                        <img src="../img/chatbot (1).svg " style="height: 50px; width: 50px;" />
                    </div>
                    <div class="chatbox__content--header">
                        <h5 class="chatbox__heading--header" >Chat support</h5>
                        <p class="chatbox__description--header">Hi. How can I help you?</p>
                    </div>
                </div>

                <div class="chatbox__messages">
                    <div></div>
                </div>
                <div class="chatbox__footer">
                    <input id="textInput" type="text" placeholder="Write a message...">
                    <button class="chatbox__send--footer send__button"><img src="../img/send-svgrepo-com (2).svg"
                            style="height: 50px; width: 50px;" /> </button>
                </div>
            </div>
            <div class="chatbox__button">
                <button><img src="../img/chatbot.svg" style="height: 50px; width: 50px;" /></button>
            </div>
        </div>
    </div>
    




    </div>
    <div class="footer pt-5 pb-5 text-center text-white-50 text-md-start">
        <div class="container" id="f">
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="info ">
                        <img src="../img/usc.png" alt="" class="mb-5">
                        <p class="mb-4">
                            Colledge Sight                                                                 
                        </p>
                        <p class="mb-4">
                            Sadat City University is committed to preparing a graduate who meets the needs of the local labor market, through educational, research and community services that encourage innovation and excellence within the framework of continuous development.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2">
                    <div class="links ">
                        <h3 class="text-white">Links</h3>
                        <div class="list pt-4">
                         
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="list-style-type:disc;">
                                <li class="nav-item">
                                    <a class="nav-link py-lg-1 " href="#">HOME</a>
                                </li>
                                
                                <li class="nav-item">
                                    <a class="nav-link py-lg-1" href="#s">SEARCH</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link py-lg-1" href="#f">CONTACT</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 col-lg-2">
                            <div class="Aboutus">
                                <h3 class="text-white">Created By</h3>
                                <div class="list pt-4">
                                    <div class="copyright">
                            <span>EtoZ Team</span><br>
                                    <span>Zeinab Mohy Tohamy</span><br>
                                        <span>Eman Mostafa Elsayed</span><br>
                                       <span>Rawan Elsayed Elgebaly</span><br>
                                                              
                            <div>&copy;2023 - <span>EtoZ</span></div>
                                </div>
                                </div>
                            </div>
                        </div>




                <div class="col-md-6 col-lg-4">
                    <div class="ContactUs">
                        <h3 class="text-white">Contact Us :</h5>
                            <h6>Watsap Numbers :</h6>
                            <p class="my-2">+021025972355</p>
                            <p class="my-2">+021025972355</p>
                            <h6>Hot Line</h6>
                            <p class="my-2">19011</p>
                            <a class="btn btn-primary rounded-pill main-btn w-100" id="email" href="https://usc.edu.eg/"
                                style="color:white ;">USC Website</a>
                            <ul class="d-flex mt-5 list-unstyled gap-4">
                                <a class="d-block text-light" href="https://www.facebook.com/usc.edu.eg/">
                                    <i class="fa-brands fa-facebook fa-lg facebook rounded-circle p-2"></i>
                                </a>
                                <a class="d-block text-light" href="https://twitter.com/Univ_SadatCity">
                                    <i class="fa-brands fa-twitter fa-lg twitter rounded-circle p-2"></i>
                                </a>
                                
                                <a class="d-block text-light" href="https://www.youtube.com/user/UniversityOfSadat">
                                    <i class="fa-brands fa-youtube fa-lg youtube rounded-circle p-2"></i>
                                </a>
                            </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="../js/app.js"></script>
<script src="../js/responses.js"></script>
  
</body>

</html>






