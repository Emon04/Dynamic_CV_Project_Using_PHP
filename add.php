<?php 
  session_start();
  if(!isset($_SESSION['username'])){
    header('location:index.php');
  }
 ?>


<?php include 'conn.php'; ?>

<!DOCTYPE html>
<html>
<title>My CV</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
</style>
<body class="ea-light-grey">

<div class="ea-content ea-margin-top" style="max-width:1400px;">


  <div class="ea-row-padding">

    <div class="ea-third left-color">
    
      <div class=" ea-text-grey ea-card-4">
        <div class="ea-display-container">
          <img src="Images/emon1.png" style="padding-left: 20px; width:200px; height: 180px; " alt="Avatar">
          <br><br><br><br>
          <div class="ea-display-bottomleft ea-container ea-text-grey">
            <h2>Md. Emon Ali</h2>
          </div>
        </div>
        <div class="ea-container">
          <p><i class="fa fa-briefcase fa-fw ea-margin-right ea-large ea-text-teal"></i>Web Developer</p>
          <p><i class="fa fa-home fa-fw ea-margin-right ea-large ea-text-teal"></i>Dhaka, Bangladesh</p>
          <p><i class="fa fa-envelope fa-fw ea-margin-right ea-large ea-text-teal"></i>emon35-1927@diu.edu.bd</p>
          <p><i class="fa fa-phone fa-fw ea-margin-right ea-large ea-text-teal"></i>01785616006</p>
          <hr>

         


          <p class="ea-large"><b><i class="fa fa-asterisk fa-fw ea-margin-right ea-text-teal"></i>Computer & Software Skills</b></p>
           <?php
          
          $sql = "SELECT * FROM `computer&software_skills`" ;
          $result = mysqli_query($conn, $sql);

             while($row = mysqli_fetch_assoc($result)) {
                 echo "id: " . $row["id"]. " - skills: " . $row["skillname"]. " " . $row["skilllevel"]. "<br>";
                }
          ?>

          <p>Adobe Photoshop</p>
          <div class="ea-light-grey ea-round-xlarge ea-small">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star "></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star "></span>
            <span class="fa fa-star"></span>

          </div>

          <p>Sketch</p>
          <div class="ea-light-grey ea-round-xlarge ea-small">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
             <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star "></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star "></span>
            <span class="fa fa-star"></span>
          </div>

          <p>MS Word, PowerPoint, Visio, Project</p>
          <div class="ea-light-grey ea-round-xlarge ea-small">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
          </div>

          <br>

          <p class="ea-large"><b><i class="fa fa-asterisk fa-fw ea-margin-right ea-text-teal"></i>Programming Skills</b></p>
          <p>C Programming</p>
          <div class="ea-light-grey ea-round-xlarge ea-small">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star "></span>
            <span class="fa fa-star"></span>

          </div>

          <p>Java (OOP)</p>
          <div class="ea-light-grey ea-round-xlarge ea-small">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star "></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star "></span>
            <span class="fa fa-star"></span>
          </div>

          <p>C-sharp .Net</p>
          <div class="ea-light-grey ea-round-xlarge ea-small">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
          </div>

          <p>HTML, CSS</p>
          <div class="ea-light-grey ea-round-xlarge ea-small">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
          </div>

          <br>

          <p class="ea-large"><b><i class="fa fa-asterisk fa-fw ea-margin-right ea-text-teal"></i>Design Skills</b></p>
          <p>User Interfaces</p>
          <div class="ea-light-grey ea-round-xlarge ea-small">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star "></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star "></span>
            <span class="fa fa-star"></span>

          </div>

          <p>User Flows</p>
          <div class="ea-light-grey ea-round-xlarge ea-small">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
             <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star "></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star "></span>
            <span class="fa fa-star"></span>
          </div>

        
          <br>


          <p class="ea-large ea-text-theme"><b><i class="fa fa-globe fa-fw ea-margin-right ea-text-teal"></i>Languages Skills</b></p>
          <p>English</p>
          <div class="ea-light-grey ea-round-xlarge">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star "></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star "></span>
            <span class="fa fa-star"></span>
          </div>
          <p>Bengali (Mother Tongue)</p>
          <div class="ea-light-grey ea-round-xlarge">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
          </div>
        
          <br>

        </div>
      </div><br>

    </div>

    <div class="ea-twothird">

      <?php 

      if(isset($_POST['addskill'])){
        $name = $_POST['sname'];
        $level = $_POST['level'];
        

        $sql = "INSERT INTO `computer&software_skills` (`id`, `skillname`, `skilllevel`) VALUES (NULL, '$name', '$level')";

        if (mysqli_query($conn, $sql)){
          $last_id = mysqli_insert_id($conn);
          $code = "u-".$last_id;
          $sql1 = "update `computer&software_skills` set code ='$code' where id = $last_id ";
          if (mysqli_query($conn, $sql1)){
            echo "<script> window.location='mycv.php'; </script>";
          }
          
        }
        
      }    
      //print_r($_POST);
      ?>



    
      <div class="ea-container ea-card right-1  ea-margin-bottom">
        <h2 class="ea-text-grey ea-padding-16"><i class="fa fa-suitcase fa-fw ea-margin-right ea-xxlarge ea-text-teal"></i>Add Skill</h2>
        <div class="ea-container">
          <form class="w3-container w3-card-4" method="post">
  <p>      
  <label class="w3-text-blue"><b>Skill Name</b></label>
  <input class="w3-input w3-border" name="sname" type="text"></p>
  <p>      
  <label class="w3-text-blue"><b>Skill Level</b></label>
  <input class="w3-input w3-border" name="level" type="number"></p>
  <p>      
  <button class="w3-btn w3-blue" name="addskill">Add</button></p>
</form>
          <hr>
        </div>  
  
 <br>
</body>
</html>
