
<html>
  <head>    <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <link rel="icon" href="./images/large(1)(1).png" type="image/icon type">
<meta name="viewport" content="width=500, initial-scale=1"/>

<style>
  body{
    background: #f6f8fe;  
  }
.in{
width: 280PX;height: 24PX;text-align:left;border-top: 0px;border-left: 0px;border-right: 0px ;

float: right;
margin-top: 20px;
margin-right: 90px;
}
.in:hover{

padding: 10px;
font-size: 21px;
border-color: blueviolet;
color: blueviolet;
width: 290PX;
}

.updown-animation
{
animation-name: infiniteupdown;
animation-duration: 9s;
animation-iteration-count: infinite;
animation-timing-function: ease;
transition: all .3s;
}
@keyframes infiniteupdown
{
0%
{
  transform: translateY(0px);
}
50%
{
  transform: translateY(-40px);
}
100%
{
  transform: translateY(0px);
}
}
.out{
border: 0px;
margin-left: 70px ;
font-size: 16px;
background:lavender;
padding: 7px;
border-radius: 35px;

}
.out:hover{
  cursor: pointer;
border-color: blueviolet;
  color: blueviolet;
}
nav{
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  height: 70px;
  background-image:url('C:\Users\Venkatesh\Downloads\chart-graph-business-finance_1.j') ;
}
nav .navbar{
  height: 100%;
  max-width: 1250px;
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin: auto;
  padding: 0 50px;
}
.navbar .logo a{
  font-size: 37px;
  color: rgb(154, 142, 142);
  text-decoration: none;
  font-weight: 600;
  font-family: "Comic Sans MS", cursive, sans-serif;
}
nav .navbar .nav-links{
  line-height: 70px;
  height: 100%;
}
nav .navbar .links{
  display: flex;}
nav .navbar .links li{
  position: relative;
  display: flex;
  align-items: center;
  justify-content: space-between;
  list-style: none;
  padding: 0 14px;
}
nav .navbar .links li a{
  height: 100%;
  text-decoration: none;
  white-space: nowrap;
  color: rgb(59, 58, 58);
  font-family: "Comic Sans MS", cursive, sans-serif;
  font-size: 20px;
  font-weight: 500;
}
nav .navbar .links li a:hover{
font-size: 24px;
}
.links li:hover .htmlcss-arrow,
.links li:hover .js-arrow{
  transform: rotate(180deg);
  }
nav .navbar .links li .arrow{
  height: 100%;
  width: 22px;
  line-height: 70px;
  text-align: center;
  display: inline-block;
  color: #fff;
  transition: all 0.3s ease;
}
nav .navbar .links li .sub-menu{
  position: absolute;
  top: 70px;
  left: 0;
  line-height: 40px;
  background: grey;
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
  border-radius: 0 0 4px 4px;
  display: none;
  z-index: 2;
}
nav .navbar .links li:hover .htmlCss-sub-menu,
nav .navbar .links li:hover .js-sub-menu{
  display: block;
}
.navbar .links li .sub-menu li{
  padding: 0 22px;
  border-bottom: 1px solid rgba(255,255,255,0.1);
}
.navbar .links li .sub-menu a{
  color: #fff;
  font-size: 15px;
  font-weight: 500;
}
.navbar .links li .sub-menu .more-arrow{
  line-height: 40px;
}
.navbar .links li .sub-menu .more-sub-menu{
  position: absolute;
  top: 0;
  left: 100%;
  border-radius: 0 4px 4px 4px;
  z-index: 1;
  display: none;
}
.links li .sub-menu .more:hover .more-sub-menu{
  display: block;
}
.navbar .nav-links .sidebar-logo{
  display: none;
}
.navbar .bx-menu{
  display: none;
}
@media (max-width:920px) {
  nav .navbar{
    max-width: 100%;
    padding: 0 25px;
  }
  nav .navbar .logo a{
    font-size: 27px;
  }
  nav .navbar .links li{
    padding: 0 10px;
    white-space: nowrap;
  }
  nav .navbar .links li a{
    font-size: 15px;
  }}
@media (max-width:800px){
  nav{
     position: relative;
  }
  .navbar .bx-menu{
    display: block;
  }
  nav .navbar .nav-links{
    position: fixed;
    top: 0;
    left: -100%;
    display: block;
    max-width: 270px;
    width: 100%;
    background:  #3E8DA8;
    line-height: 40px;
    padding: 20px;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
    transition: all 0.5s ease;
    z-index: 1000;
  }
  .navbar .nav-links .sidebar-logo{
    display: flex;
    align-items: center;
    justify-content: space-between;
  }
  .sidebar-logo .logo-name{
    font-size: 25px;
    color: #fff;
  }
    .sidebar-logo  i,
    .navbar .bx-menu{
      font-size: 25px;
      color: rgb(16, 1, 1);
    }
  nav .navbar .links{
    display: block;
    margin-top: 20px;
  }
  nav .navbar .links li .arrow{
    line-height: 40px;
  }
nav .navbar .links li{
    display: block;
  }
}
@media (max-width:370px){
  nav .navbar .nav-links{
  max-width: 100%;
} 
}



</style>
</head>
<body>

  <img src="./images/large(1)(1).png" style="width: 70px;height:40px;margin-left: 50px;margin-top: 15px;
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
                            if ($_COOKIE["loginstatus"] == 1)
                            {?>
                             <li><a href="logout.php">LOGOUT</a></li>
                              <?php
                            }
                            else{
                          ?>
                                            
                          <li><a href="login.php">LOGIN</a></li>
                          <?php
                            }
                          ?>
                          </ul>
                        </div> 
                      </div> </div>
                    </nav> 
<center>

<form method='post' action='' style="padding: 20px
;   box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;width: 850px;margin-top: 120px ;height: 400px;  background: white;">
<h1 style="text-align: center;letter-spacing: 3px;font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
color: blueviolet;">Job Details</h1><br>
<img src="./images/7.jpg"
style="width: 390px;
 height: 290px;float: left;" class="updown-animation">
<input type="text" placeholder="Job Id" class="in" name="jobid" required>
  <br><br>
<input type="text" placeholder="Job Title"  class="in"  name="jobtitle" required>
  <br><br>
  <input type="number" placeholder="Experiences"  class="in"  name="experience" required>

  <br><br>
  <input type="text" placeholder="Skills"  class="in"  name="skills" required>
  <br><br>
  
  <input type="text" placeholder="Location"  class="in"  name="loc" required>
  <br><br><br>
  <br><br><br>
  <input type="submit" name="SubmitButton"/>
</form></center>
<script src="script.js"></script>
</body>

</html>
<?php
if(isset($_POST['SubmitButton'])){ 

      $jobid= $_POST['jobid'];
      $jobtitle= $_POST['jobtitle'];
      $experience= $_POST['experience'];
      $skills= $_POST['skills'];
      $location= $_POST['loc'];

      $servername = "localhost";
      $username = "root";
      $password = "Venky@2002";
      $dbname = "intracloud";

      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);
      // Check connection
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

      $sql = "INSERT INTO jobs (`jobid`,`jobtitle`,`experience`,`skills`,`location`)
      VALUES ('".$jobid."','".$jobtitle."', '".$experience."','".$skills."','".$location."')";

      if ($conn->query($sql) === TRUE) {
        echo "<script> alert('New Job record created successfully'); </script>";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }

      $conn->close();
}
?>