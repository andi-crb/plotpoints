<html>
<head>
    <title>Plotpoints</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.blue_grey-light_blue.min.css" />
        <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
           <!--getmdl-select-->   
   <link rel="stylesheet" href="https://cdn.rawgit.com/CreativeIT/getmdl-select/master/getmdl-select.min.css">
   <script defer src="https://cdn.rawgit.com/CreativeIT/getmdl-select/master/getmdl-select.min.js"></script>
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
<?php
    $points = array
        (
            array("thread"=>"red", "icon"=>"heart", "text"=>"Meets love interest"),
            array("thread"=>"blue", "icon"=>"money", "text"=>"Looking for money"),
            array("thread"=>"lime", "icon"=>"life-ring", "text"=>"Is saved"),
            array("thread"=>"purple", "icon"=>"crosshairs", "text"=>"Assassination attempt"),
            array("thread"=>"orange", "icon"=>"bolt", "text"=>"Lightening strikes"),
            array("thread"=>"amber", "icon"=>"plane", "text"=>"Runs away overseas")
            
        );
?>
<body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <header class="mdl-layout__header">
            <div class="mdl-layout__header-row">
                <!-- Title -->
      <span class="mdl-layout-title">PlotPoints</span>

    </div>
  </header>
  <div class="mdl-layout__drawer">
    <span class="mdl-layout-title">Title</span>
    <nav class="mdl-navigation">
        <form>
      <div class="mdl-textfield mdl-js-textfield">
        <input class="mdl-textfield__input" type="text" id="plot-event">
        <label class="mdl-textfield__label" for="plot-event">Plot Event</label>
      </div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height">
            <input class="mdl-textfield__input" id="thread" name="thread" value="Thread" type="text" readonly tabIndex="-1" data-val="thread"/>
            <label class="mdl-textfield__label" for="thread">Thread</label>
            <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu" for="thread">
                <li class="mdl-menu__item" data-val="orange"><span class="mdl-color--orange mdl-color-text--white color-label">Thread One</span></li>
                <li class="mdl-menu__item" data-val="amber"><span class="mdl-color--amber mdl-color-text--white color-label">Thread Two</span></li>
                <li class="mdl-menu__item" data-val="yellow"><span class="mdl-color--yellow mdl-color-text--white color-label">Thread Three</span></li>
                <li class="mdl-menu__item" data-val="light-green"><span class="mdl-color--light-green mdl-color-text--white color-label">Thread Four</span></li>
                <li class="mdl-menu__item" data-val="green"><span class="mdl-color--green mdl-color-text--white color-label">Thread Five</span></li>
                <li class="mdl-menu__item" data-val="teal"><span class="mdl-color--teal mdl-color-text--white color-label">Thread Six</span></li>
                <li class="mdl-menu__item" data-val="cyan"><span class="mdl-color--cyan mdl-color-text--white color-label">Thread Seven</span></li>
                <li class="mdl-menu__item" data-val="light-blue"><span class="mdl-color--light-blue mdl-color-text--white color-label">Thread Eight</span></li>
                <li class="mdl-menu__item" data-val="blue"><span class="mdl-color--blue mdl-color-text--white color-label">Thread Nine</span></li>
                <li class="mdl-menu__item" data-val="indigo"><span class="mdl-color--indigo mdl-color-text--white color-label">Thread Ten</span></li>
                <li class="mdl-menu__item" data-val="deep-purple"><span class="mdl-color--deep-purple mdl-color-text--white color-label">Thread Eleven</span></li>
                <li class="mdl-menu__item" data-val="purple"><span class="mdl-color--purple mdl-color-text--white color-label">Thread Twelve</span></li>
                <li class="mdl-menu__item" data-val="pink"><span class="mdl-color--pink mdl-color-text--white color-label">Thread Thirteen</span></li>
                <li class="mdl-menu__item" data-val="red"><span class="mdl-color--red mdl-color-text--white color-label">Thread Fourteen</span></li>
                <li class="mdl-menu__item" data-val="deep-orange"><span class="mdl-color--deep-orange mdl-color-text--white color-label">Thread Fifteen</span></li>
                <li class="mdl-menu__item" data-val="grey"><span class="mdl-color--grey mdl-color-text--white color-label">Thread Sixteen</span></li>
                <li class="mdl-menu__item" data-val="blue-grey"><span class="mdl-color--blue-grey mdl-color-text--white color-label">Thread Seventeen</span></li>
                <li class="mdl-menu__item" data-val="brown"><span class="mdl-color--brown mdl-color-text--white color-label">Thread Eighteen</span></li>
            </ul>
        </div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height">
            <input class="mdl-textfield__input" id="event" name="thread" value="Event" type="text" readonly tabIndex="-1" data-val="Event"/>
            <label class="mdl-textfield__label" for="event">Event</label>
            <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu" for="event">
                <li class="mdl-menu__item" data-val="love"><i class="fa fa-heart" aria-hidden="true"></i> Love</li>
                <li class="mdl-menu__item" data-val="love"><i class="fa fa-diamond" aria-hidden="true"></i> Engagement</li>
                <li class="mdl-menu__item" data-val="love"><i class="fa fa-plane" aria-hidden="true"></i> Travel</li>
                <li class="mdl-menu__item" data-val="love"><i class="fa fa-paint-brush" aria-hidden="true"></i> Creativity</li>
                <li class="mdl-menu__item" data-val="love"><i class="fa fa-space-shuttle" aria-hidden="true"></i> Space Exploration</li>
                <li class="mdl-menu__item" data-val="love"><i class="fa fa-soccer-ball-o" aria-hidden="true"></i> Sport</li>
                <li class="mdl-menu__item" data-val="love"><i class="fa fa-university" aria-hidden="true"></i> Study</li>
                <li class="mdl-menu__item" data-val="love"><i class="fa fa-heart" aria-hidden="true"></i> Love</li>
                <li class="mdl-menu__item" data-val="love"><i class="fa fa-heart" aria-hidden="true"></i> Love</li>
            </ul>
        </div>
        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
            Create Plotpoint
        </button>
    </form>
    </nav>
  </div>
      <main class="mdl-layout__content">
        <div class="page-content">
            <?php
                $arrlength = count($points);
                for($x = 0; $x < $arrlength; $x++) {
                    $currentpoint = $points[$x];
                    echo "<span class=\"mdl-chip mdl-chip--contact mdl-chip--deletable draggable ui-widget-content\">";
                    echo "<span class=\"mdl-chip__contact mdl-color--" . $currentpoint["thread"] . " mdl-color-text--white\"><i class=\"fa fa-" . $currentpoint["icon"] . "\" aria-hidden=\"true\"></i></span>";
                    echo "<span class=\"mdl-chip__text\">" . $currentpoint["text"] . "</span>";
                    echo "</span>";
                };
            ?>
        </div>

      </main>
    </div>
</body>
</html>