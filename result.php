<?php
	$path = './';
	$page = 'Quiz Result';
	include $path.'assets/header.php';
?>

<main>
    <h2>Quiz Results</h2>

    <?php
        $q1Ans = $_POST['q1'];
        $q2Ans = $_POST['q2'];
        $q3Ans = $_POST['q3'];
        $q4Ans = $_POST['q4'];
        $q5Ans = $_POST['q5'];
        $q6Ans = $_POST['q6'];

        $score = 0;

        if ($q1Ans == 'q1B') {
            $score += 1;
        }
        if ($q2Ans == 'q2D') {
            $score += 1;
        }
        if ($q3Ans == 'q3A') {
            $score += 1;
        }
        if ($q4Ans == 'q4B') {
            $score += 1;
        }
        if ($q5Ans == 'q5C') {
            $score += 1;
        }
        if ($q6Ans == 'q6A') {
            $score += 1;
        }
    ?>

    <div>
        <?php
            echo "<br>Your Score Is";
            echo ($score == '')? '.': ": $score.";
            echo "</div>";
        ?>

</main>

<?php
	include $path.'assets/footer.php';
?>