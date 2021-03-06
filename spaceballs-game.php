<?php
require_once 'fb/facebook.php';
require_once 'variables.php';

// Create our Application instance.
// Variables are in variables.php
$facebook = new Facebook(array(
            'appId' => $fbAppId,
            'secret' => $fbSecret,
        ));

$user = $facebook->getUser();

if ($user) {
    try {
        // Proceed knowing you have a logged in user who's authenticated.
        $user_profile = $facebook->api('/me');
    } catch (FacebookApiException $e) {
        echo '<pre>' . htmlspecialchars(print_r($e, true)) . '</pre>';
        $user = null;
    }
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml">
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
        <title>The Spaceballs - Free 3D Space-Online-Game</title>
        <link rel="shortcut icon" href="favicon.ico" type="image/ico" />
        <link rel="stylesheet" type="text/css" href="history/history.css" />
        <link rel="stylesheet" type="text/css" href="style.css" />
        <script src="AC_OETags.js" language="javascript"></script>
        <script src="history/history.js" language="javascript"></script>
        <script language="JavaScript" type="text/javascript">
            var requiredMajorVersion = 10;
            var requiredMinorVersion = 0;
            var requiredRevision = 0;
        </script>
    </head>

    <body>
        <table width="100%" height="100%" border="0" cellspacing="0" cellpadding="0" class="stars">
            <tr>
                <td align="center" valign="middle"><table width="800" height="600" cellspacing="0" cellpadding="0" class="content">
                        <tr>
                            <td><script language="JavaScript" type="text/javascript">
                                    <!--
                                    // Version check for the Flash Player that has the ability to start Player Product Install (6.0r65)
                                    var hasProductInstall = DetectFlashVer(6, 0, 65);

                                    // Version check based upon the values defined in globals
                                    var hasRequestedVersion = DetectFlashVer(requiredMajorVersion, requiredMinorVersion, requiredRevision);

                                    if ( hasProductInstall && !hasRequestedVersion ) {
                                        // DO NOT MODIFY THE FOLLOWING FOUR LINES
                                        // Location visited after installation is complete if installation is required
                                        var MMPlayerType = (isIE == true) ? "ActiveX" : "PlugIn";
                                        var MMredirectURL = window.location;
                                        document.title = document.title.slice(0, 47) + " - Flash Player Installation";
                                        var MMdoctitle = document.title;

                                        AC_FL_RunContent(
                                            "src", "playerProductInstall",
                                            "FlashVars", "MMredirectURL="+MMredirectURL+'&MMplayerType='+MMPlayerType+'&MMdoctitle='+MMdoctitle+"",
                                            "width", "800",
                                            "height", "600",
                                            "align", "middle",
                                            "id", "SpaceBallsFlex",
                                            "quality", "high",
                                            "bgcolor", "#000000",
                                            "name", "SpaceBallsFlex",
                                            "allowScriptAccess","sameDomain",
                                            "type", "application/x-shockwave-flash",
                                            "pluginspage", "http://www.adobe.com/go/getflashplayer"
                                        );
                                    } else if (hasRequestedVersion) {
                                        // if we've detected an acceptable version
                                        // embed the Flash Content SWF when all tests are passed
                                        AC_FL_RunContent(
                                            "src", "SpaceBallsFlex",
                                            "width", "800",
                                            "height", "600",
                                            "align", "middle",
                                            "id", "SpaceBallsFlex",
                                            "quality", "high",
                                            "bgcolor", "#000000",
                                            "name", "SpaceBallsFlex",
                                            "allowScriptAccess","sameDomain",
                                            "type", "application/x-shockwave-flash",
                                            "pluginspage", "http://www.adobe.com/go/getflashplayer"
                                        );
                                    } else {  // flash is too old or we can't detect the plugin
                                        var alternateContent = 'Alternate HTML content should be placed here. '
                                            + 'This content requires the Adobe Flash Player. '
                                            + '<a href=http://www.adobe.com/go/getflash/>Get Flash</a>';
                                        document.write(alternateContent);  // insert non-flash content
                                    }
                                    // -->
                                </script>
                                <noscript>
                                    <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
                                            id="SpaceBallsFlex" width="800" height="600"
                                            codebase="http://fpdownload.macromedia.com/get/flashplayer/current/swflash.cab">
                                        <param name="movie" value="SpaceBallsFlex.swf" />
                                        <param name="quality" value="high" />
                                        <param name="bgcolor" value="#000000" />
                                        <param name="allowScriptAccess" value="sameDomain" />
                                        <param name="wmode" value="opaque">
                                        <embed src="SpaceBallsFlex.swf" quality="high" bgcolor="#000000"
                                               width="800" height="600" name="SpaceBallsFlex" align="middle"
                                               play="true"
                                               loop="false"
                                               quality="high"
                                               allowScriptAccess="sameDomain"
                                               type="application/x-shockwave-flash"
                                               pluginspage="http://www.adobe.com/go/getflashplayer">
                                        </embed>
                                    </object>
                                </noscript></td>
                        </tr>
                    </table>
                    <table width="800" height="23" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                            <td align="right" valign="bottom"><p id="creators"><span style="color: #545d63;">created by &nbsp;</span><a href="http://www.areablue.de" target="_blank">Jan Breier</a> &nbsp;/ &nbsp;<a href="http://www.basster.de" target="_blank">Ole R&ouml;&szlig;ner</a> &nbsp;/ &nbsp;Thomas Kuschmann</p></td>
                        </tr>
                        <tr>
                            <td align="center"><script src="http://connect.facebook.net/de_DE/all.js#xfbml=1"></script><fb:like href="http://www.thespaceballs.de" show_faces="false" width="800"></fb:like></td>
            </tr>
        </table></td>
</tr>
</table>
        <a href="//github.com/Basster/TheSpaceballs" target="_blank"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://s3.amazonaws.com/github/ribbons/forkme_right_white_ffffff.png" alt="Fork me on GitHub"></a>
<div id="fb-root"></div>
<script 
    src="http://ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js" 
    type="text/javascript">
</script>
<script src="http://connect.facebook.net/de_DE/all.js"></script>
<script type="text/javascript">
    FB.init({
        appId: '<?php echo $facebook->getAppId() ?>', 
        xfbml: true, 
        cookie: true, 
        oauth: true});

    function echoSize() {
        document.getElementById('allContent').style.height = "100%";
        console.log(window.innerWidth + ' x ' + window.innerHeight);
    }

    window.onresize = echoSize;
        
    FB.login({
        scope: 'email,user_birthday'
    });

    //Flash display
    var flashvars = {
        user_id: '<?php $facebook->getUser(); ?>'
    };
    var params = {
        menu: "false",
        scale: "noScale",
        allowFullscreen: "true",
        allowScriptAccess: "always",
        bgcolor: "#000000",
        wmode: "opaque"
    };
    var attributes = {
        id:"SpaceBallsFlex"
    };
 	 
    swfobject.embedSWF(
    "SpaceBallsFlex.swf?id=34",
    "flashContent",
    "100%",
    "100%",
    "10.0.0",
    "expressInstall.swf",
    flashvars,
    params,
    attributes
);
</script>
<!-- Piwik --> 
<script type="text/javascript">
    var pkBaseURL = (("https:" == document.location.protocol) ? "https://piwik.basster.de/" : "http://piwik.basster.de/");
    document.write(unescape("%3Cscript src='" + pkBaseURL + "piwik.js' type='text/javascript'%3E%3C/script%3E"));
</script><script type="text/javascript">
    try {
        var piwikTracker = Piwik.getTracker(pkBaseURL + "piwik.php", 2);
        piwikTracker.trackPageView();
        piwikTracker.enableLinkTracking();
    } catch( err ) {}
</script><noscript><p><img src="http://piwik.basster.de/piwik.php?idsite=2" style="border:0" alt="" /></p></noscript>
<!-- End Piwik Tracking Code -->
</body>
</html>