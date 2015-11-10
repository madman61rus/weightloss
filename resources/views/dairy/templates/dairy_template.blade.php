<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properities -->
  <title>Fixed Menu Example - Semantic</title>

   <link rel="stylesheet" type="text/css" href="css/semantic.css">

  <link rel="stylesheet" type="text/css" href="components/reset.css">
  <link rel="stylesheet" type="text/css" href="components/site.css">

  <link rel="stylesheet" type="text/css" href="components/container.css">
  <link rel="stylesheet" type="text/css" href="components/grid.css">
  <link rel="stylesheet" type="text/css" href="components/header.css">
  <link rel="stylesheet" type="text/css" href="components/image.css">
  <link rel="stylesheet" type="text/css" href="components/menu.css">

  <link rel="stylesheet" type="text/css" href="components/divider.css">
  <link rel="stylesheet" type="text/css" href="components/list.css">
  <link rel="stylesheet" type="text/css" href="components/segment.css">
  <link rel="stylesheet" type="text/css" href="components/dropdown.css">
  <link rel="stylesheet" type="text/css" href="components/icon.css">

  <style type="text/css">
  body {
    background-color: #FFFFFF;
  }
  .ui.menu .item img.logo {
    margin-right: 1.5em;
  }
  .main.container {
    margin-top: 7em;
  }
  .wireframe {
    margin-top: 2em;
  }
  .ui.footer.segment {
    margin: 5em 0em 0em;
    padding: 5em 0em;
  }
  </style>

</head>
<body>
<div class="ui one column grid">
  <div class="ui fixed menu row ">
    <div class="ui container">
      <a href="#" class="header item">
        <img class="logo" src="assets/images/logo.png">
        Project Name
      </a>
      <a href="#" class="item">Home</a>
      <div class="ui simple dropdown item">
        Dropdown <i class="dropdown icon"></i>
        <div class="menu">
          <a class="item" href="#">Link Item</a>
          <a class="item" href="#">Link Item</a>
          <div class="divider"></div>
          <div class="header">Header Item</div>
          <div class="item">
            <i class="dropdown icon"></i>
            Sub Menu
            <div class="menu">
              <a class="item" href="#">Link Item</a>
              <a class="item" href="#">Link Item</a>
            </div>
          </div>
          <a class="item" href="#">Link Item</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="ui two column grid"> 

         <div class="ui vertical visible labeled icon menu one wide column">
          <a class="item"><i class="gamepad icon"></i> Games </a>
          <a class="item"><i class="video camera icon"></i> Channels </a>
          <a class="item"><i class="video play icon"></i> Videos </a>
        </div>

          <div class="ui main text container fifteen wide column">
            <h1 class="ui header">Semantic UI Fixed Template</h1>
            <p>This is a basic fixed menu template using fixed size containers.</p>
            <p>A text container is used for the main container, which is useful for single column layouts</p>
            <img class="wireframe" src="assets/images/wireframe/media-paragraph.png">
            <img class="wireframe" src="assets/images/wireframe/paragraph.png">
            <img class="wireframe" src="assets/images/wireframe/paragraph.png">
            <img class="wireframe" src="assets/images/wireframe/paragraph.png">
            <img class="wireframe" src="assets/images/wireframe/paragraph.png">
            <img class="wireframe" src="assets/images/wireframe/paragraph.png">
            <img class="wireframe" src="assets/images/wireframe/paragraph.png">
          </div>
</div>

  <div class="ui inverted vertical footer segment">
    <div class="ui center aligned container">
      <div class="ui stackable inverted divided grid">
        <div class="three wide column">
          <h4 class="ui inverted header">Group 1</h4>
          <div class="ui inverted link list">
            <a href="#" class="item">Link One</a>
            <a href="#" class="item">Link Two</a>
            <a href="#" class="item">Link Three</a>
            <a href="#" class="item">Link Four</a>
          </div>
        </div>
        <div class="three wide column">
          <h4 class="ui inverted header">Group 2</h4>
          <div class="ui inverted link list">
            <a href="#" class="item">Link One</a>
            <a href="#" class="item">Link Two</a>
            <a href="#" class="item">Link Three</a>
            <a href="#" class="item">Link Four</a>
          </div>
        </div>
        <div class="three wide column">
          <h4 class="ui inverted header">Group 3</h4>
          <div class="ui inverted link list">
            <a href="#" class="item">Link One</a>
            <a href="#" class="item">Link Two</a>
            <a href="#" class="item">Link Three</a>
            <a href="#" class="item">Link Four</a>
          </div>
        </div>
        <div class="seven wide column">
          <h4 class="ui inverted header">Footer Header</h4>
          <p>Extra space for a call to action inside the footer that could help re-engage users.</p>
        </div>
      </div>
      <div class="ui inverted section divider"></div>
      <img src="assets/images/logo.png" class="ui centered mini image">
      <div class="ui horizontal inverted small divided link list">
        <a class="item" href="#">Site Map</a>
        <a class="item" href="#">Contact Us</a>
        <a class="item" href="#">Terms and Conditions</a>
        <a class="item" href="#">Privacy Policy</a>
      </div>
    </div>
  </div>

  <script src="js/jquery-2.1.4.min.js"></script>
  <script src="js/semantic.js"></script>

</body>

</html>