<?php include(dirname(__FILE__) . '/header.php'); ?>

	<main class="main">

		<header class="header">
			<div class="container">
				<h1 class="no-margin heading-small">Blog ou CMS à l'Xml</h1>
				<h2 class="h5 no-margin">Simple et léger <br>Sans base de données <br>Collaboratif <br>Thèmes <br>Plugins</h2>
			</div>
		</header>

		<div class="container">

			<div class="grid">

				<div class="content col sml-12">

					<article class="article static" id="static-page-<?php echo $plxShow->staticId(); ?>">

						<header>
							<h2>
								<?php $plxShow->staticTitle(); ?>
							</h2>
						</header>

						<?php $plxShow->staticContent(); ?>

					</article>

				</div>

			</div>

		</div>

	</main>

<?php include(dirname(__FILE__).'/footer.php'); ?>
