<html lang="en">
<head>
    <title> Coin Flip!</title>
</head>
<body>
    <font size="4" color="blue"> Please pick Heads or Tails!</font>
    <form action="GotFlip.php" method="post">
        <?php
            print "<input type=\"radio\" name=\"pick\" value=0> Heads";
            print "<input type=\"radio\" name=\"pick\" value=0> Tails";
            print "<br>";
        ?>
        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
    </form>
</body>
</html>