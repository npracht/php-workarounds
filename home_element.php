<!DOCTYPE HTML>
<html>
<head>
  <title>Tests de cours PHP</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="./css/style.css" />
  <link href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,500,700,900" rel="stylesheet">
  <style media="screen">
  body {display: flex;}
  .articles_container {width:90%;margin:0 5%;display:flex;flex-flow:row wrap;justify-content:center;align-content:center;align-items:center;}
  .article_container {margin:5px 10px 30px 10px;width:-webkit-calc(40% - 2px);width:-moz-calc(40% - 2px);width:calc(40% - 2px);border-radius:5px;border:1px #F4F4FF solid;min-width: 400px;}
  .article_info {background-color: #F4F4FF;font-size: 0.8em;padding:5px 10px;line-height: 2em;}
  .article_tags, .article_date {width:-webkit-calc(50% - 2px);width:-moz-calc(50% - 2px);width:calc(50% - 2px);display:inline-block;}
  .article_tags {text-align:left;float: left;}
  .article_date {text-align:right;float: none;}
  .article_image {height:100px}
  .article_description {padding: 5px;height:400px;}

  nav {background: yellow;width:300px;}
  @media screen and (max-width: 970px) {
    .articles_container {width:100%;margin:0;}
    .article_container {width:-webkit-calc(90% - 2px);width:-moz-calc(90% - 2px);width:calc(90% - 2px);min-width: 300px;}
  }
  </style>
</head>
<body>
  <?php include('./menu.php'); ?>
  <div class="articles_container">
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
  </div>
  <?php include('./footer.php'); ?>
</body>
</html>
