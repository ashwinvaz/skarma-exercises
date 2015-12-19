<!DOCTYPE html>
<html>
<head>
<title>Skarma Exercise 2</title>
<style>
body {background: #330000;}
#twitter-acct {width: 400px; height: 240px; position: absolute; left: 50%; top: 50%; margin-left: -200px; margin-top: -120px;}
</style>
<script src="js/jquery-1.11.3.min.js"></script>
<script>
window.twttr = (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0],
    t = window.twttr || {};
  if (d.getElementById(id)) return t;
  js = d.createElement(s);
  js.id = id;
  js.src = "https://platform.twitter.com/widgets.js";
  fjs.parentNode.insertBefore(js, fjs);
 
  t._e = [];
  t.ready = function(f) {
    t._e.push(f);
  };
 
  return t;
}(document, "script", "twitter-wjs"));</script>
</head>
<body>
	<div id="twitter-acct">
	        <a class="twitter-timeline"  href="https://twitter.com/ashwinvaz" data-widget-id="677826848860995584" data-tweet-limit=2>Tweets by @ashwinvaz</a>
	    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
  	</div>
	
</body>
</html>