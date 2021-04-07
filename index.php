
<?php

if (isset($_GET['page']) && $_GET['page']!=NULL )
{$page=(int)$_GET['page']+1;
$id =(int)$_GET['page'];
}
else 
{$page=1;
$id=1;
}



$question="Is your girl has been regflaged too many time?";
$path="1";

require('config.php');

$sql = "SELECT * FROM `questions` where `id` = '".$id."' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

    $question=$row["question"];
    $path=$row["id"];

  
  }
} else {
 
}

$sql = "SELECT * FROM `answers` where `id` = '1' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

    $score=$row["answer"];
   

  
  }
} else {
  
}

if (isset($_GET['redflag']) && $_GET['redflag']!=NULL )
{
$score=$score+$_GET['redflag'];
$sql = "UPDATE `answers` SET `answer` = '".$score."' WHERE `answers`.`id` = 1;";

if ($conn->query($sql) === TRUE) {
 
} else {
 
}
}
else  $score =0;

$conn->close();

echo $score 
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link rel="shortcut icon" type="image/png" href="https://animaproject.s3.amazonaws.com/home/favicon.png" />
    <meta name="og:type" content="website" />
    <meta name="twitter:card" content="photo" />
    <link rel="stylesheet" type="text/css" href="css/mobile-1.css" />
   
    <meta name="author" content="AnimaApp.com - Design to code, Automated." />
  </head>
  <body style="margin: 0; background: rgba(255, 255, 255, 1)"> 

      

    <input type="hidden" id="anPageName" name="page" value="mobile-1" />
    <div class="container-center-horizontal">
      <div class="mobile-1 screen">
        <div class="rectangle-3-C61RwL"></div>
        <div class="keeps-men-from-her-past-around-C61RwL valign-text-middle tsukushibroundgothic-bold-emperor-17px">
          <?php echo $question; ?>
        </div>
        <a href="index.php<?php echo "?redflag=-1&page=".$page;?>">
        <div class="button-C61RwL"> <img class="ellipse-1-xHxYv9" src="img/ellipse-1@2x.svg" />
          <img class="image-2-xHxYv9" src="img/image-2@2x.png" />
          <img class="image-3-xHxYv9" src="img/image-3@2x.png" />
        </div>
          </a>
          <a href="index.php<?php echo "?redflag=2&page=".$page;?>">
        <div class="button-VMr6Om"> <img class="ellipse-1-8V7Q3m" src="img/ellipse-1@2x.svg" />
          <img class="image-2-8V7Q3m" src="img/image-2@2x.png" />
        </div>
           </a>
        <div class="button-mzXdH9">
          <img class="ellipse-1-EWrWm8" src="img/ellipse-1-2@2x.svg" />
          <img class="image-3-EWrWm8" src="img/image-3-1@2x.png" />
        </div>
        <img class="rectangle-5-C61RwL" src="img/<?php echo $path; ?>.png" />
        <div class="x1-C61RwL"><div class="x1-i3686240-GML0ip tsukushibroundgothic-bold-emperor-17px"><?php echo $page; ?></div></div>
        <div class="x21-C61RwL"><div class="x20-i3696242-w35xNv tsukushibroundgothic-bold-emperor-17px">/20</div></div>
        <div class="group-12-C61RwL smart-layers-pointers">
          <div class="goodone-xFApRQ">Goodone</div>
          <div class="is-it-a-good-girl-xFApRQ">Is it a good girl ?</div>
          <img class="line-1-xFApRQ" src="img/line-1@2x.svg" />
        </div>
      
           <div class="rectangle-7-C61RwL"></div>
        <div class="she-is-a-today-e-free-go-mgtow-C61RwL valign-text-middle">
        <?php 
            if (isset($_GET['page']) && $_GET['page']>15)

           { 
if ($score<=-7) {
  echo "THIS IS A GOOOOOD GIRL, keep it close";
} elseif ($score<= 16) {
  echo "SHE is a today girl , not perfect. Choice you are ok to be alone and prefer to be free , go mgtow";
} else {
  echo "you should RUN !!";
}
           }
else

echo "Will you show what you should do!";
?>
        </div>
      </div>

    </div>
 </body>
</html>
