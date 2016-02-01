<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9 ie8"> <![endif]-->
<!--[if IE 9]>         <html class="no-js gt-ie9 ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js gt-ie9"> <!--<![endif]-->
<head>
  <!--

    Description: This can be converted back to .html if no php is used
    Version: 0.1
    Author:

  //-->

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- #DNS prefetching -->
  <!-- http://csswizardry.com/2013/01/front-end-performance-for-web-designers-and-front-end-developers -->
  <link rel="dns-prefetch" href="//ajax.googleapis.com">
  <link rel="dns-prefetch" href="//google-analytics.com">

  <!-- #Asset Prefetching -->
  <!-- Fetch and Download Assets before requested by the user  -->
  <!-- http://csswizardry.com/2013/01/front-end-performance-for-web-designers-and-front-end-developers/#section:resource-prefetching -->
  <link rel="prefetch" href="">

  <!-- #Typekit -->

  <title>Webapp Starter</title>
  <meta name="description" content="">
  <meta name="robots" content="all">

  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="apple-mobile-web-app-capable" content="yes">

  <!-- MS Tap Highlight for Windows Phones -->
  <!-- The tag is specific to Internet Explorer 10 on Windows Phone, and does not apply to Internet Explorer 10 on Windows. -->
  <!-- http://stackoverflow.com/questions/7508100/webkit-tap-highlight-color-in-windows-phone -->
  <meta name="msapplication-tap-highlight" content="no">

  <!-- Windows 8 Start Tile -->
  <meta name="application-name" content=""/>
  <meta name="msapplication-TileColor" content="#"/>
  <meta name="msapplication-TileImage" content="start.png"/>
  
  <!-- Android browser header color -->
  <meta name="theme-color" content="#999999">

  <!-- Place favicon.ico and apple-touch-icon(s) in the root directory -->
  <!-- http://mathiasbynens.be/notes/rel-shortcut-icon -->
  <!-- http://mathiasbynens.be/notes/touch-icons -->

  <!-- CSS -->
  <link rel="stylesheet" href="css/styles.css">

  <!-- Modernizer, cause some browsers suck -->
  <!-- <script src="js/libs/modernizr.js"></script> -->

  <!--[if lt IE 10]> <script src="scripts/html5shiv.min.js"></script> <![endif]-->


</head>
<body class="no-js">

  <!-- app -->
  <div class="app-wrapper">

  <!-- header -->
  <div class="fullwidth-wrapper bg-grey">
    <header class="main-header l-constrained cf">
      <div class="logo-wrapper">
        <a href="#">
          <img class="logo" src="/img/logo.svg" alt="logo">
        </a>
      </div>

      <div id="mobile-nav-toggle" class="mobile-nav-toggle">
        <div class="one"></div>
        <div class="two"></div>
        <div class="three"></div>
      </div>

      <nav class="main-nav" role="navigation">
        <ul class="nav main-nav-wrapper">
          <li class="main-nav-item">
            <a href="#">Home</a>
          </li>
          <li class="main-nav-item">
            <a href="#">Cart</a>
          </li>
          <li class="main-nav-item">
            <a href="#">Shop</a>
          </li>
          <li class="main-nav-item">
            <a href="#">About</a>
          </li>        
        </ul>
      </nav>
      <!-- tap anywhere to close -->
      <div class="mobile-nav-toggle--close"></div>
    </header>
  </div>

  <main class="main-wrapper l-constrained">

    <header>
      <h1>Hello World</h1>
      <h3>Webapp Starter mini framework, using Sass, Grunt & Bower.</h3>
    </header>
    
    <?php  echo "<p>output from php server</p>" ?>
        

    <section class="main-content">

      <h3>Content \o/</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
        Qui id odio voluptate ducimus iusto quis ex iure reiciendis consectetur error, 
        porro aliquam deleniti quibusdam placeat repellat 
        consequatur, minus, optio exercitationem?</p>
      <section class="form-test">
        <form action="#">
          <fieldset>
            <input type="checkbox" required name="test" id="test">
            <label for="test">Test checkbox</label>
          </fieldset>
          <fieldset>
            <input type="radio" required name="test-radios" id="rad-1"><label for="rad-1">Test Radio 1</label>
            <input type="radio" name="test-radios" id="rad-2"><label for="rad-2">Test Radio 2</label>
            <input type="radio" name="test-radios" id="rad-3"><label for="rad-3">Test Radio 3</label>
          </fieldset>
          <fieldset>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="input" required>
            <label for="surname">Surname</label>
            <input type="text" name="surname" id="surname" class="input">
            <textarea name="message" id="message" cols="30" rows="10"></textarea>
          </fieldset>

          <input type="submit" value="Valider">
        </form>
      </section>

      <section class="pd-1 bg-grey">

        <h4>Buttons</h4>

        <button>Button element</button>
        <button class="btn-primary">Btn Primary</button>
        <button class="btn-secondary">Btn secondary</button>
        <a href="#" class="btn btn-primary">btn link</a>

      </section>

      <p class="m1">Voila !</p>

    </section>


    
  </main>
  
  <div class="fullwidth-wrapper bg-grey fixed-bottom">

    <div class="pre-footer bg-red white">
      <ul class="nav l-constrained list-h-equal list-h-equal--5">
        <li class="list-item"><a href="#">social link</a></li>
        <li class="list-item"><a href="#">social link</a></li>
        <li class="list-item"><a href="#">social link</a></li>
        <li class="list-item"><a href="#">social link</a></li>
        <li class="list-item"><a href="#">social link</a></li>
      </ul>
    </div>

    <footer class="main-footer l-constrained cf">

      <!-- <h3>Footer \o/</h3> -->
      <!-- fixed width columns -->
      <section class="footer-section col-3-5 stack-medium">
        <div class="col-1-3 stack-small">
          <ul class="footer-links">
            <li class="footer-item"><a href="#">footer link</a></li>
            <li class="footer-item"><a href="#">footer link</a></li>
            <li class="footer-item"><a href="#">footer link</a></li>
            <li class="footer-item"><a href="#">footer link</a></li>
          </ul>
        </div>
        <div class="col-1-3 stack-small">
          <ul class="footer-links">
            <li class="footer-item"><a href="#">footer link</a></li>
            <li class="footer-item"><a href="#">footer link</a></li>
            <li class="footer-item"><a href="#">footer link</a></li>
            <li class="footer-item"><a href="#">footer link</a></li>
          </ul>
        </div>
        <div class="col-1-3 stack-small">
          <ul class="footer-links">
            <li class="footer-item"><a href="#">footer link</a></li>
            <li class="footer-item"><a href="#">footer link</a></li>
            <li class="footer-item"><a href="#">footer link</a></li>
            <li class="footer-item"><a href="#">footer link</a></li>
          </ul>
        </div>
      </section>

      <!-- fluid / adaptive columns -->

      <section class="footer-section col-2-5 stack-medium">
        <div class="footer-col">
          <ul class="footer-links">
            <li class="footer-item"><a href="">footer link secondary</a></li>
            <li class="footer-item"><a href="">footer link secondary</a></li>
            <li class="footer-item"><a href="">footer link secondary</a></li>
            <li class="footer-item"><a href="">footer link secondary</a></li>
            <li class="footer-item"><a href="">footer link secondary</a></li>
            <li class="footer-item"><a href="">footer link secondary</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <ul class="footer-links">
            <li class="footer-item"><a href="">footer link secondary</a></li>
            <li class="footer-item"><a href="">footer link secondary</a></li>
            <li class="footer-item"><a href="">footer link secondary</a></li>
            <li class="footer-item"><a href="">footer link secondary</a></li>
            <li class="footer-item"><a href="">footer link secondary</a></li>
            <li class="footer-item"><a href="">footer link secondary</a></li>
          </ul>
        </div>
      </section>
    
    </footer>
  </div>

  </div>


  <!-- SCRIPTS -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="scripts/plugins.js"></script>
  <script src="scripts/main.js"></script>

  <!-- Google Analytics -->

</body>
</html>
