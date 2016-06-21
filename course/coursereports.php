<?php 
//IMathAS:  Course Recent Report
//(c) 2016 David Cooper, David Lippman

/*** master php includes *******/
require("../validate.php");


/*** pre-html data manipulation, including function code *******/

//set some page specific variables and counters
$overwriteBody = 0;
$body = "";
$pagetitle = "Course Reports";
$cid = intval($_GET['cid']);

if (!isset($teacherid) && !isset($tutorid) && !isset($studentid) && !isset($guestid)) { // loaded by a NON-teacher
	$overwriteBody=1;
	$body = _("You are not enrolled in this course.  Please return to the <a href=\"../index.php\">Home Page</a> and enroll\n");
} else { // PERMISSIONS ARE OK, PROCEED WITH PROCESSING

}

/******* begin html output ********/
require("../header.php");

/**** post-html data manipulation ******/
// this page has no post-html data manipulation

/***** page body *****/
/***** php display blocks are interspersed throughout the html as needed ****/
if ($overwriteBody==1) {
	echo $body;
} else {

	$curBreadcrumb .= "$breadcrumbbase <a href=\"course.php?cid=$cid\">$coursename</a> ";
	$curname = $coursename;
	echo '<div class="breadcrumb">'.$curBreadcrumb.' &gt; Course Reports</div>';
	
	echo '<ul class="nomark">';
	echo '<li><a href="report-weeklylab.php?cid='.$cid.'">Weekly Report - Lab Style Courses</a></li>';
	echo '</ul>';
}

require("../footer.php");

?>

