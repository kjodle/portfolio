<footer>
<p>
	Built with PHP, HTML5, and CSS3,
	<br class="rwd-break" />
	<span style="white-space: nowrap;">with help from <a href="https://jquery.com/">jQuery</a>, <a href="https://jqueryui.com/">jQuery UI</a>, </span>
	<br class="rwd-break" />
	<span style="white-space: nowrap;">and <a href="https://fortawesome.github.io/Font-Awesome/">FontAwesome</a>.</span>
</p>
<p id="social">
	<a class="fa fa-twitter-square" href="http://twitter.com/#!/iswpw"></a>
	<a class="fa fa-github-square" href="https://github.com/kjodle"></a>
	<a class="fa fa-linkedin-square" href="http://www.linkedin.com/in/kennethjohnodle"></a>
	<a class="fa fa-google-plus-square" href="https://plus.google.com/110700479688438997749"></a>
	<a class="fa fa-envelope-square" href="mailto:contact2@kjodle.net"></a>
</p>
</footer>

<script>
      // Behave
      var hours = new Date().getHours(),
        text = "Day";
      if(hours > 17) {
        text = "Evening";
      }
      else if(hours > 11) {
        text = "Afternoon";
      }
      else if(hours > 5) {
        text = "Morning";
      }
      document.getElementById("time").innerHTML = text;
</script>