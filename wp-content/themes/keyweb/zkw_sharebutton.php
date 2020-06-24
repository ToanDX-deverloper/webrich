<div class="box_share">
	<!-- Load Facebook SDK for JavaScript -->
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
	fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

	<!-- Your share button code -->
	<div class="fb-share-button" 
	data-href="https://www.your-domain.com/your-page.html" 
	data-layout="button_count">
	</div>
	
	<script src="//platform.linkedin.com/in.js" type="text/javascript"> lang: en_US</script>
	<script type="IN/Share" data-counter="top"></script>
	
	<script>window.twttr = (function(d, s, id) {
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
	<a class="twitter-share-button"  href="https://twitter.com/intent/tweet">Tweet</a>
</div>