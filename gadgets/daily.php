<?php include "includes/config.php" ?>
<?php include "includes/header.php" ?>

<!--body content starts here-->
<?php echo '<a href="daily.php?day=sun">Sunday</a><br />' ?>     
<?php echo '<a href="daily.php?day=mon">Monday</a><br />' ?> 
<?php echo '<a href="daily.php?day=tues">Tuesday</a><br />' ?> 
<?php echo '<a href="daily.php?day=wed">Wednesday</a><br />' ?> 
<?php echo '<a href="daily.php?day=thurs">Thursday</a><br />' ?> 
<?php echo '<a href="daily.php?day=fri">Friday</a><br />' ?> 
<?php echo '<a href="daily.php?day=sat">Saturday</a><br />' ?> 


<img src="images/<?=$image?>" alt="Today's Daily Cat!" id="cat" />
<?=$content?>

<!--body content ends here-->

<?php include "includes/footer.php" ?>