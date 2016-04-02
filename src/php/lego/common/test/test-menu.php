<nav class="test-menu content-wrapper <?= $params["modification"]; ?>">
	<ul class="test-menu__content">
		<?
		foreach ($params["menu"] as $list_content) {
			echo "<li class='test-menu__item'>
				<a href='#' class='test-menu__link link link--brand'>$list_content</a>
			</li>";
		}
		?>
		<? if($params["search"]): ?>
		<li class="test-menu__item">
			<? req_with_param(PATH__COMMON . "/test/test-menu-search.php"); ?>
		</li>
		<? endif; ?>
	</ul>
</nav>