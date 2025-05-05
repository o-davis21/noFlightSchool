<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title><?php echo $page ?></title>
  <link rel="stylesheet" type="text/css" href="<?php echo $path; ?>styles.css"/>
</head>
<body>
    <header>
        <div class="container">
            <div class="header-flex">
                <h1>noFlightSchool</h1>
                <button class="nav-toggle" aria-label="toggle navigation">&#9776;</button>
            </div>
            <nav class="nav">
            <ul class="nav-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="what-is-unix.php">What is UNIX</a></li>
                <li><a href="getting-started.php">Getting Started</a></li>
                <li><a href="web-hosting.php">Web Hosting</a></li>
                <li><a href="tutorial.php">Tutorials</a></li>
                <li><a href="quiz.php">Quizzes</a></li>
                <li><a href="leaderboard.php">Leaderboard</a></li>
            </ul>
            </nav>
        </div>
    </header>