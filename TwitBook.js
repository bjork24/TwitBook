$(document).ready(function(){
	$('.tb-facebook, .tb-twitter').TwitBook();
});

(function($){
  $.fn.TwitBook = function() {
    this.each(function(){
    	var url = $(this).attr('data-tb-url');
    	var $count = $(this).find('.tb-count');
    	if($(this).hasClass('tb-facebook')) { grabJSONP('fb',url,$count); }
    	else if($(this).hasClass('tb-twitter')) { grabJSONP('tw',url,$count); }
    	});
    function grabJSONP(type,url,$count)
    	{
    	if 			(type=='fb') { json_url = 'http://graph.facebook.com/?ids='+url; }
    	else if	(type=='tw') { json_url = 'http://api.tweetmeme.com/url_info.jsonc?url='+url; }
    	$.ajax({
				url: json_url,
				dataType: 'jsonp',
				success: function(data) {
					if 			(type=='fb') { $count.text(data[url].shares); }
					else if	(type=='tw') { $count.text(data['story'].url_count); }
					}
				});
				
    	}
  };
})( jQuery );