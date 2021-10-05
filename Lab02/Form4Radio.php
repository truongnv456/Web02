<html>
<head>
    <Title>Receving Input</Title>
</head>
<body>
    <?php
        $email = $_POST["email"];
        $contact = $_POST["contact"];
        print("<br>Your email address is $email");
        print("<br>Contact preference is $contact");
    ?>
</body>
</html>