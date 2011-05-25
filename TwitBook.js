(function($){
  $.fn.TwitBook = function() {
    var props = new Array();
    props['facebook']['json_url'] = 'http://graph.facebook.com/?ids=';
    props['facebook']['return'] = 'data[url].shares';
    props['twitter']['json_url'] = 'http://api.tweetmeme.com/url_info.jsonc?url=';
    props['twitter']['return'] = 'data["story"].url_count';
    props['delicious']['json_url'] = 'http://feeds.delicious.com/v2/json/urlinfo/data?url=';
    props['delicious']['return'] = 'data[0].total_posts';
    this.each(function(){
    	var url = $(this).attr('data-tb-url');
    	var type = $(this).attr('data-tb-type');
    	var $count = $(this).find('.tb-count');
    	grabJSONP(type,url,$count,props);
    	});
    function grabJSONP(type,url,$count,props)
    	{
    	json_url = props[type]['json_url']+url;
    	$.ajax({
				url: json_url,
				dataType: 'jsonp',
				success: function(data) { eval($count.text(props[type]['return']);); }
				});
    	}
  };
})( jQuery );