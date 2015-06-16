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
  <link rel="dns-prefetch" href="//use.typekit.net">
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

  <!-- Place favicon.ico and apple-touch-icon(s) in the root directory -->
  <!-- http://mathiasbynens.be/notes/rel-shortcut-icon -->
  <!-- http://mathiasbynens.be/notes/touch-icons -->

  <!-- CSS, you gotta have style -->
  <link rel="stylesheet" href="css/styles.css">

  <!-- Modernizer, cause some browsers suck -->
  <!-- <script src="js/libs/modernizr.js"></script> -->

  <!--[if lt IE 10]><!--> <script src="scripts/html5shiv.min.js"></script> <!--<![endif]-->


</head>
<body class="">

  <!-- app -->
  <div class="app-wrapper">

  <header class="main-header l-constrained">
    <h1>Hello World</h1>
    <h3>Webapp Starter mini framework, using Sass, Grunt & Bower.</h3>
    <div class="main-logo">
      <figure class="logo-wrapper">
        <!-- <img src="img/logo.png" alt="" class="logo"> -->
      </figure>
    </div>
  </header>

  <main class="main-wrapper l-constrained">
    
    <?php  echo "output from php server" ?>
    
    <header class="header">
      <h3>Header \o/</h3>
    </header>

    <section class="main-content">
      <h3>Content \o/</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
        Qui id odio voluptate ducimus iusto quis ex iure reiciendis consectetur error, 
        porro aliquam deleniti quibusdam placeat repellat 
        consequatur, minus, optio exercitationem?</p>
    </section>

    <section class="form-test">
      <form action="#">
        <fieldset>
          <input type="checkbox" name="test" id="test">
          <label for="test">Test checkbox</label>
        </fieldset>
        <fieldset>
          <input type="radio" name="test-radios" id="rad-1"><label for="rad-1">Test Radio 1</label>
          <input type="radio" name="test-radios" id="rad-2"><label for="rad-2">Test Radio 2</label>
          <input type="radio" name="test-radios" id="rad-3"><label for="rad-3">Test Radio 3</label>
        </fieldset>
      </form>
    </section>

    <footer class="main-footer">
      <h3>Footer \o/</h3>
    </footer>
    
  </main>

  </div>


  <!-- SCRIPTS -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="scripts/plugins.js"></script>
  <script src="scripts/main.js"></script>

  <!-- Google Analytics -->

</body>
</html>
