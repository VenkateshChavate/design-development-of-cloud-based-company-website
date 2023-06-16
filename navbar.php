
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">
<link rel="icon" href="./images/large(1)(1).png" type="image/icon type">
<meta name="viewport" content="width=500, initial-scale=1"/>
<script src="intracloud.js"></script></head>
<body> 
<img src="./images/large(1)(1).png" style="width: 70px;height:40px;margin-left: 100px;margin-top: 15px;
border-radius: 40px;">
 <nav> <div class="navbar">
                      <i class='bx bx-menu'></i>
                      <div class="logo"><a href="index.php">Intracloud</a></div>
                      <div class="nav-links">
                        <div class="sidebar-logo">
                          <span class="logo-name"></span>
                          <i class='bx bx-x' ></i>
                        </div>
                        <ul class="links">
                          <li><a href="index.php">HOME</a></li>
                          <li>
                            <a href="carrer.php">CARRERS</a>
                            <i class='bx bxs-chevron-down htmlcss-arrow arrow  '></i>
                            <ul class="htmlCss-sub-menu sub-menu">
                            </li>
                            </ul>
                          <li><a href="services.php">SERVICES</a></li>
                          <li><a href="aboutus.php">ABOUT US</a></li>
                          <li>
                            <a href="contactus.php">CONTACT US</a>
                          </li>
                          <?php
                          if(isset($_COOKIE["loginstatus"]))
                          {
                            if ($_COOKIE["loginstatus"] == 1)
                            {?>
                             <li><a href="logout.php">LOGOUT</a></li>
                              <?php
                            }
                         
                            else {
                          ?>
                                            
                          
<li><a href="login.php">LOGIN</a></li>
                          <?php
                            }
                          } 
                          else {
                            ?>
                                              
                            
  <li><a href="login.php">LOGIN</a></li>
                            <?php
                              }
                          ?>
                        </ul>
                      </div> 
         </div> </div>
 </nav> 

  </html>