<html>
<head>
	<title>TwitBook Test</title>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
	<script type="text/javascript" src="TwitBook.min.js"></script>
	<script type="text/javascript">
  	$(document).ready(function(){
    	$('.tb-link').TwitBook();
    });
  </script>
</head>
<body>

<div id="posts">

	<div class="post">
		<h1>This is my next</h1>
		<div class="social">
			<div class="tb-link" data-tb-url="http://www.thisismynext.com" data-tb-type="facebook">Facebook has <span class="tb-count"></span> likes</div>
			<div class="tb-link" data-tb-url="http://www.thisismynext.com" data-tb-type="twitter">Twitter has <span class="tb-count"></span> tweets</div>
			<div class="tb-link" data-tb-url="http://www.thisismynext.com" data-tb-type="delicious">Delicious has <span class="tb-count"></span> bookmarks</div>
		</div>
	</div>
	
	<div class="post">
		<h1>SB Nation</h1>
		<div class="social">
			<div class="tb-link" data-tb-url="http://www.sbnation.com" data-tb-type="facebook">Facebook has <span class="tb-count"></span> likes</div>
			<div class="tb-link" data-tb-url="http://www.sbnation.com" data-tb-type="twitter">Twitter has <span class="tb-count"></span> tweets</div>
			<div class="tb-link" data-tb-url="http://www.sbnation.com" data-tb-type="delicious">Delicious has <span class="tb-count"></span> bookmarks</div>
		</div>
	</div>
	
	<div class="post">
		<h1>Baseball Nation</h1>
		<div class="social">
			<div class="tb-link" data-tb-url="http://mlb.sbnation.com" data-tb-type="facebook">Facebook has <span class="tb-count"></span> likes</div>
			<div class="tb-link" data-tb-url="http://mlb.sbnation.com" data-tb-type="twitter">Twitter has <span class="tb-count"></span> tweets</div>
			<div class="tb-link" data-tb-url="http://mlb.sbnation.com" data-tb-type="delicious">Delicious has <span class="tb-count"></span> bookmarks</div>
		</div>
	</div>
	
	<div class="post">
		<h1>Joshua Topolsky</h1>
		<div class="social">
			<div class="tb-link" data-tb-url="http://www.joshuatopolsky.com" data-tb-type="facebook">Facebook has <span class="tb-count"></span> likes</div>
			<div class="tb-link" data-tb-url="http://www.joshuatopolsky.com" data-tb-type="twitter">Twitter has <span class="tb-count"></span> tweets</div>
			<div class="tb-link" data-tb-url="http://www.joshuatopolsky.com" data-tb-type="delicious">Delicious has <span class="tb-count"></span> bookmarks</div>
		</div>
	</div>
	
</div>

</body>
</html>