
<?php include 'navbar.php';
 
?>

<html>
    <head>
        <link rel="icon" href="./images/large(1)(1).png" type="image/icon type">
        <style>
            

style.css
body {
background-image:  ;
background-size: cover;
background-repeat: no-repeat;
background-attachment: fixed;
font-family: "Open Sans", sans-serif;
color: #333333;
}

.box-form {
margin: 0 auto;
width: 80%;
background: #FFFFFF;
border-radius: 10px;
overflow: hidden;
display: flex;
flex: 1 1 100%;
align-items: stretch;
justify-content: space-between;
box-shadow: 0 0 20px 6px #090b6f85;
margin-top: 90px;
}
@media (max-width: 980px) {
.box-form {
flex-flow: wrap;
text-align: center;
align-content: center;
align-items: center;
}
}
.box-form div {
height: auto;
}
.box-form .left {
color: #FFFFFF;
background-size: cover;
background-repeat: no-repeat;
background-image: url("https://i.pinimg.com/736x/5d/73/ea/5d73eaabb25e3805de1f8cdea7df4a42--tumblr-backgrounds-iphone-phone-wallpapers-iphone-wallaper-tumblr.jpg");
overflow: hidden;
}
.box-form .left .overlay {
padding: 30px;
width: 100%;
height: 100%;
background: #5961f9ad;
overflow: hidden;
box-sizing: border-box;
}
.box-form .left .overlay h1 {
font-size: 10vmax;
line-height: 1;
font-weight: 900;
margin-top: 40px;
margin-bottom: 20px;
}
.box-form .left .overlay span p {
margin-top: 30px;
font-weight: 900;
}
.box-form .left .overlay span a {
background: #3b5998;
color: #FFFFFF;
margin-top: 10px;
padding: 14px 50px;
border-radius: 100px;
display: inline-block;
box-shadow: 0 3px 6px 1px #042d4657;
}
.box-form .left .overlay span a:last-child {
background: #1dcaff;
margin-left: 30px;
}
.box-form .right {
padding: 40px;
overflow: hidden;
}
@media (max-width: 980px) {
.box-form .right {
width: 100%;
}
}
.box-form .right h5 {
font-size: 6vmax;
line-height: 0;
}
.box-form .right p {
font-size: 14px;
color: #B0B3B9;
}
.box-form .right .inputs {
overflow: hidden;
}
.box-form .right input {
width: 100%;
padding: 10px;
margin-top: 25px;
font-size: 16px;
border: none;
outline: none;
border-bottom: 2px solid #B0B3B9;
}
.box-form .right .remember-me--forget-password {
display: flex;
justify-content: space-between;
align-items: center;
}
.box-form .right .remember-me--forget-password input {
margin: 0;
margin-right: 7px;
width: auto;
}
.box-form .right button {
float: right;
color: #fff;
font-size: 16px;
padding: 12px 35px;
border-radius: 50px;
display: inline-block;
border: 0;
outline: 0;
box-shadow: 0px 4px 20px 0px #49c628a6;
background-image: linear-gradient(135deg, #70F570 10%, #49C628 100%);
}


        </style>
    </head>
    <body>
        <div class="box-form">
            <div class="left">
            <div class="overlay">
            <h1 style="font-size: 120px;text-align:center;  ">Welcome Back</h1>
            <p style="font-size: 20px;text-align:center;  ">The only way to achieve the impossible is to believe it is possible</p>
           
            </div>
            </div>
            
            
            <div class="right">
            <img src="./images/large(1)(1).png" style="width: 150px;height:90px;margin-left: 30px;margin-top: 15px;
border-radius: 40px;"><br>
            <h5 style="font-size: 40px;text-align:center;  ">Login</h5>
           <form method='post' action='verifylogin.php'>
            <div class="inputs">
            <input type="text" placeholder="Username" name='username' required>
            <br>
            <input type="password" placeholder="Password" name='passwd' required>
</div><br>
<center>
           <button style="text-align:center;  " >Login  </button></center>
            </div>
</form>
            </div>
            
    </body>
</html>