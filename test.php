<!DOCTYPE HTML>
<html>
<head>
  <title>Tests de cours PHP</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="./css/style.css" />
  <link href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,500,700,900" rel="stylesheet">
</head>
<body>
  <div id="body">
  <h1>
    <?php
    // Test commentaire non visible
    $username = 'Norman';
    echo 'Le blog de ' . $username . ' (H1)!';
    ?>
  </h1>
  <?php
  for ($times = 0; $times <10; $times++)
  {
    ?>
    <div class="article borderbot">
      <h2>
        Titre h2 article
        <?php
        echo $times;
        ?>
      </h2>
      <h3>
        Titre h3
      </h3>
      <p>
        Paragraphe et ceci est <a href="">un lien</a>.
      </p>
      <ul>
        <li>
          Puce 1
        </li>
        <li>
          Puce 2
        </li>
        <li>
          Puce 3
        </li>
      </ul>
      <blockquote>
        Ceci est une citation
      </blockquote>
    </div>
    <?php
  }
  ?>
</div>
  <?php include('./footer.php'); ?>
</body>
</html>
