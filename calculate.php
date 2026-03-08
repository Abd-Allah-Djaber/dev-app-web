<?php

$courses = $_POST['course'];
$credits = $_POST['credits'];
$grades = $_POST['grade'];

$totalPoints = 0;
$totalCredits = 0;

echo "<table>";
echo "<tr><th>Course</th><th>Credits</th><th>Grade</th><th>Points</th></tr>";

for($i=0;$i<count($courses);$i++){

$course = $courses[$i];
$cr = $credits[$i];
$gr = $grades[$i];

$points = $cr * $gr;

$totalPoints += $points;
$totalCredits += $cr;

echo "<tr>
<td>$course</td>
<td>$cr</td>
<td>$gr</td>
<td>$points</td>
</tr>";

}

echo "</table>";

$gpa = $totalPoints / $totalCredits;

echo "<h3>GPA = ".number_format($gpa,2)."</h3>";

?>