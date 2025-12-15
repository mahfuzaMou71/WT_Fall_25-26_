<!DOCTYPE html>
<html>
<head><title>PHP Lab</title>
<style>
    body { font-family: Arial; margin: 30px; }
    h2 { margin-top: 40px; }
    .error { color: red; }
    input[type=text], input[type=number] {
        padding: 5px;
        margin: 5px 0;
    }
</style>
</head>

<body>
<h1>PHP Validation Lab</h1>

<?php

// Initialize variables
$name = $email = $dd = $mm = $yy = $gender = $dept = "";
$hobbies = [];

$nameerror = $emailerror = $doberror = $gendererror = $hobbyerror = $depterror = "";

function test_input($data) { return trim($data); }

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    /* ---------- Name ---------- */
    if (empty($_POST["name"])) {
        $nameerror = "Name cannot be empty";
    } else {
        $name = test_input($_POST["name"]);
        if (!preg_match("/^[A-Za-z][A-Za-z.\- ]*$/", $name)) {
            $nameerror = "Invalid name format";
        } else {
            $words = preg_split("/\s+/", trim($name));
            if (count($words) < 2) {
                $nameerror = "Must contain at least two words";
            }
        }
    }

    /* ---------- Email ---------- */
    if (empty($_POST["email"])) {
        $emailerror = "Email cannot be empty";
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailerror = "Invalid email address";
        }
    }

    /* ---------- Date of Birth ---------- */
    $dd = trim($_POST["dd"]);
    $mm = trim($_POST["mm"]);
    $yy = trim($_POST["yy"]);

    if ($dd == "" || $mm == "" || $yy == "") {
        $doberror = "All fields required";
    } elseif (!ctype_digit($dd) || !ctype_digit($mm) || !ctype_digit($yy)) {
        $doberror = "Must be numbers";
    } elseif ($dd < 1 || $dd > 31 || $mm < 1 || $mm > 12 || $yy < 1953 || $yy > 1998) {
        $doberror = "Out of valid range";
    }

    /* ---------- Gender (Radio) ---------- */
    if (empty($_POST["gender"])) {
        $gendererror = "Please select one";
    } else {
        $gender = $_POST["gender"];
    }

    /* ---------- Hobbies (Checkbox) ---------- */
    if (empty($_POST["hobbies"]) || count($_POST["hobbies"]) < 2) {
        $hobbyerror = "Select at least two";
    } else {
        $hobbies = $_POST["hobbies"];
    }

    /* ---------- Department (Dropdown) ---------- */
    if (empty($_POST["dept"])) {
        $depterror = "Please choose one";
    } else {
        $dept = $_POST["dept"];
    }
}
?>

<form method="post" action="">

<h2>Task 1: Name</h2>
Name:  
<input type="text" name="name" value="<?php echo $name; ?>">
<span class="error"><?php echo $nameerror; ?></span>

<h2>Task 2: Email</h2>
Email:
<input type="text" name="email" value="<?php echo $email; ?>">
<span class="error"><?php echo $emailerror; ?></span>

<h2>Task 3: Date of Birth</h2>
dd: <input type="text" name="dd" size="2" value="<?php echo $dd; ?>">
mm: <input type="text" name="mm" size="2" value="<?php echo $mm; ?>">
yyyy: <input type="text" name="yy" size="4" value="<?php echo $yy; ?>">
<span class="error"><?php echo $doberror; ?></span>

<h2>Task 4: Gender</h2>
<input type="radio" name="gender" value="Male" <?php if ($gender=="Male") echo "checked"; ?>> Male
<input type="radio" name="gender" value="Female" <?php if ($gender=="Female") echo "checked"; ?>> Female
<input type="radio" name="gender" value="Other" <?php if ($gender=="Other") echo "checked"; ?>> Other
<br>
<span class="error"><?php echo $gendererror; ?></span>

<h2>Task 5: Hobbies</h2>
<input type="checkbox" name="hobbies[]" value="Reading" <?php if(in_array("Reading",$hobbies)) echo "checked"; ?>> Reading
<input type="checkbox" name="hobbies[]" value="Sports" <?php if(in_array("Sports",$hobbies)) echo "checked"; ?>> Sports
<input type="checkbox" name="hobbies[]" value="Music" <?php if(in_array("Music",$hobbies)) echo "checked"; ?>> Music
<input type="checkbox" name="hobbies[]" value="Travel" <?php if(in_array("Travel",$hobbies)) echo "checked"; ?>> Travel
<br>
<span class="error"><?php echo $hobbyerror; ?></span>

<h2>Task 6: Department</h2>
<select name="dept">
    <option value="">Select</option>
    <option value="CSE" <?php if($dept=="CSE") echo "selected"; ?>>CSE</option>
    <option value="EEE" <?php if($dept=="EEE") echo "selected"; ?>>EEE</option>
    <option value="BBA" <?php if($dept=="BBA") echo "selected"; ?>>BBA</option>
    <option value="ENG" <?php if($dept=="ENG") echo "selected"; ?>>ENG</option>
</select>
<span class="error"><?php echo $depterror; ?></span>

<br><br><br>
<input type="submit" value="Submit All">

</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" &&
    $nameerror=="" && $emailerror=="" && $doberror=="" &&
    $gendererror=="" && $hobbyerror=="" && $depterror=="")
{
    echo "<h2>Your Input:</h2>";
    echo "Name: $name<br>";
    echo "Email: $email<br>";
    echo "DOB: $dd-$mm-$yy<br>";
    echo "Gender: $gender<br>";
    echo "Hobbies: ".implode(", ", $hobbies)."<br>";
    echo "Department: $dept<br>";
}
?>

</body>
</html>
