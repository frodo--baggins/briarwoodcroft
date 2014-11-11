<!--Website v. PROTOTYPE 0.1--> 
<!--name="file:///C:/Users/Kris/Documents/Evan's%20School/home.html" as "http://www.briarwoodcroft.com/home"-->
<!DOCTYPE html>
<html lang="en-US">
<head>
<title>Search Results | Briarwood Croft</title>
<meta charset="utf-8"/>
<meta name="description" content="All animals at Briarwood Croft are fed organic, non-GMO grain, pastured on organic, non-GMO grasses, and are watered with fresh-well water."/>
<meta name="keywords" content="Briarwood, Croft, animals, organic, non-GMO, farm, fresh-well water"/>
<link type="text/css" rel="stylesheet" href="croft.css"/>
<script src="http://code.jquery.com/jquery-2.0.0.min.js"></script>
<script type="text/javascript" src="formcontrol.js"></script>
<style type="text/css">
#search_results {
width:97.5%;
background-color:green;
padding:1em;
color:white;
border:1px solid black;
}
#search-again {
padding:1em;
width:20em;
}
#search_results form {
float: right;
margin-top:-5%;
}
#search-again #search {
width:75%;
float:left;
}
#search-again #submit-search {
float:right;
}
</style>
</head>
<body>
<h1 id="croft">Briarwood Croft</h1>
<div id="search_results">
<h1>Search Results For  &quot;<?php echo sanitize($_GET["user-search"]) ?>&quot;</h1>
<form id="search-again" action="file:///C:/Users/Kris/Documents/Evan's%20School/search-results.php" method="get" onsubmit="return test()">
<input name="user-search" id="search" type="search" autocomplete="off" placeholder="Search again..."> <input type="submit" name="submit-search" id="submit_search" value="Search">
<p id="error"></p>
</form>
</div>
<?php 
function sanitize($string) {
$string = strip_tags($string);
$string = stripslashes($string);
$string = htmlentities($string);
return $string;
};
?>
<script type="text/javascript">
var field = document.getElementById("search");
var error = document.getElementById("error");
error.style.display = "none";
function test() {
	if(field.value.length === 0) {
			if(x === 1) {
		field.style.border = "1px solid red";
		error.innerHTML = "Please enter a value into the search box before searching.";
		document.getElementById("footer").style.marginBottom = "-40%";
		error.style.display = "inline";
		alert("Please enter a value into the search box before searching.");
			} else {
				field.style.border = "1px solid red";
				error.innerHTML = "Please enter a value into the search box before searching.";
				document.getElementById("footer").style.marginBottom = "-40%";
				error.style.display = "inline";
				var x = 1;
			}
		return false;
	} else if(/[^a-zA-Z ]/.test(field.value)) {
		field.style.border = "1px solid red";
		error.innerHTML = "Only a-z, A-Z, and whitespace allowed in search box";
		error.style.display = "inline";
		return false;
	};
};
</script>
</body>
</html>