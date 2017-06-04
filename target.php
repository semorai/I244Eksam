<!-- Idee postituste jaoks sain siit:
https://stackoverflow.com/questions/28160179/how-to-take-inputted-text-from-a-textarea-and-display-it-on-another-page-with-ph -->


<?php
  /* ensure that the data has been posted */
  if($_SERVER['REQUEST_METHOD'] == 'POST') {

    /* read the data from $_POST */
	$Title1 = $_POST['Title1'];
    $Comment1 = $_POST['Comment1'];
	$Title2 = $_POST['Title2'];
    $Comment2 = $_POST['Comment2'];
	$Title3 = $_POST['Title3'];
    $Comment3 = $_POST['Comment3'];
	$Title4 = $_POST['Title4'];
    $Comment4 = $_POST['Comment4'];
	$Title5 = $_POST['Title5'];
    $Comment5 = $_POST['Comment5'];
	$Title6 = $_POST['Title6'];
    $Comment6 = $_POST['Comment6'];
	$Title7 = $_POST['Title7'];
    $Comment7 = $_POST['Comment7'];
	$Title8 = $_POST['Title8'];
    $Comment8 = $_POST['Comment8'];
	$Title9 = $_POST['Title9'];
    $Comment9 = $_POST['Comment9'];
	$Title10 = $_POST['Title10'];
    $Comment10 = $_POST['Comment10'];
	
	   

    /* here you can do whatever you want with the data, output it, store it in a database ... */
	
	echo "Title1: ".$Title1."<br>";
    echo "Comment1: ".$Comment1."<br>";
	echo "Title2: ".$Title2."<br>";
    echo "Comment2: ".$Comment2."<br>";
	echo "Title3: ".$Title3."<br>";
    echo "Comment3: ".$Comment3."<br>";
	echo "Title4: ".$Title4."<br>";
    echo "Comment4: ".$Comment4."<br>";
	echo "Title5: ".$Title5."<br>";
    echo "Comment6: ".$Comment6."<br>";
	echo "Title7: ".$Title7."<br>";
    echo "Comment8: ".$Comment8."<br>";
	echo "Title9: ".$Title9."<br>";
    echo "Comment9: ".$Comment9."<br>";
	echo "Title10: ".$Title10."<br>";
    echo "Comment10: ".$Comment10."<br>";

    

  }
?>