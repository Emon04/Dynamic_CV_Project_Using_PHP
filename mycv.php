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

<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
</style>
<body class="ea-light-grey">

  <a class="float-left" href="logout.php">Logout</a>

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

         


          <p class="ea-large"><b><i class="fa fa-asterisk fa-fw ea-margin-right ea-text-teal"></i>Computer & Software Skills</b><a href="add.php"><i class="fa fa-plus fa-fw ea-right ea-large ea-text-teal"></i></a></p>
           <?php
          
          $sql = "SELECT * FROM `computer&software_skills`" ;
          $result = mysqli_query($conn, $sql);

             while($row = mysqli_fetch_assoc($result)) {
                 echo "<p>id: " . $row["id"]. " - skills: " . $row["skillname"]. " " . $row["skilllevel"]. $row["code"]."</p>";
                 ?>
                 <div class="ea-light-grey ea-round-xlarge ea-small">
                  <?php 

                 echo '<p><a href="mycv.php?del='.$row["id"].'"> <i class="fa fa-remove fa-fw ea-right ea-large ea-text-teal"></i> </a></p>';


                 echo '<p><a href="edit.php?edit='.$row["id"].'"> <i class="fa fa-edit fa-fw ea-right ea-large ea-text-teal"></i> </a></p>';



                  $sklevel = $row["skilllevel"] /10;
                  $count = 0;
                    for ($i=0; $i<10; $i++) { 
                  ?>
                  <span class="fa fa-star <?php if($count <$sklevel){ echo('checked'); $count++;} ?>"></span>

                  <?php
                    }


                   ?>
          </div>

          <?php 
              } 

              if (isset($_GET['del'])){

                      $del_id=$_GET['del'];
                      $sql = "DELETE FROM `computer&software_skills` WHERE id=$del_id";
                    

                    if(mysqli_query($conn, $sql)){
                      echo "<script> window.location='mycv.php'; </script>";
                    }

                    }


          ?>

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
    
      <div class="ea-container ea-card right-1  ea-margin-bottom">
        <h2 class="ea-text-grey ea-padding-16"><i class="fa fa-suitcase fa-fw ea-margin-right ea-xxlarge ea-text-teal"></i>Work Experience</h2> 
        <a href="addwork.php"><i class="fa fa-plus fa-fw ea-right ea-large ea-text-teal"></i></a></p>
           
        <div class="ea-container">
          <?php
          
          $sql = "SELECT * FROM `work_experience`" ;
          $result = mysqli_query($conn, $sql);

             while($row = mysqli_fetch_assoc($result)) { ?>

                  <div class="w3-container">
                  <h5 class="w3-opacity"><b><?php echo  $row['work_name'];  ?></b></h5>
                  <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $row['from_date']; ?> - <span class="w3-tag w3-teal w3-round"><?php echo $row['to_date']; ?></span></h6>
                  <p><?php echo $row['description']; ?></p>
                  <hr>
                
                </div>
          <?php 
              } 
          ?>
      </div>
    </div>

      <div class="ea-container right-1 ea-card ea-margin-bottom">
        <h2 class="ea-text-grey ea-padding-16"><i class="fa fa-certificate fa-fw ea-margin-right ea-xxlarge ea-text-teal"></i>Education</h2>

        <a href="addeducation.php"><i class="fa fa-plus fa-fw ea-right ea-large ea-text-teal"></i></a></p>
           
        <div class="ea-container">
          <?php
          
          $sql = "SELECT * FROM `education`" ;
          $result = mysqli_query($conn, $sql);

             while($row = mysqli_fetch_assoc($result)) { ?>

                  <div class="w3-container">
                  <h5 class="ea-text-yellow"><b><?php echo  $row['degree'];  ?></b></h5>
                  <h6 class="ea-text-yellow"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $row['institution_name_with_year']; ?> <br>
                  <span class="ea-text-white"><?php echo $row['group_or_department']; ?></span></h6>
                  <p class="ea-text-white"><?php echo $row['board']; ?></p>
                  <p class="ea-text-white"><?php echo $row['cgpa']; ?></p>
                  <hr>
                
                </div>
          <?php 
              } 
          ?>
        </div>

      <div class="ea-container right-1 ea-card ">
        <h2 class="ea-text-grey ea-padding-16"><i class="fa fa-globe fa-fw ea-margin-right ea-xxlarge ea-text-teal"></i>Interests</h2>
        <div class="ea-container int-css">
          <img src="Images/Music_0.png" style="width:80px; height: 60px;">
          <h6 class="ea-text-white" align="center">Music</h6>
        </div>

        <div class="ea-container int-css">
          <img src="Images/volunter.png" style="width:80px; height: 60px;">
          <h6 class="ea-text-white" align="center">Voluntary Works</h6>
        </div>

        <div class="ea-container int-css">
          <img src="Images/Cycling_0.png" style="width:80px; height: 60px;">
          <h6 class="ea-text-white" align="center">Cycling</h6>
        </div>

        <div class="ea-container int-css">
          <img src="Images/Swimming_0.png" style="wwidth:80px; height: 60px;">
          <h6 class="ea-text-white" align="center">Swimming</h6>
        </div>

        <div class="ea-container int-css">
          <img src="Images/Traveling_0.png" style="width:80px; height: 60px;">
          <h6 class="ea-text-white" align="center">Traveling</h6>
        </div> 

      </div>
      <br>

      <div class="ea-container right-1 ea-card ">
        <h2 class="ea-text-grey ea-padding-16"><i class="fa fa-envelope fa-fw ea-margin-right ea-xxlarge ea-text-teal"></i>Reference</h2>
        <div class="ea-container int-css">
          <p class="ea-text-white">Professor Dr. Touhid Bhuiyan</p>
          <p class="ea-text-white">Professor & Head</p>
          <p class="ea-text-white">Department of Software Engineering</p>
          <p class="ea-text-white">Daffodil International University</p>
          <p class="ea-text-white">Cell-Phone: +8801847140016</p>
          <p class="ea-text-white">Email: t.bhuiyan@daffodilvarsity.edu.bd</p>

        </div>
      </div>
      <br>

    </div>


  </div>

</div>

<footer class="ea-container ea-footer ea-center ea-margin-top">
  <p>******Find me on******</p>
  <a href="https://www.facebook.com/em0nahmed" target="_blank" class="fa fa-facebook ea-hover-opacity" style="width: 30px"></a> 
  <a href="https://www.linkedin.com/in/emon-ahmed-093a43161/" target="_blank" class="fa fa-linkedin ea-hover-opacity" style="width: 30px"></a>
  <a href="https://github.com/Emon04" target="_blank" class="fa fa-github ea-hover-opacity" style="width: 30px"></a>

</footer>
 <br>
</body>

</html>
