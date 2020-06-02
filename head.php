<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>
        <?php
        if (!isset($page_title)){
            $page_title = "NMPD Space Adventure";
        }
        echo "NMPD Space Adventure | $page_title";?>
        </title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet"  href="styles.css">
		<link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
		<link rel="stylesheet" href="styles-stars.css">
		<link rel="icon" type="image/png" href="main-images/favicon.png" />
    </head>
    <body>
		<header>
			<div id="logo"><a href="index.php"><img src="main-images/nmpdlogo.png" alt="SAIT's logo"></a></div>
			<div id="navigation">
				<nav role="navigation">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="student-life.php">Student Life</a></li>
						<li><a href="#">Courses <i class="fas fa-caret-down"></i></a>
							<ul class="dropdown">
								<li><a href="detail.php?class=rich&name=Rich Media">Rich Media</a></li>
								<li><a href="detail.php?class=visual&name=Visual Communications">Visual Communications</a></li>
								<li><a href="detail.php?class=web&name=Web Communications">Web Communications</a></li>
								<li><a href="detail.php?class=business&name=Business of New Media">Business of New Media</a></li>
								<li><a href="detail.php?class=production&name=Production Company">Production Company</a></li>
							</ul>
						</li>
					</ul>
				</nav>
			</div>
		</header>