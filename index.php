<html>
<head>
    <title>Plotpoints</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.blue_grey-light_blue.min.css" />
        <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.js" integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js" integrity="sha256-0YPKAwZP7Mp3ALMRVB2i8GXeEndvCq3eSl/WsAl1Ryk=" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/5462403d39.js"></script>
    <script>
        $( function() {
            $( ".draggable" ).draggable();
        } );
    </script>
    <link rel="stylesheet" href="/styles/main.css">
</head>
<body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
          <!-- Title -->
          <span class="mdl-layout-title">PlotPoints</span>
          <!-- Add spacer, to align navigation to the right -->
          <div class="mdl-layout-spacer"></div>
          <!-- Navigation. We hide it in small screens. -->
          <nav class="mdl-navigation mdl-layout--large-screen-only">
            <a class="mdl-navigation__link" href="">Link</a>
            <a class="mdl-navigation__link" href="">Link</a>
            <a class="mdl-navigation__link" href="">Link</a>
            <a class="mdl-navigation__link" href="">Link</a>
          </nav>
        </div>
      </header>
      <main class="mdl-layout__content">
        <div class="page-content">
            <span class="mdl-chip mdl-chip--contact mdl-chip--deletable draggable ui-widget-content">
                <span class="mdl-chip__contact mdl-color--brown mdl-color-text--white"><i class="fa fa-play" aria-hidden="true"></i></span>
                <span class="mdl-chip__text">Quest starts</span>
                <a href="#" class="mdl-chip__action"><i class="material-icons">cancel</i></a>
            </span>
            <span class="mdl-chip mdl-chip--contact mdl-chip--deletable draggable ui-widget-content">
                <span class="mdl-chip__contact mdl-color--pink mdl-color-text--white"><i class="fa fa-heart" aria-hidden="true"></i></span>
                <span class="mdl-chip__text">Meets love interest</span>
                <a href="#" class="mdl-chip__action"><i class="material-icons">cancel</i></a>
            </span>
            <span class="mdl-chip mdl-chip--contact mdl-chip--deletable draggable ui-widget-content">
                <span class="mdl-chip__contact mdl-color--red mdl-color-text--white"><i class="fa fa-bomb" aria-hidden="true"></i></span>
                <span class="mdl-chip__text">Major battle</span>
                <a href="#" class="mdl-chip__action"><i class="material-icons">cancel</i></a>
            </span>
        </div>
      </main>
    </div>
</body>
</html>