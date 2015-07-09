<?php
/*
 *
 * Copyright NewGame+ 
 * Template Name: NG+ Game Search
 * Created By: Luke Michaels - luke@newgameplus.co
 *
 */
?>
<?php get_header();?>

<?php 
	// Force script errors for testing
	error_reporting(E_ALL);
	ini_set('display_errors', '1');
	
	// Initialize search output vairable
	$search_output = "";

	// Process the search query
	if(isset($_POST['searchquery']) && $_POST['searchquery'] != ""){
		
		// filter search query user input
		$searchquery = preg_replace('#[^a-z 0-9?!:]#i', '', $_POST['searchquery']);
		if($_POST['game-filter'] == "Title"){
			$sqlCommand = "(SELECT id, title AS titles FROM ng_titles WHERE title LIKE '%searchquery%') UNION (SELECT id, publisher AS titles FROM ng_publishers WHERE publisher LIKE '%searchquery%')"; 
		} else if($_POST['game-filter'] == "Publisher"){
			$sqlCommand = "SELECT id, publisher AS titles FROM ng_publishers WHERE publisher LIKE '%searchquery%'";
		} else if($_POST['game-filter'] == "Platform"){
			$sqlCommand = "SELECT id, platform AS titles FROM ng_platforms WHERE platform LIKE '%searchquery%'";
		}
		
		// connect to database
		// include_once("dbconnect.php");
		$query = mysql_query($sqlCommand) or die(mysql_error());
		$count = mysql_num_rows($query);
		if($count > 1){
			$search_output .= "<hr />$count results for <strong>$searchquery</strong><hr />$sqlCommand<hr />";
			while($row = mysql_fetch_array($query)){
				$id = $row["id"];
				$title = $row["titles"];
				$search_output .= "Item ID: $id - $titles<br />";
			}
		} else {
			$search_output ="<hr />0 results for <strong>$searchquery</strong><hr />$sqlCommand";
		}
	}
?>
<div id="game-search-wrapper">

	<h2>Find a game:</h2>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		Search: <input name="gamesearchquery" type="text" size="80" maxlength="88">
		<input name="search-button" type="submit"><br />
		Filter by:
		<select name="game-filter">
			<option value="Title">Title</option>
			<option value="Publisher">Publisher</option>
			<option value="Platform">Platform</option>
		</select>
	</form>
	
	<h2>Results:</h2>
	<?php echo $search_output; ?>

</div><!--game-search-wrapper-->

<?php get_footer();?>