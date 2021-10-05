<html>
<head>
    <title>Student Information</title>
    <link rel="stylesheet" href="example.html">
</head>
<body>
<h2> Student Information </h2>
<?php
$name = $_POST["name"];
$gender = $_POST["gender"];
$class = $_POST["class"];
$university = $_POST["university"];
$email= $_POST["email"];
$telephone = $_POST["telephone"];
$address = $_POST["address"];
$hobbies = $_POST["hobby"];
print ("<br> Name: $name");
print ("<br> Gender: $gender");
print ("<br> Class: $class");
print ("<br> University: $university");
print ("<br> Telephone: $telephone");
print ("<br> Address: $address");
print ("<br> Hobbies:");
foreach($hobbies as $selected){
    print ("$selected");
}
?>
</form>
</body>

</html>