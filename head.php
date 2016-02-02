	<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Google Webfonts -->
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Roboto+Mono' rel='stylesheet' type='text/css'>

<!-- Required for jQuery accordion -->
	<link rel="stylesheet" href="css/jquery-ui.css">

	<link rel="stylesheet" media="screen and (min-width: 601px)" href="css/styles.css?v=1.0">
	<link rel="stylesheet" media="screen and (max-width: 600px)" href="css/mobile.css?v=1.0">
	<link rel="stylesheet" media="print" href="css/print.css?v=1.0">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

<script>
$(document).ready(function() {
	var icons = {
		header: "ui-icon-folder-collapsed",
		activeHeader: " ui-icon-folder-open"
	};
	$( "#accordion" ).accordion({
		collapsible: true,
		active: false,
		heightStyle: "content",
		show: { easing: "easeInOutQuart", duration: 1500 },
		hide: { easing: "easeInOutQuart", duration: 500 },
		icons: icons,
	});
	$( "#toggle" ).button().click(function() {
		if ( $( "#accordion" ).accordion( "option", "icons" ) ) {
			$( "#accordion" ).accordion( "option", "icons", null );
		} else {
			$( "#accordion" ).accordion( "option", "icons", icons );
		}
	});
});
</script>
