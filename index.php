<html>
<head>
    <title>Plotpoints</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.blue_grey-light_blue.min.css" />
        <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
           <!--getmdl-select-->   
   <link rel="stylesheet" href="https://cdn.rawgit.com/CreativeIT/getmdl-select/master/getmdl-select.min.css">
   <!--<script defer src="https://cdn.rawgit.com/CreativeIT/getmdl-select/master/getmdl-select.min.js"></script>-->
    <script src="https://code.jquery.com/jquery-3.1.1.js" integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js" integrity="sha256-0YPKAwZP7Mp3ALMRVB2i8GXeEndvCq3eSl/WsAl1Ryk=" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/5462403d39.js"></script>
    <script>
        var plotpoints = [];
        
        $( function() {
            $( ".draggable" ).draggable();
            
            $("#thread-select li").on("click", function(){
                alert($(this).data("val"));
               $("#thread").val($(this).data("val")); 
            });
            
            $("#event-select li").on("click", function(){
                alert($(this).data("val"));
               $("#event").val($(this).data("val")); 
            });
            
            $("#createplotpoint").on("click", function(){
                var newpoint = {};
                newpoint.text = $("#plot-event").val();
                newpoint.thread = $("#thread").val();
                newpoint.event = $("#event").val();
                plotpoints.push(newpoint);
                $("#main-canvas").append("<span class=\"mdl-chip mdl-chip--contact mdl-chip--deletable draggable ui-widget-content\"><span class=\"mdl-chip__contact mdl-color--" + newpoint.thread + " mdl-color-text--white\"><i class=\"fa fa-" + newpoint.event + "\" aria-hidden=\"true\"></i></span><span class=\"mdl-chip__text\">" + newpoint.text + "</span></span>");
                $( ".draggable" ).draggable();
                return false;
            });
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
            <input class="mdl-textfield__input" id="thread" name="thread" value="Thread" type="text" tabIndex="-1" data-val="thread"/>
            <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu" id="thread-select" for="thread">
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
            <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu" id="event-select" for="event">
                <li class="mdl-menu__item" data-val="heart"><i class="fa fa-heart" aria-hidden="true"></i> Love</li>
                <li class="mdl-menu__item" data-val="diamond"><i class="fa fa-diamond" aria-hidden="true"></i> Engagement</li>
                <li class="mdl-menu__item" data-val="plane"><i class="fa fa-plane" aria-hidden="true"></i> Travel</li>
                <li class="mdl-menu__item" data-val="brush"><i class="fa fa-paint-brush" aria-hidden="true"></i> Creativity</li>
                <li class="mdl-menu__item" data-val="shuttle"><i class="fa fa-space-shuttle" aria-hidden="true"></i> Space Travel</li>
                <li class="mdl-menu__item" data-val="ball-o"><i class="fa fa-soccer-ball-o" aria-hidden="true"></i> Sport</li>
                <li class="mdl-menu__item" data-val="snowflake-o"><i class="fa fa-snowflake-o" aria-hidden="true"></i> Snow</li>
                <li class="mdl-menu__item" data-val="superpowers"><i class="fa fa-superpowers" aria-hidden="true"></i> Superpowers</li>
                <li class="mdl-menu__item" data-val="handshake"><i class="fa fa-handshake" aria-hidden="true"></i> Meet</li>
                <li class="mdl-menu__item" data-val="bolt"><i class="fa fa-bolt" aria-hidden="true"></i> Lightening</li>
                <li class="mdl-menu__item" data-val="birthday-cake"><i class="fa fa-birthday-cake" aria-hidden="true"></i> Birthday</li>
                <li class="mdl-menu__item" data-val="cogs"><i class="fa fa-cogs" aria-hidden="true"></i> Machinery</li>
                <li class="mdl-menu__item" data-val="cutlery"><i class="fa fa-cutlery" aria-hidden="true"></i> Food</li>
                <li class="mdl-menu__item" data-val="fighter-jet"><i class="fa fa-fighter-jet" aria-hidden="true"></i> Air Battle</li>
                <li class="mdl-menu__item" data-val="flag"><i class="fa fa-flag" aria-hidden="true"></i> Country</li>
                <li class="mdl-menu__item" data-val="globe"><i class="fa fa-globe" aria-hidden="true"></i> Planet</li>
                <li class="mdl-menu__item" data-val="life-ring"><i class="fa fa-life-ring" aria-hidden="true"></i> Save</li>
                <li class="mdl-menu__item" data-val="money"><i class="fa fa-money" aria-hidden="true"></i> Money</li>
                <li class="mdl-menu__item" data-val="photo"><i class="fa fa-photo" aria-hidden="true"></i> Photo</li>
                <li class="mdl-menu__item" data-val="puzzle-piece"><i class="fa fa-puzzle-piece" aria-hidden="true"></i> Deduce</li>
                <li class="mdl-menu__item" data-val="star"><i class="fa fa-star" aria-hidden="true"></i> Space</li>
                <li class="mdl-menu__item" data-val="star-o"><i class="fa fa-star-o" aria-hidden="true"></i> Magic</li>
                <li class="mdl-menu__item" data-val="ticket"><i class="fa fa-ticket" aria-hidden="true"></i> Ticket</li>
                <li class="mdl-menu__item" data-val="bomb"><i class="fa fa-bomb" aria-hidden="true"></i> War</li>
                <li class="mdl-menu__item" data-val="beer"><i class="fa fa-beer" aria-hidden="true"></i> Drink</li>
                <li class="mdl-menu__item" data-val="child"><i class="fa fa-child" aria-hidden="true"></i> Child</li>
                <li class="mdl-menu__item" data-val="comments"><i class="fa fa-comments" aria-hidden="true"></i> Discussion</li>
                <li class="mdl-menu__item" data-val="music"><i class="fa fa-music" aria-hidden="true"></i> Music</li>
                <li class="mdl-menu__item" data-val="paw"><i class="fa fa-paw" aria-hidden="true"></i> Animal</li>
                <li class="mdl-menu__item" data-val="thumbs-down"><i class="fa fa-thumbs-down" aria-hidden="true"></i> Failure</li>
                <li class="mdl-menu__item" data-val="thumbs-up"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Success</li>
                <li class="mdl-menu__item" data-val="trophy"><i class="fa fa-trophy" aria-hidden="true"></i> Win</li>
                <li class="mdl-menu__item" data-val="hand-spock-o"><i class="fa fa-hand-spock-o" aria-hidden="true"></i> Alien</li>
                <li class="mdl-menu__item" data-val="rocket"><i class="fa fa-rocket" aria-hidden="true"></i> Space Exploration</li>
                <li class="mdl-menu__item" data-val="pie-chart"><i class="fa fa-pie-chart" aria-hidden="true"></i> Analysis</li>
                <li class="mdl-menu__item" data-val="arrows"><i class="fa fa-university" aria-hidden="true"></i> Finding a direction</li>
                <li class="mdl-menu__item" data-val="arrow-up"><i class="fa fa-arrow-up" aria-hidden="true"></i> Going Forwards</li>
                <li class="mdl-menu__item" data-val="arrow-down"><i class="fa fa-arrow-down" aria-hidden="true"></i> Going Backwards</li>
                <li class="mdl-menu__item" data-val="pause"><i class="fa fa-pause" aria-hidden="true"></i> Pause</li>
                <li class="mdl-menu__item" data-val="A"><span class="letter">A</span> Letter A</li>
                <li class="mdl-menu__item" data-val="B"><span class="letter">B</span> Letter B</li>
                <li class="mdl-menu__item" data-val="C"><span class="letter">C</span> Letter C</li>
                <li class="mdl-menu__item" data-val="D"><span class="letter">D</span> Letter D</li>
                <li class="mdl-menu__item" data-val="E"><span class="letter">E</span> Letter E</li>
                <li class="mdl-menu__item" data-val="F"><span class="letter">F</span> Letter F</li>
                <li class="mdl-menu__item" data-val="G"><span class="letter">G</span> Letter G</li>
                <li class="mdl-menu__item" data-val="H"><span class="letter">H</span> Letter H</li>
                <li class="mdl-menu__item" data-val="I"><span class="letter">I</span> Letter I</li>
                <li class="mdl-menu__item" data-val="J"><span class="letter">J</span> Letter J</li>
                <li class="mdl-menu__item" data-val="K"><span class="letter">K</span> Letter K</li>
                <li class="mdl-menu__item" data-val="L"><span class="letter">L</span> Letter L</li>
                <li class="mdl-menu__item" data-val="M"><span class="letter">M</span> Letter M</li>
                <li class="mdl-menu__item" data-val="N"><span class="letter">N</span> Letter N</li>
                <li class="mdl-menu__item" data-val="O"><span class="letter">O</span> Letter O</li>
                <li class="mdl-menu__item" data-val="P"><span class="letter">P</span> Letter P</li>
                <li class="mdl-menu__item" data-val="Q"><span class="letter">Q</span> Letter Q</li>
                <li class="mdl-menu__item" data-val="R"><span class="letter">R</span> Letter R</li>
                <li class="mdl-menu__item" data-val="S"><span class="letter">S</span> Letter S</li>
                <li class="mdl-menu__item" data-val="T"><span class="letter">T</span> Letter T</li>
                <li class="mdl-menu__item" data-val="U"><span class="letter">U</span> Letter U</li>
                <li class="mdl-menu__item" data-val="V"><span class="letter">V</span> Letter V</li>
                <li class="mdl-menu__item" data-val="W"><span class="letter">W</span> Letter W</li>
                <li class="mdl-menu__item" data-val="X"><span class="letter">X</span> Letter X</li>
                <li class="mdl-menu__item" data-val="Y"><span class="letter">Y</span> Letter Y</li>
                <li class="mdl-menu__item" data-val="Z"><span class="letter">Z</span> Letter Z</li>
            </ul>
        </div>
        <button id="createplotpoint" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
            Create Plotpoint
        </button>
    </form>
    </nav>
  </div>
      <main class="mdl-layout__content">
        <div class="page-content" id="main-canvas">
        </div>

      </main>
    </div>
</body>
</html>