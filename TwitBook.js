(function($){
  $.fn.TwitBook = function() {
    var props = new Array();
    props['facebook'] = new Array('http://graph.facebook.com/?ids=','data[url].shares');
    props['twitter'] = new Array('http://api.tweetmeme.com/url_info.jsonc?url=','data["story"].url_count');
    props['delicious'] = new Array('http://feeds.delicious.com/v2/json/urlinfo/data?url=','data[0].total_posts');
    this.each(function(){
    	var url = $(this).attr('data-tb-url');
    	var type = $(this).attr('data-tb-type');
    	var $count = $(this).find('.tb-count');
    	$.ajax({
				url: props[type][0]+url,
				dataType: 'jsonp',
				success: function(data) { $count.text(eval(props[type][1])); }
				});
    	});
  };
})( jQuery );