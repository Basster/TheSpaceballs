<?php
require_once '../inc/facebook-php-sdk/src/facebook.php';

// Create our Application instance.
$facebook = new Facebook(array(
  'appId' => '132102860184232',
  'secret' => '08a161ca234bda37c0c8d8d3c37289db',
  'cookie' => true,
));

// We may or may not have this data based on a $_GET or $_COOKIE based session.
//
// If we get a session here, it means we found a correctly signed session using
// the Application Secret only Facebook and the Application know. We dont know
// if it is still valid until we make an API call using the session. A session
// can become invalid if it has already expired (should not be getting the
// session back in this case) or if the user logged out of Facebook.
$session = $facebook->getSession();

$me = null;
// Session based API call.
if ($session) {
    try {
        $uid = $facebook->getUser();
        $me = $facebook->api('/me');
        $friends = $facebook->api('/me/friends');
    } catch (FacebookApiException $e) {
        error_log($e);
    }
}

// login or logout url will be needed depending on current user state.
if ($me) {
    $logoutUrl = $facebook->getLogoutUrl();
} else {
    $loginUrl = $facebook->getLoginUrl();
}

?>
<!doctype html>
<html xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
<meta name="description" content="The Spaceballs is an exciting free 3D Space Online Game! All you have to do is to route your Ball  trough different missions and to protect him. Of course every new level will be a little bit harder!">
<meta name="keywords" content="spaceballs papervision3d box2dflash hs-bremen labyrinth flash game flashgame basster areablue media informatics">
<meta name="language" content="en">
<meta name="robots" content="index,follow">
<meta name="author" content="Jan Breier, Ole Roessner, Thomas Kuschmann">
<meta name="abstract" content="The Spaceballs is a exciting free 3D Space-Online-Game!">
<meta name="distribution" content="global">
<meta http-equiv="imagetoolbar" content="no" />
<meta name="google-site-verification" content="JP_3Gja66eOHLmMc88ECViiI8KlOFMLlPwn4ONik_nY" />
<meta name="msvalidate.01" content="8D16937CD1D6B7141CC11DF72201787A" />
<meta property="og:title" content="The Spaceballs - Free 3D Space-Online-Game" />
<meta property="og:description" content="The Spaceballs is an exciting free 3D Space Online Game! All you have to do is to route your Ball  trough different missions and to protect him. Of course every new level will be a little bit harder!" />
<title>The Spaceballs - Free 3D Space-Online-Game</title>
<link rel="shortcut icon" href="favicon.ico" type="image/ico" />
<link rel="stylesheet" type="text/css" href="style.css" />
<script type="text/javascript" src="rollover.js"></script>
</head>
<body onLoad="MM_preloadImages('button-down_start-mission.gif')">
<div id="fb-root"></div>
        <script>
            window.fbAsyncInit = function() {
                FB.init({
                    appId   : '<?php echo $facebook->getAppId(); ?>',
                    session : <?php echo json_encode($session); ?>, // don't refetch the session when PHP already has it
                    status  : true, // check login status
                    cookie  : true, // enable cookies to allow the server to access the session
                    xfbml   : true // parse XFBML
                });

                // whenever the user logs in, we refresh the page
                FB.Event.subscribe('auth.login', function() {
                    window.location.reload();
                });
				
				window.fbAsyncInit = function() {
				  FB.Canvas.setSize({ width: 800, height: 660 });
				}
            };

            (function() {
                var e = document.createElement('script');
                e.src = document.location.protocol + '//connect.facebook.net/de_DE/all.js';
                e.async = true;
                document.getElementById('fb-root').appendChild(e);
            }());
        </script>
<table width="100%" height="100%" border="0" cellspacing="0" cellpadding="0" class="stars">
  <tr>
    <td align="center" valign="middle"><table width="802" height="602" cellspacing="0" cellpadding="0" class="content">
        <tr>
          <td align="left" valign="top"><div id="container">
              <div id="logo"><a href="spaceballs-game.html"><img src="spaceballs-the-game_logo.jpg" alt="Spaceballs The Game Logo" width="360" height="80" border="0"></a></div>
              <div id="text1">
                <h1>Become part of this game...</h1>
                <p>The Spaceballs is an exciting free 3D<br />
                  Space-Online-Game!<br />
                  All you have to do is to route your Ball<br />
                  trough different types of missions and<br />
                  to protect him. Of course every new<br />
                  level will be a little bit harder!<br>
                  Play
                  more than 20 great missions
                  and download 5 crazy <a href="spaceballs-bonus-levels.zip" class="download">free bonus levels!</a><br>
                  Let's win the war against the evil...</p>
              </div>
              <div id="text2">
                <h1>Your mission: Save the universe!</h1>
                <p>Lightyears away a family of mighty planets, called<br />
                  the Spaceballs, is attacked by the evil. Help them to<br />
                  survive - and maybe to save the whole universe!</p>
              </div>
              <div id="text3">
                <h1>Start your own mission!</h1>
                <p>With our brand new leveleditor it is easy to build your<br />
                  own levels and to save them.</p>
              </div>
              <div id="text4">
                <h1 style="color:#ec9813">Take control by using your...</h1>
                <p>Mouse, Keyboard or simply by using your WiiMote!</p>
              </div>
              <div id="startbutton"><a href="spaceballs-game.html" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('start-mission','','button-down_start-mission.gif',1)"><img src="button-up_start-mission.gif" alt="Start Mission" name="start-mission" width="136" height="32" border="0"></a></div>
              <div id="screenshots"><img src="spaceballs-the-game_screenshots.jpg" alt="Screenshots" width="92" height="177" border="0"></div>
              <div id="controls"><img src="spaceballs-the-game_controls.jpg" alt="Control by Mouse, WiiMode and by shaking your MacBook" width="321" height="108" border="0"></div>
            </div></td>
        </tr>
      </table>
      <table width="800" height="23" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td align="right" valign="bottom"><p id="creators"><font style="color: #545d63;">created by &nbsp;</font><a href="http://www.areablue.de" target="_blank">Jan Breier</a> &nbsp;/ &nbsp;<a href="http://www.basster.de" target="_blank">Ole R&ouml;&szlig;ner</a> &nbsp;/ &nbsp;Thomas Kuschmann</p></td>
        </tr>
        <tr>
            <td align="center"><script src="http://connect.facebook.net/de_DE/all.js#xfbml=1"></script><fb:like href="http://www.thespaceballs.de" show_faces="false" width="800"></fb:like></td>
        </tr>
      </table></td>
  </tr>
</table>

<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-11297526-3");
pageTracker._trackPageview();
} catch(err) {}</script>

</body>
</html>