<html>
<head>
	<title>TwitBook Test</title>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
	<script type="text/javascript" src="TwitBook.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
  	$('.tb-facebook, .tb-twitter, .tb-delicious, .tb-digg').TwitBook();
  });
  </script>
</head>
<body>

<div id="posts">

	<div class="post">
		<h1>This is my next</h1>
		<div class="social">
			<div class="facebook tb-facebook" data-tb-url="http://www.thisismynext.com">Facebook has <span class="tb-count"></span> likes</div>
			<div class="twitter tb-twitter" data-tb-url="http://www.thisismynext.com">Twitter has <span class="tb-count"></span> tweets</div>
			<div class="facebook tb-delicious" data-tb-url="http://www.thisismynext.com">Delicious has <span class="tb-count"></span> bookmarks</div>
			<div class="twitter tb-digg" data-tb-url="http://www.thisismynext.com">Digg has <span class="tb-count"></span> diggs</div>
		</div>
	</div>
	
	<div class="post">
		<h1>SB Nation</h1>
		<div class="social">
			<div class="facebook tb-facebook" data-tb-url="http://www.sbnation.com">Facebook has <span class="tb-count"></span> likes</div>
			<div class="twitter tb-twitter" data-tb-url="http://www.sbnation.com">Twitter has <span class="tb-count"></span> tweets</div>
			<div class="facebook tb-delicious" data-tb-url="http://www.sbnation.com">Delicious has <span class="tb-count"></span> bookmarks</div>
			<div class="twitter tb-digg" data-tb-url="http://www.sbnation.com">Digg has <span class="tb-count"></span> diggs</div>
		</div>
	</div>
	
	<div class="post">
		<h1>Baseball Nation</h1>
		<div class="social">
			<div class="facebook tb-facebook" data-tb-url="http://mlb.sbnation.com">Facebook has <span class="tb-count"></span> likes</div>
			<div class="twitter tb-twitter" data-tb-url="http://mlb.sbnation.com">Twitter has <span class="tb-count"></span> tweets</div>
			<div class="facebook tb-delicious" data-tb-url="http://mlb.sbnation.com">Delicious has <span class="tb-count"></span> bookmarks</div>
			<div class="twitter tb-digg" data-tb-url="http://mlb.sbnation.com">Digg has <span class="tb-count"></span> diggs</div>
		</div>
	</div>
	
	<div class="post">
		<h1>Joshua Topolsky</h1>
		<div class="social">
			<div class="facebook tb-facebook" data-tb-url="http://www.joshuatopolsky.com">Facebook has <span class="tb-count"></span> likes</div>
			<div class="twitter tb-twitter" data-tb-url="http://www.joshuatopolsky.com">Twitter has <span class="tb-count"></span> tweets</div>
			<div class="facebook tb-delicious" data-tb-url="http://www.joshuatopolsky.com">Delicious has <span class="tb-count"></span> bookmarks</div>
			<div class="twitter tb-digg" data-tb-url="http://www.joshuatopolsky.com">Digg has <span class="tb-count"></span> diggs</div>
		</div>
	</div>
	
</div>

</body>
</html>