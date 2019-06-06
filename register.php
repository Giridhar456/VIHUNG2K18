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
  <link rel="stylesheet" type="text/css" href="css/form.css" />
  <link rel="stylesheet" type="text/css" href="css/styles.css"/>
  <link href="https://fonts.googleapis.com/css?family=Comfortaa|Ubuntu:700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Chelsea+Market|Prata" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
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
        <strong>&laquo; Updates: </strong>Registation Open Now...!</strong>
        </div>
      </a>
      <span class="right">
          <strong></strong>
        </a>
      </span>
    </div>
      <div class="clr"></div>
    <!--/ Codrops top bar -->
    <br/><br/>
<!--/Menu drop-->
<div class="" id="home">
   <header>
      <a href="#home" class="logo" data-scroll>VIHUNG-2K18</a>
      <nav class="nav-collapse">
        <ul>
          <li class="menu-item "><a href="index.html" data-scroll>Home</a></li>
          <li class="menu-item"><a href="index.html" data-scroll>About</a></li>
          <li class="menu-item"><a href="index.html" data-scroll>Events</a></li>
          <li class="menu-item"><a href="register.php" data-scroll>Registration</a></li>
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
<script>
  function check()
  {
   if(document.getElementById("uname").value =="")
   {
    alert('Please Enter user name !'); 
    document.getElementById("uname").focus();
    return false;
   }
   if(document.getElementById("regnum").value =="")
   {
    alert('Please Enter Register Number !');
    document.getElementById("regnum").focus();
    return false;
   }
   
   if(document.getElementById("collegename").value =="")
   {
    alert('Please Enter College Name !');
    document.getElementById("collegename").focus();
    return false;
   }
   if(document.getElementById("mail").value =="")
   {
    alert('Please Enter Email Address !');
    document.getElementById("mail").focus();
    return false;
   }
   if(document.getElementById("phone").value =="")
   {
    alert('Please Enter Phone Number !');
    document.getElementById("phone").focus();
    return false;
   }
   if(document.getElementById("agree").value =="")
   {
    alert('Please Agree Our Condition !');
    document.getElementById("agree").focus();
    return false;
   }   
   if(document.getElementById("submit").value =="")
   {
    alert('Please Check Every Thing Before Submit !');
   }
  }
 </script>
    <h1>Register</h1>
    <table >
  <div class="form">
    <form action="" method="post" name="myform">
    <tr>
        <p>User Name*</p></tr>
        <tr>
    <input type="text"  name="username" placeholder="User Name" id="uname" autofocus required>  
    </tr>
        <tr>
        <p>Registered Number*</p></tr>
        <tr>
    <input type="text" name="registernumber" placeholder="College -Id" id="regnum" required>
        </tr>
        <tr>
        <p>College Name*</p></tr>
        <tr>
        <input type="text"  name="collegename" placeholder="College Name" id="collegename"  required> 
        </tr>
        <tr>
        <p>Branch*</p></tr>
        <tr>
        <select name="branch" onchange="if (this.options[this.selectedIndex].value =='otherbranch'){document.myform['otherbranch'].style.visibility='visible'}else {document.myform['otherbranch'].style.visibility='hidden'};">
             <option value="" selected="selected">Select Your Branch</option>
             <option value="CSE">CSE</option>
             <option value="ECE">ECE</option>
             <option value="EEE">EEE</option>
             <option value="CIVIL">CIVIL</option>
             <option value="MECH">Mechanical</option>
             <option value="B.Pharmacy">B.Pharmacy</option>
             <option value="MBA">MBA</option>
             <option value="otherbranch">Other</option>
          </select><br/><br/></tr>
        <tr>
        <input type="text" name="otherbranch" placeholder="Name Of Branch" style="visibility:hidden;">
        </tr>
        <p>Year*</p></tr>
        <tr>
        <select name="year">
             <option value="" selected="selected">Select Your Year</option>
             <option value="1">1</option>
             <option value="2">2</option>
             <option value="3">3</option>
             <option value="4">4</option>
        </select><br/><br/></tr>
        <tr>
        <p>Email*</p></tr>
        <tr>
        <input type="email" name="email" placeholder="Email" id="email" required>
        </tr>
        <tr>
      <p>Phone Number*</p></tr>
        <tr>
      <input type="number" name="phonenumber" placeholder="Phone Number" id="phone"  required>    
    </tr>
        <br/>
        <h2 style="margin-left: 5%;font-size: 20px;font-weight: bolder;">Events List</h2>
        <br/>
        <h2 style="margin-left: 5%;font-size: 18px;font-weight: bolder;"><u>Technical Events</u></h2>
        <br/>
        <input type="checkbox" name="paperpresentation" value="paperpresentation"><span class="evel">Paper Presentation&nbsp;<span  class="allbranches"">(&nbsp;For All Engg.Branches,B.Pharmacy and MBA)</span></span>
        <br/><br/>
        <input type="checkbox" name="posterpresentation" value="posterpresentation"><span class="evel">Poster Presentation&nbsp;<span  class="allbranches"">(&nbsp;For All Branches Except MBA)</span></span>
        <br/><br/>
        <input type="checkbox" name="projectexpo" value="projectexpo"><span class="evel">Project Expo&nbsp;<span  class="allbranches"">(&nbsp;For All Branches Except MBA)</span></span>
        <br/><br/>
        <input type="checkbox" name="ideathon" value="ideathon"><span class="evel">Ideathon&nbsp;<span  class="allbranches"">(&nbsp;Only For CSE)</span></span>
        <br/><br/>
        <input type="checkbox" name="circuitmania" value="circuitmania"><span class="evel">Circuit Mania&nbsp;<span  class="allbranches"">(&nbsp;Only For ECE)</span></span>
        <br/><br/>
        <input type="checkbox" name="youngmanager" value="youngmanager"><span class="evel">Young Managers&nbsp;<span  class="allbranches"">(&nbsp;Only For MBA)</span></span>
        <br/><br/>
        <input type="checkbox" name="marketmakers" value="marketmakers"><span class="evel">Market Makers&nbsp;<span  class="allbranches"">(&nbsp;Only For MBA)</span></span>
        <br/><br/>
        <input type="checkbox" name="businessquiz" value="businessquiz"><span class="evel">Business Quiz&nbsp;<span  class="allbranches"">(&nbsp;Only For MBA)</span></span>
        <br/>
        <br/>
        <h2 style="margin-left: 5%;font-size: 18px;font-weight: bolder;"><u>Cultural Events</u>&nbsp;<span  class="allbranches"">(&nbsp;Solo,Group)</span></h2>
        <br/>
        <input type="checkbox" name="westernsinging" value="westernsinging"><span class="evel">Western Singing</span>
        <br/><br/>
        <input type="checkbox" name="folksinging" value="folksinging"><span class="evel">Folk Singing</span>
        <br/><br/>
        <input type="checkbox" name="classicalsinging" value="classicalsinging"><span class="evel">Classical Singing</span>
        <br/><br/>
        <input type="checkbox" name="westerndance" value="westerndance"><span class="evel">Western Dance</span>
        <br/><br/>
        <input type="checkbox" name="folkdance" value="folkdance"><span class="evel">Folk Dance</span>
        <br/><br/>
        <input type="checkbox" name="classicaldance" value="classicaldance"><span class="evel">Classical Dance</span>
        <br/><br/>
        <input type="checkbox" name="skits" value="skits"><span class="evel">Skits</span>
        <br/><br/>
        <input type="checkbox" name="shortfilms" value="shortfilms"><span class="evel">Short Films</span>
        <br/><br/>
        <input type="checkbox" name="fashionparade" value="fashionparade"><span class="evel">Fashion Parade&nbsp;<span  class="allbranches"">(&nbsp;Only Group)</span></span>
        <br/><br/>
        <h2 style="margin-left: 5%;font-size: 18px;font-weight: bolder;"><u>Sports Events</u></h2>
        <input type="checkbox" name="boysvball" value="boysvball"><span class="evel">Volley Ball&nbsp;<span  class="allbranches"">(&nbsp;For Boys)</span></span>
        <br/><br/>
        <input type="checkbox" name="boyskabaddi" value="boyskabaddi"><span class="evel">Kabaddi&nbsp;<span  class="allbranches"">(&nbsp;For Boys)</span></span>
        <br/><br/>
        <input type="checkbox" name="girlskabaddi" value="girlskabaddi"><span class="evel">Kabaddi&nbsp;<span  class="allbranches"">(&nbsp;For Girls)</span></span>
        <br/><br/>
        <input type="checkbox" name="girlsthrowball" value="girlsthrowball"><span class="evel">Throw Ball&nbsp;<span  class="allbranches"">(&nbsp;For Girls)</span></span>
        <br/><br/>
        <input type="checkbox" name="girlstennikoit" value="girlstennikoit"><span class="evel">Tennikoit&nbsp;<span  class="allbranches"">(&nbsp;For Girls)</span></span>
        <br/><br/>
        <input type="checkbox" name="agree" value="agree" id="agree" required><span class="iag">I Agree To Pay The Sum Of&nbsp;<span  class="allbranches""><u>150 Rupees</u></span> At The Time Of Events</span>
        <td>
        <input type="submit" name="submit" id="submit" Onclick="return check(this.form);">
        </td>
        </form>
  </div>
    </table>
</center>
    <footer class="footer" style="color: black;">

      <p></p>
      <br/>
      <center>
        <span style="font-weight: bolder;">Crafted With</span>
<svg class="heart" viewBox="0 0 32 29.6">
  <path d="M23.6,0c-3.4,0-6.3,2.7-7.6,5.6C14.7,2.7,11.8,0,8.4,0C3.8,0,0,3.8,0,8.4c0,9.4,9.5,11.9,16,21.2
    c6.1-9.3,16-12.1,16-21.2C32,3.8,28.2,0,23.6,0z"/> 
</svg> 
      <span style="font-weight: bolder;">By Team VIHUNG</span>
          </center>
      <p style="text-align: center;">VIHUNG-2K18 &copy; 2018</p>
    </footer>
</body>
<script src="js/fastclick.js"></script>
    <script src="js/scroll.js"></script>
    <script src="js/fixed-responsive-nav.js"></script>
</html>
<?php
if(isset($_POST['submit']))
$username=$_POST['username'];
$registernumber=$_POST['registernumber'];
$collegename=$_POST['collegename'];
$branch=$_POST['branch'];
$otherbranch=$_POST['otherbranch'];
$year=$_POST['year'];
$email=$_POST['email'];
$phonenumber=$_POST['phonenumber'];
$agree=$_POST['agree'];
$paperpresentation=$_POST['paperpresentation'];
$posterpresentation=$_POST['posterpresentation'];
$projectexpo=$_POST['projectexpo'];
$ideathon=$_POST['ideathon'];
$circuitmania=$_POST['circuitmania'];
$youngmanager=$_POST['youngmanager'];
$marketmakers=$_POST['marketmakers'];
$businessquiz=$_POST['businessquiz'];
$westernsinging=$_POST['westernsinging'];
$folksinging=$_POST['folksinging'];
$classicalsinging=$_POST['classicalsinging'];
$westerndance=$_POST['westerndance'];
$folkdance=$_POST['folkdance'];
$classicaldance=$_POST['classicaldance'];
$skits=$_POST['skits'];
$shortfilms=$_POST['shortfilms'];
$fashionparade=$_POST['fashionparade'];
$boysvball=$_POST['boysvball'];
$boyskabaddi=$_POST['boyskabaddi'];
$girlskabaddi=$_POST['girlskabaddi'];
$girlsthrowball=$_POST['girlsthrowball'];
$girlstennikoit=$_POST['girlstennikoit'];
$m=time('h');
$d=substr($m,5,2);
$uid=$m;

//echo $udi=$m;
        $connect=mysqli_connect("localhost","","DatabaseName","TableName");
        $sql="SELECT * FROM userdata WHERE registernumber='$registernumber' AND collegename='$collegename' AND branch='$branch'";
        $result= mysqli_query($connect,$sql);
        $count= mysqli_num_rows($result);
        if($count > 0){
        $resave="UPDATE userdata SET paperpresentation='$paperpresentation',posterpresentation='$posterpresentation',
projectexpo='$projectexpo',ideathon='$ideathon',circuitmania='$circuitmania',youngmanager='$youngmanager',marketmakers='$marketmakers',businessquiz='$businessquiz',westernsinging='$westernsinging',folksinging='$folksinging',classicalsinging='$classicalsinging',westerndance='$westerndance',folkdance='$folkdance',classicaldance='$classicaldance',skits='$skits',shortfilms='$shortfilms',fashionparade='$fashionparade',boysvball='$boysvball',boyskabaddi='$boyskabaddi',girlskabaddi='$girlskabaddi',girlsthrowball='$girlsthrowball',girlstennikoit='$girlstennikoit' WHERE registernumber='$registernumber' AND collegename='$collegename' AND branch='$branch'";
        $resave=mysqli_query($connect,$resave);
        $connect -> close();
        }
        else{
        $save="INSERT INTO userdata(username,registernumber,collegename,branch,otherbranch,year,email,phonenumber,agree,uid,paperpresentation,posterpresentation,projectexpo,ideathon,circuitmania,youngmanager,marketmakers,businessquiz,westernsinging,folksinging,classicalsinging,westerndance,folkdance,classicaldance,skits,shortfilms,fashionparade,boysvball,boyskabaddi,girlskabaddi,girlsthrowball,girlstennikoit) VALUES ('$username','$registernumber','$collegename','$branch','$otherbranch','$year','$email','$phonenumber','$agree','$uid','$paperpresentation','$posterpresentation','$projectexpo','$ideathon','$circuitmania','$youngmanager','$marketmakers','$businessquiz','$westernsinging','$folksinging','$classicalsinging','$westerndance','$folkdance','$classicaldance','$skits','$shortfilms','$fashionparade','$boysvball','$boyskabaddi','$girlskabaddi','$girlsthrowball','$girlstennikoit') "; 
        $saveresult=mysqli_query($connect,$save);
        
$to = $_POST['email'];
$subject = "VIHUNG-2K18";
$txt = $subject = "VIHUNG-2K18";
$txt = "Hai! Here are your registration details for VIHUNG-2K18.\n\n"."Name:".$_POST['username']."\nUinque-Id:".$uid."\nBranch:".$_POST['branch']."\nRegister Number:".$_POST['registernumber']."\nCollege Name:".$_POST['collegename']."\nPhone Number:".$_POST['phonenumber']."\nEmail-Id:".$_POST['email'];
$headers = "From: teamvihung@vihung2k18.com" . "\r\n" .
"CC: vihung2k18@gmail.com";

mail($to,$subject,$txt,$headers);

        ?>
        <script>
            alert("Registation Success.Thank's For Registering");
        </script>
        <?php
        $connect -> close();
        }
?>