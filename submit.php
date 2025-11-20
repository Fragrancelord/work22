<?php
$firstname      = $_POST['firstname'];
$lastname       = $_POST['lastname'];
$gender         = $_POST['gender'];
$dob            = $_POST['dob'];
$state          = $_POST['state'];
$qualification  = $_POST['qualification'];
$degree_class   = $_POST['degree_class'];

if ($firstname == '') {
    echo 'please enter your first name. <a href="index.php">Go back</a>';
    exit;
}
if ($lastname == '') {
    echo 'please enter your last name. <a href="index.php">Go back</a>';
    exit;
}
if ($gender == '') {
    echo 'please enter your gender. <a href="index.php">Go back</a>';
    exit;
}
if ($dob == '') {
    echo 'please enter your dob. <a href="index.php">Go back</a>';
    exit;
}
if ($state == '') {
    echo 'please enter your state. <a href="index.php">Go back</a>';
    exit;
}
if ($qualification == '') {
    echo 'please enter your qualification. <a href="index.php">Go back</a>';
    exit;
}
if ($degree_class == '') {
    echo 'please enter your degree_class. <a href="index.php">Go back</a>';
    exit;
}

$content =
    "Below are the information that was submitted on the website\n" .
    "Firstname: $firstname\n" .
    "Lastname: $lastname\n" .
    "Gender: $gender\n" .
    "dob: $dob\n" .
    "state: $state\n" .
    "qualification: $qualification\n" .
    "degree_class: $degree_class\n\n";

$file = fopen('result.txt', 'a');
fwrite($file, $content);
fclose($file);

echo "<h2>wellcome $firstname $lastname to vdm project</h2>";
?>
