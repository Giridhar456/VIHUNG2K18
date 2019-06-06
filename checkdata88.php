<!DOCTYPE html>
<html>
<head>
  <title>VIHUNG-2K18&nbsp;||&nbsp;MPES</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="VIHUNG">
  <script src="js/responsive-nav.js"></script>
  <script src="js/jssor.slider-26.8.0.min.js" type="text/javascript"></script>
  <link rel="stylesheet" type="text/css" href="css/demo.css" />
  <link rel="stylesheet" type="text/css" href="css/menu.css" />
  <link rel="stylesheet" href="css/styles.css">
  <link href="https://fonts.googleapis.com/css?family=Comfortaa|Ubuntu:700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Chelsea+Market|Prata" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
  table {
    width:100%;
}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 2px;
    text-align: left;
}
  table#t01 tr:nth-child(even) {
    background-color: #eee;
}
table#t01 tr:nth-child(odd) {
   background-color:#fff;
}
table#t01 th {
    background-color: black;
    color: white;
}
tr:hover{
  color: red;
  cursor: pointer;
  background-color: #FFE4C4;
  font-weight: bolder;
}
td:hover{
  color: red;
  cursor: pointer;
  background-color: #FFE4C4;
  font-weight: bolder;
}

</style>

  <body style="padding:0px; margin:0px; background-color:#fff;font-family:Comfortaa,cursive;">


  <!--To Enable Smooth Scroll-->
  <script>
$(document).ready(function(){
  $("a").on('click', function(event) {

    if (this.hash !== "") {
      event.preventDefault();

      var hash = this.hash;

      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 7000, function(){
   
        window.location.hash = hash;
      });
    } 
  });
});
</script>
  <!--/To Enable Smooth Scroll-->


<!-- Codrops top bar -->
<br/>
    <div class="codrops-top" id="home" style="width: 100%;">
        <div class="waves-effect waves-teal">
        <strong>&laquo; Updates: </strong>Online Registration Open...!</strong>
        </div>
      </a>
      <span class="right">
        <a href="http://tympanus.net/codrops/2012/01/30/page-transitions-with-css3/">
          <strong></strong>
        </a>
      </span>
    </div>
      <div class="clr"></div>
    <!--/ Codrops top bar -->
    <br/><br/>
<!--/Menu drop-->
<div class="codrops-top1" id="home">
   <header>
      <a href="#home" class="logo" data-scroll>VIHUNG-2K18</a>
      <nav class="nav-collapse">
        <ul>
          <li class="menu-item "><a href="index.html" data-scroll>Home</a></li>
          <li class="menu-item"><a href="index.html" data-scroll>About</a></li>
          <li class="menu-item"><a href="index.html" data-scroll>Event's</a></li>
          <li class="menu-item"><a href="register.php" data-scroll>Register</a></li>
          <li class="menu-item"><a href="index.html" data-scroll>Our Team</a></li>
          <li class="menu-item"><a href="index.html" data-scroll>Contact</a></li>
          
		  </ul>
      </nav>
    </header>
    
    <div class="header" style="margin-top: 11px;">
    <div class="progress-container">
      <div class="progress-bar" id="myBar"></div>
    </div>  
</div>
</div>
<!--/Menu drop-->
<script>
// When the user scrolls the page, execute myFunction 
window.onscroll = function() {myFunction()};

function myFunction() {
  var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
  var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  var scrolled = (winScroll / height) * 100;
  document.getElementById("myBar").style.width = scrolled + "%";
}
</script>
</div>
<br/><br/>
	<table id="t01">
		<tr><td colspan="30"><div  class="typewriter">
    <h2  style="color: black;" align="center"><span class="bli">STUDENT'S INFORMATION</span></h2>
    </div></td></tr>
		<tr>
			<form method="post" action="">
			 <td colspan="30">
<center>
    <select  name="branch" required>
      <option>Branch</option>
      <option>ECE</option>
      <option>CSE</option>
      <option>EEE</option>
      <option>Mechanical</option>
      <option>CIVIL</option>
      <option>MBA</option>
      <option>B.Pharmacy</option>
    </select>
    <select  name="year" required>
      <option>Year</option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
    </select><span style="margin-left: 20px;font-size: 10px;">(OR)</span>
    <input type="text" name="email"  placeholder="Email-Id" > 
    <input type="submit" class="search" name="search" value="Search">
</div>
</form>
</td>
  
	<tr style="font-size: 10px;">
    <td><b>Sr.No</b></td>
    <td><b>Unique-Id</b></td>
    <td><b>Student Name</b></td>
    <td><b>Student RollNumber</b></td>
    <td><b>College Name</b></td>
    <td><b>Branch</b></td>
    <td><b>Year</b></td>
    <td><b>Email-Id</b></td>
    <td><b>Phone Number</b></td>
    <td><b>Paperpresentation</b></td>
    <td><b>Posterpresentation</b></td>
    <td><b>Projectexpo</b></td>
    <td><b>Ideathon</b></td>
    <td><b>Circuitmania</b></td>
    <td><b>Youngmanager</b></td>
    <td><b>Marketmakers</b></td>
    <td><b>Businessquiz</b></td>
    <td><b>Westernsinging</b></td>
    <td><b>Folksinging</b></td>
    <td><b>Classicalsinging</b></td>
    <td><b>Westerndance</b></td>
    <td><b>Folkdance</b></td>
    <td><b>Classicaldance</b></td>
    <td><b>Skits</b></td>
    <td><b>Shortfilms</b></td>
    <td><b>Fashionparade</b></td>
    <td><b>Boysvolleyballball</b></td>
    <td><b>Boyskabaddi</b></td>
    <td><b>Girlskabaddi</b></td>
    <td><b>Girlsthrowball</b></td>
    <td><b>Girlstennikoit</b></td>
    </tr>

<?php
	$branch=$_POST['branch'];$year=$_POST['year'];$email=$_POST['email'];
	
	$conn=mysqli_connect("localhost","","DatabaseName","Tablename");
	$sql='SELECT * FROM userdata WHERE branch='."'$branch'".' OR year='."'$year'".' OR email='."'$email'"; 
	$res=mysqli_query($conn,$sql);
			
	while ($row = mysqli_fetch_array($res))
   {
    echo "<tr style='font-size:10px;'>";
        echo "<td>".$row['id']."</td>";
    	echo "<td>".$row['uid']."</td>";
    	echo "<td>".$row['username']."</td>";
      	echo"<td>".$row['registernumber']."</td>";
      	echo"<td>".$row['collegename']."</td>";
      	echo"<td>".$row['branch']."</td>";
      	echo"<td>".$row['year']."</td>";         
        echo "<td>".$row['email']."</td>";
        echo "<td>".$row['phonenumber']."</td>";
        echo "<td>".$row['paperpresentation']."</td>";
        echo "<td>".$row['posterpresentation']."</td>";
        echo "<td>".$row['projectexpo']."</td>";
        echo "<td>".$row['ideathon']."</td>";
        echo "<td>".$row['circuitmania']."</td>";
        echo "<td>".$row['youngmanager']."</td>";
        echo "<td>".$row['marketmakers']."</td>";
        echo "<td>".$row['businessquiz']."</td>";
        echo "<td>".$row['westernsinging']."</td>";
        echo "<td>".$row['folksinging']."</td>";
        echo "<td>".$row['classicalsinging']."</td>";
        echo "<td>".$row['westerndance']."</td>";
        echo "<td>".$row['folkdance']."</td>";
        echo "<td>".$row['classicaldance']."</td>";
        echo "<td>".$row['skits']."</td>";
        echo "<td>".$row['shortfilms']."</td>";
        echo "<td>".$row['fashionparade']."</td>";
        echo "<td>".$row['boysvball']."</td>";
        echo "<td>".$row['boyskabaddi']."</td>";
        echo "<td>".$row['girlskabaddi']."</td>";
        echo "<td>".$row['girlsthrowball']."</td>";
        echo "<td>".$row['girlstennikoit']."</td>";
		echo "</tr>";				      
  }

?>
</center>
</table>
</body>
<script src="js/fastclick.js"></script>
    <script src="js/scroll.js"></script>
    <script src="js/fixed-responsive-nav.js"></script>
</html>