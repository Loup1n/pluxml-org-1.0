<?php if (!defined('PLX_ROOT')) exit; ?>

	<footer class="footer">
		<div class="container">

			<section>
				<div class="grid">
					<div class="col sml-12 med-3 text-center">
						<img alt="Logo PluXml" src="<?php $plxShow->template(); ?>/img/plx-logo-bleu.png">
					</div>
					<div class="col sml-6 med-2">
						<strong>A propos de PluXml</strong>
						<ul class="unstyled-list">
							<li><a title="A propos" href="https://www.pluxml.org/a-propos-de-pluxml.html">A propos</a></li>
							<li><a title="Nous soutenir" href="https://www.pluxml.org/nous-soutenir.html">Nous soutenir</a></li>
						</ul>
					</div>
					<div class="col sml-6 med-2">
						<strong>Nous suivre ou nous contacter</strong>
						<ul class="unstyled-list">
							<li><a title="Nous contacter" href="https://www.pluxml.org/contact">Contact</a></li>
							<li><a title="Twitter" href="https://twitter.com/pluxml">Twitter</a></li>
							<li><a title="Google+" href="https://plus.google.com/u/0/communities/112244719352696146403">Google+</a></li>
						<ul>
					</div>
					<div class="col sml-6 med-2">
						<strong>En savoir plus</strong>
						<ul class="unstyled-list">
							<li><a title="Documentation" href="https://wiki.pluxml.org">Documentation</a></li>
							<li><a title="Forum" href="https://forum.pluxml.org">Forum</a></li>
							<li><a title="Ressources" href="https://ressources.pluxml.org">Ressources</a></li>
						</ul>
					</div>
					<div class="col sml-6 med-3">
						<strong>Autour de PluXml</strong>
						<ul class="unstyled-list">
							<li><a title="PluCSS" href="https://plucss.pluxml.org/">PluCSS</a></li>
							<li><a title="Pluxopolis" href="http://pluxopolis.net/">Pluxopolis</a></li>
							<li><a title="Visual Wizard" href="https://visualwizard.pluxml.org/">Visual Wizard</a></li>
							<ul>
					</div>
				</div>
			</section>

			<p>
				<?php $plxShow->mainTitle('link'); ?> - <?php $plxShow->subTitle(); ?> &copy; 2017
			</p>
			<p>
				<?php $plxShow->lang('POWERED_BY') ?>&nbsp;<a href="http://www.pluxml.org" title="<?php $plxShow->lang('PLUXML_DESCRIPTION') ?>">PluXml</a>
				<?php $plxShow->lang('IN') ?>&nbsp;<?php $plxShow->chrono(); ?>&nbsp;
				<?php $plxShow->httpEncoding() ?>
			</p>
			<ul class="inline-list">
				<li><a href="<?php $plxShow->urlRewrite('feed.php?rss') ?>" title="<?php $plxShow->lang('ARTICLES_RSS_FEEDS'); ?>"><?php $plxShow->lang('ARTICLES'); ?></a></li>
				<li><a href="<?php $plxShow->urlRewrite('feed.php?rss/commentaires'); ?>" title="<?php $plxShow->lang('COMMENTS_RSS_FEEDS') ?>"><?php $plxShow->lang('COMMENTS'); ?></a></li>
				<li><a href="<?php $plxShow->urlRewrite('#top') ?>" title="<?php $plxShow->lang('GOTO_TOP') ?>"><?php $plxShow->lang('TOP') ?></a></li>
			</ul>
		</div>
	</footer>

</body>

</html>
