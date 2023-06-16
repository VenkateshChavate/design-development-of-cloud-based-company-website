<?php include 'navbar.php';?>
<html>

<body onload="carrer">

  <img src="./images/5.jpg">
  <div class="tree">
    <h1 style="font-size: 40px;
   color: rgb(0, 0, 8);margin-top: 100px;">Let’s bring the Cloud Native<br>
      Revolution together.</h1>
    <p style=" color: rgb(1, 1, 17);">Join us and be a part of the mission of building
      <br>
      better cloud infrastructure.
    </p>
  </div>
  <br><br> <br> <br> <br>
  <div>
    <div style="width: 500px;
   height: 370px;
   padding: 35px;
   margin-left: 200px;
   float: left;">
    <img src="./images/7.jpg" style="width: 400px;
   height: 300px;" class="updown-animation">
    </div>
    <div class="join reveal">
      <h1
        style="font: size 25px;font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">
        Celebrating Open &
        <br> Candid Culture
      </h1><br>
      Join us as we build a company that approaches work from a fresh perspective.
      We openly discuss our finances, business decisions, and strategies to help our customers, Infranauts, and the
      community.ud.
    </div></div>
  <br><br> <br> <br>
  <br> <br> <br>
  <br> <br> <br><br> <br> <br>
  <br> <br> <br> <br> <br>
  <h1 class="th1 reveal">APPLY AS YOUR PREFERNCES 
     <button > 
      <?php
      if(isset($_COOKIE["loginstatus"])){
        if ($_COOKIE["loginstatus"] == 1)
        {?>
          <a href='addjob.php'> Add New Job </a>
          <?php
        }}?>
      </button> 
   </h1><br> <br>
  <table class="table reveal">
    <thead>
      <tr>
        <th>JOBID <span class="icon-arrow">&UpArrow;</span></th>
        <th> JOB TITLE<span class="icon-arrow">&UpArrow;</span></th>
        <th> Experience<span class="icon-arrow">&UpArrow;</span></th>
        <th> Skills<span class="icon-arrow">&UpArrow;</span></th>
        <th> Location <span class="icon-arrow">&UpArrow;</span></th>
        <th> Apply <span class="icon-arrow">&UpArrow;</span></th>
    </thead>
    <tbody>
    <?php
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

        $sql = "SELECT  `jobid`,`jobtitle`,`experience`,`skills`,`location` FROM jobs";
        $result = $conn->query($sql);
       
        if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            echo " <tr> <td> ". $row['jobid']. " </td> <td>" . $row['jobtitle']. "</td><td>" . $row['experience']. "</td> <td>" . $row['skills']. " </td><td>" . $row['location']. " </td> <td> <button>Apply</button> </td></tr>";
          }
        } else {
          echo "0 results";
        }
        $conn->close();
    ?>
     
    </tbody>
  </table>

  <br> <br> 
 <br> <br> <br> <br> <br>
  <footer class="footer">
    <div class="container">
      <h1 style="float: left;color: azure;padding: 20px;font-size: 40px;margin-top: 5%;margin-right: 4%;">Intracloud
      </h1>
      <div class="row">
        <div class="footer-col">

          <h4>company</h4>

          <ul>
            <li><a href="aboutus.php">about us</a></li>
            <li><a href="services.php">our services</a></li>
            <li><a href="#">privacy policy</a></li>
            <li><a href="#">affiliate program</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>get help</h4>
          <ul>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">shipping</a></li>
            <li><a href="#">returns</a></li>
            <li><a href="#">order status</a></li>
            <li><a href="#">payment options</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Avaialble services</h4>
          <ul>
            <li><a href="#">IAS</a></li>
            <li><a href="#">SAS</a></li>
            <li><a href="#">DAS</a></li>

          </ul>
        </div>
        <div class="footer-col">
          <h4>follow us</h4>
          <div class="social-links">
            <a href="#"><i class="fab fa-facebook-f">F</i></a>
            <a href="#"><i class="fab fa-twitter">T</i></a>
            <a href="#"><i class="fab fa-instagram">I</i></a>
            <a href="#"><i class="fab fa-linkedin-in">LI</i></a>
          </div>
        </div>
      </div>
    </div>
  </footer>


</body>

</html>