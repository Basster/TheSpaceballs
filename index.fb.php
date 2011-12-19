<html>
 <head>
   <title>Fluid Width HTML Example </title>
 </head>

 <body style="margin:0; padding:0; border:0; background-color:#000000">
 
     <div id="allContent" style="background-color: #0000FF; height:100%">
  		<div id="output" style="color: #FFFFFF;" />
     </div>

     <div id="fb-root"></div>
     <script src="http://connect.facebook.net/en_US/all.js"></script>
     <script type="text/javascript">
  	 FB.init({
    		appId  : '132102860184232',
  	    });

  	 function echoSize() {
    	      document.getElementById('output').innerHTML = 
                 "HTML Content Width: " + window.innerWidth + 
                 " Height: " + window.innerHeight;
    	      console.log(window.innerWidth + ' x ' + window.innerHeight);
  	    }

	   echoSize();
  	   window.onresize = echoSize;
     </script>
  </body>
</html>