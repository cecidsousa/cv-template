	<footer class="box noprint"> 
		<a href="http://validator.w3.org/check?uri=referer"></a> James "webjac" Creixems | 
		<a href="http://creativecommons.org/licenses/by-sa/3.0/" onclick="window.open(this.href); return false;" >CC 3.0</a> 
		| nov 2013 | v3.5
	</footer>
</div><!--#content-->

	<!-- jQuery 1.7.2+ or Zepto.js 1.0+ -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> 

<!-- Magnific Popup core JS file -->
<script src="js/magnific-popup.js"></script> 
	
	<script>
		$('.ajax-popup-link').magnificPopup({
		  type: 'iframe',
		  showCloseBtn: true,
		  callbacks: {
		    beforeOpen: function() {
		       this.st.mainClass = this.st.el.attr('data-effect');
		    }
		  },
		});
	</script>
	

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-118856-34']);
  _gaq.push(['_setDomainName', 'webjac.com']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</body>
</html>