<!DOCTYPE html>
<html>
<head>
  <title>Tests de cours PHP</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="./css/style.css" />
  <link href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,500,700,900" rel="stylesheet">
  <style media="screen">
  * {
    box-sizing: border-box;/* pour maîtriser width et flex-basis */
  }

  html {
    display: flex;
    flex-direction: column;/* correction bug IE de min-height non appliqué à body */
  }

  body {
    display: flex;/* crée un contexte flex pour ses enfants */
    flex-direction: column;/* affichage vertical */
    min-height: 100vh;/* toute la hauteur du viewport */
  }

  .wrapper {
    flex: 1 1 auto;/* occupe la hauteur restante */
    display: flex;/* crée un contexte flex pour ses enfants */
  }

  article {
    flex: 1;/* occupe la largeur restante */
  }

  nav {
    order: -1;/* nav s'affiche en premier */
    background: #dd8;
  }

  body {
    margin: 0;
  }

  nav {margin:0;width:15%;min-width: 300px;background: #A5FFE8;}

  footer {
    display: flex;
  }

  .articles_container {width:100%;margin:0;display:flex;flex-flow:row wrap;justify-content:center;align-content:center;align-items:center;}
  .article_container {margin:5px 10px 30px 10px;width:-webkit-calc(40% - 2px);width:-moz-calc(40% - 2px);width:calc(40% - 2px);border-radius:5px;border:1px #F4F4FF solid;min-width: 400px;}
  .article_info {background-color: #F4F4FF;font-size: 0.8em;padding:5px 10px;line-height: 2em;}
  .article_tags, .article_date {width:-webkit-calc(50% - 2px);width:-moz-calc(50% - 2px);width:calc(50% - 2px);display:inline-block;}
  .article_tags {text-align:left;float: left;}
  .article_date {text-align:right;float: none;}
  .article_image {height:100px}
  .article_description {padding: 5px;height:400px;}
  /* Responsive (fenêtres de moins de 640px) */
  @media (max-width: 640px) {
    .wrapper {
      /* affichage vertical */
      flex-direction: column;
    }

    nav,
    article {
      /* pour écraser la valeur 0, due au flex: 1 */
      flex-basis: auto;
    }

    nav {
      /* pour écraser la valeur 10em */
      width: auto;
      /* nav reprend sa place */
      order: -1;
      width: 100%;
      height:50px;
    }
  }
  </style>
</head>
<body>
  <div class="wrapper">
    <article class="articles_container">
      <?php
      for ($times = 0; $times <8; $times++)
      {
        ?>
        <div class="article_container">
          <div class="article_image">
            <img src="" alt="article image">
          </div>
          <div class="article_description">
            <h2>Title of article</h2>
            <p>Description of the article</p>
          </div>
          <div class="article_info">
            <div class="article_tags">
              tag1, tag2
            </div>
            <div class="article_date">
              1 janvier 2018
            </div>
          </div>
        </div>
        <?php
      }
      ?>
    </article>
    <nav>navigation</nav>
  </div>
  <?php include('./footer.php'); ?>
</body>
</html>
