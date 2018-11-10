<nav class="nav">
  <div class="container">
    <div class="grid">
      <div class="col sml-12 med-3">
        <ul class="menu text-center">
          <li class="logo"><a href="https://pluxml.org" title="PluXml"><img class="float-left" src="<?php $plxShow->template(); ?>/img/favicon/favicon-32x32.png"><strong>PluXml.org</strong></a></li>
        </ul>
      </div>
      <div class="col sml-12 med-9 lrg-6">
        <ul class="menu text-center">
          <li><a href="https://wiki.pluxml.org" title="Documentation">Documentation</a></li>
          <li><a href="https://ressources.pluxml.org" title="Ressources">Ressources</a></li>
          <li><a href="https://forum.pluxml.org" title="Forum">Forum</a></li>
          <?php $plxShow->pageBlog('<li class="#page_class" id="#page_id"><a href="#page_url" title="#page_name">#page_name</a></li>'); ?>
        </ul>
      </div>
      <div class="col sml-hide med-hide lrg-3 lrg-show">
        <ul class="menu text-right">
          <li><a href="http://plucss.pluxml.org/" title="PluCSS">PluCSS</a></li>
          <li><a href="http://visualwizard.pluxml.org/" title="Visual Wizard">Visual Wizard</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>
