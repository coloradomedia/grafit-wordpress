<footer class="main-footer">

		<?php get_sidebar('footer'); ?>

		<div class="copyrights">
			<p class="site-info">meblegrafit.pl &copy;<?php echo date("Y"); ?> | Realizacja: FreshLime</p>

		</div>

</footer>

<div id="cookies-message-container">
	<div id="cookies-message">Ta strona używa ciasteczek (cookies), dzięki którym nasz serwis może działać lepiej.<a href="javascript:WHCloseCookiesWindow();" id="accept-cookies-checkbox">x</a>
	<img src="<?php echo get_template_directory_uri(); ?>/img/cookie.png" alt="">
	</div>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<?php wp_footer(); ?>

<script>
function WHCheckCookies(){
  if(!localStorage.cookies_accepted) {
    var cookies_message = document.getElementById("cookies-message"); 
    cookies_message.style.display="block" 
  } 
} 
window.onload = WHCheckCookies;

function WHCloseCookiesWindow(){ 
  localStorage.cookies_accepted = true; 
  document.getElementById("cookies-message-container").removeChild(document.getElementById("cookies-message"));
}
</script>
</body>
</html>