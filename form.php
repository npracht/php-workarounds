<!DOCTYPE HTML>
<html>
<head>
  <title>Tests de cours PHP</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="./css/style.css" />
  <link href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,500,700,900" rel="stylesheet">
</head>
<body>
  <p>
    Les nouveaux articles seront bien envoyés à <?php echo htmlspecialchars($_POST['email']);?>
  </p>
</body>
</html>
