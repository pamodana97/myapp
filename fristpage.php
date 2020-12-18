<!DOCTYPE html>
<html>
<head>

<style>

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}
.container {
  padding: 16px;
}
span.psw {
  float: right;
  padding-top: 16px;
}
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 30%; /* Could be more or less, depending on screen size */
}

.cancelbtn:hover,
.cancelbtn:focus {
  color: red;
  cursor: pointer;
}
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}
@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

.free {
  position: absolute;
  top: 25%;
  right: 6%;
}

p{
  position: absolute;
  top: 36%;
  left: 5%;
  color: white;
  font-size: 46px;
  font-family: cursive, sans-serif;
}


.btn1 {
  position: absolute;
  top: 75%;
  left:15%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color:#ff751a;
  color: white;
  font-size: 26px;
  font-family: cursive, sans-serif;
  padding: 22px 24px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}

.btn2 {
  position: absolute;
  top: 75%;
  right:50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: transparent;
  border: 3px solid white;
  color: white;
  font-size: 26px;
  font-family: cursive, sans-serif;
  padding: 22px 24px;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}

.btn1:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}

.btn2:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
.avatar{
  width: 150px;
  border-radius: 50%;
}

.btn3 {
  background-color:#0066ff ;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: transparent;
  border: 3px solid white;
  cursor: pointer;
}

#mySidenav a {
  position: absolute;
  left: -80px;
  transition: 0.3s;
  padding: 10px;
  width: 100px;
  text-decoration: none;
  font-size: 20px;
  color: black;
  border-radius: 0 5px 5px 0;
}

#mySidenav a:hover {
  left: 0;
}

#homenev {
  top: 5px;
  background-color: white;
}

#aboutnev {
  top: 60px;
  background-color: #2196F3;
}

#contactnev {
  top: 115px;
  background-color: white;
}

#joinnev {
  top: 170px;
  background-color: #2196F3;
}

#adminnev{
  top: 225px;
  background-color: white;
}
.zoom {
  position: absolute;
  left: 150px;
  padding: 50px;
  background-color: #0066ff;
  transition: transform .2s;
  width: 20px;
  height: 20px;
  margin: 0 auto;
  font-size: 100px;
  color: white;
}

.zoom:hover {
  -ms-transform: scale(1.5); /* IE 9 */
  -webkit-transform: scale(1.5); /* Safari 3-8 */
  transform: scale(1.5); 
}

.home{
  position: absolute;
  top:13px;
  left: 70px;
}
.us{
  position: absolute;
  top:66px;
  left: 70px;
}
.call{
  position: absolute;
  top:123px;
  left: 73px;
}
.joinimg{
  position: absolute;
  top:180px;
  left: 70px;
}
.admin{
  position: absolute;
  top:230px;
  left: 67px;
}
</style>
</head>
<body bgcolor="#0066ff">

  <div id="mySidenav" class="sidenav">
  <a href="homepage.php" id="homenev">Home</a><img class="home" src="home.png" style="width: 30px;" >
  <a href="about.php" id="aboutnev">About</a><img class="us" src="us.png" style="width: 30px;" >
  <a href="contactus.php" id="contactnev">Contact</a><img class="call" src="call.png" style="width: 30px;" >
  <a href="joinpage.php" id="joinnev">Join</a><img class="joinimg" src="jo.png" style="width: 30px;" >
  <a href="admin.php" id="adminnev">Admin</a><img class="admin" src="admin.png" style="width: 35px;" >
</div>

<div class="zoom">GetJob.LK</div>


  <img class="free" src="freelancer-bird.png" style="width: 500px;">
  <p>Hire experts for any job in <br> Sri Lanka</p>
  <button class="btn1" onclick="location.href='http://localhost/Assignment/postproject.php';"">Want to Hire</button><button class="btn2" onclick="document.getElementById('id01').style.display='block'">Want to Work</button>

  <div id="id01" class="modal">
  
  <form class="modal-content animate" action="loginserver.php" method="POST" >
    <div class="imgcontainer">
      <img src="freelancer-bird.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="name" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="pw" required>
        
      <button class="btn3" name="login" type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>
    <center>Don't have an account? <a href="http://localhost/Assignment/joinpage.php"> Sign Up</a></center>
    <div class="container" style="background-color:#f1f1f1">
    <center><button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">X</button></center>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</body>
</html>

