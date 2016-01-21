<footer>

	<? req_with_param(PATH__PHP_COMMON . "/footer/footer-menu.php"); ?>

	<? req_with_param(PATH__PHP_COMMON . "/footer/footer-bottom.php"); ?>

</footer>

<script>
	if (document.location.hostname === "localhost") {
		document.write("<script src='" + "../../../src/bower/jquery/dist/jquery.min.js" + "'><\/script>");
	} else {
		document.write("<script src='" + "https://code.jquery.com/jquery-2.1.4.min.js" + "'><\/script>");
	}
</script>

<script src="scripts.js"></script>

</body>
</html>