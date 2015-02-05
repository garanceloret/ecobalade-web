<header id="navbar" role="banner" class="navbar navbar-fixed-top">
  <div class="navbar-inner">
  	<div class="container">  
  	  <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
  	  <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
  		<span class="icon-bar"></span>
  		<span class="icon-bar"></span>
  		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
  	  </a>
      <?php print_r(render($page['content']['metatags'])); ?>
  	  <?php if ($logo): ?>
    		<a class="brand" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
    		  <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
    		</a>
  	  <?php endif; ?>

  	  <?php if ($site_name || $site_slogan): ?>
    		<hgroup id="site-name-slogan">
    		  <?php if ($site_name): ?>
    			<h1>
    			  <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" class="brand"><?php print $site_name; ?></a>
    			</h1>
    		  <?php endif; ?>
    		</hgroup>
  	  <?php endif; ?>
  	  
  	  <div class="nav-collapse pull-right">
    	  <nav role="navigation">
      		<?php if ($primary_nav): ?>
      		  <?php print $primary_nav; ?>
      		<?php endif; ?>
      	  
      		<?php if ($search): ?>
      		  <?php if ($search): print render($search); endif; ?>
      		<?php endif; ?>
      		
      		<?php if ($secondary_nav): ?>
      		  <?php print $secondary_nav; ?>
      		<?php endif; ?>
    		</nav>
  	  </div>         
  	</div>
  </div>
</header>

<div class="container">

  <header role="banner" id="page-header">
    <?php if ( $site_slogan ): ?>
      <p class="lead"><?php print $site_slogan; ?></p>
    <?php endif; ?>

    <?php print render($page['header']); ?>
  </header> <!-- /#header -->
	 <?php if ($breadcrumb): print $breadcrumb; endif;?>
      <a id="main-content"></a>
	<div class="container-node">
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <h1 class="page-header"><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
	  <?php print $messages; ?>
	   <?php print $messages; ?>
	<div class="row">
	  
    <?php if ($page['sidebar_first']): ?>
      <aside class="span3" role="complementary">
        <?php print render($page['sidebar_first']); ?>
      </aside>  <!-- /#sidebar-first -->
    <?php endif; ?>  
	   <?php if ($page['highlighted']): ?>
        <div class="highlighted hero-unit"><?php print render($page['highlighted']); ?></div>
      <?php endif; ?>
     
	  <section class="<?php print _twitter_bootstrap_content_span($columns); ?>">  
     
      <?php if ($tabs): ?>
        <?php print render($tabs); ?>
      <?php endif; ?>
      <?php if ($page['help']): ?> 
        <div class="well"><?php print render($page['help']); ?></div>
      <?php endif; ?>
      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
     
	<!--- ONGLETS -->
	<ul class="nav nav-tabs" id="myTab">
		<li class="active">
			<a  class="description" href="#description" data-toggle="tab" >Description</a>
		<!---	<a  data-toggle="tab" data-target="#description">Description</a> -->
		</li>
		<li><a class="espece" href="#espece" data-toggle="tab" >Espèces</a></li>
	</ul> 
	<div class="tab-content">
		<div class="tab-pane active" id="description"> 
			<!-- *****SLIDESHOW DETAIL BALADE****** -->
			 <?php if ($node){
				$baladenid = $node->vid; 
				print views_embed_view('v_slideshow_detail_balade','block',$baladenid); 
			}?> 
			<!-- AddThis Button BEGIN -->
    <div id="boutons_partage">
      <div class="addthis_toolbox addthis_default_style addthis_32x32_style" >
          <a class="addthis_button_facebook"></a>
          <a class="addthis_button_twitter"></a>
          <a class="addthis_button_google_plusone_share"></a>
          <a class="addthis_counter addthis_bubble_style"></a>
      </div>
    </div>
    <!-- AddThis Button END -->
			<!-- *****Contenu NODE DETAIL BALADE****** -->
			
			<div class="field-content">
				</br>
				<div class="field-label titreDescro">
					Description de la balade:&nbsp;
				</div>				
				<?php $res = views_get_view_result('v_especes_phares','block',$baladenid); ?>
				<?php $maDescro = $res[0]->_field_data[nid][entity]->field_description_de_la_balade[und][0][value]; ?>
				
				<p class='textDescro'><?php echo $maDescro; ?></p>		
			
				<div class="especes-phares">
					<h4>Espèces phares :&nbsp;</h4>
					<?php $taxonsIDPhares = views_get_view_result('v_especes_phares','block_1',$baladenid); ?>
					<?php $taxonsIDPhares = $res[0]->_field_data[nid][entity]->field_esp_ces_phares[und]; ?>
					
					<?php 
						for($i=0;$i<count($taxonsIDPhares);$i++){

							print views_embed_view('v_especes_phares','block_2', $taxonsIDPhares[$i]['nid']);
												
						}
						
					?>

				</div>
				<?php print views_embed_view('v_especes_phares','block_3', $baladenid);?>
			</div>
						
			<?php print render($page['content']); ?>
		</div>
		<div class="tab-pane" id="espece">
			<!-- *****View Liste taxon de la balade ****** -->
			
			<?php if ($node):?>
				<?php $baladenid = $node->nid;  ?>	
						<div class="row-fluid">
							<div class="span12" id='les_picto_balades'>
								<div title='Toutes les espèces' id='resetAllFilterOnTaxa'>Tout</div>
								<div title="Les oiseaux" id="picto_oiseaux"></div>
								<?php if($baladenid != '269' && $baladenid != '9' &&  $baladenid != '2236' && $baladenid != '2292'):?>
										<div title="Les mammifères" id="picto_mamifere"></div>
								<?php endif; ?>
								<?php if($baladenid != '2292'):?>
									<div title="Les petites bêtes" id="picto_insect"></div>
								<?php endif; ?>
								<?php if($baladenid != '2355' && $baladenid != '2292'):?>
										<div title="Les reptiles" id="picto_reptile"></div>
								<?php endif; ?>
								<div title="Les arbres" id="picto_arbre"></div>
								<div title="Les arbustes" id="picto_arbuste"></div>
								<?php if($baladenid == '104'):?>
										<div title="Les mollusques" id="picto_mollusque"></div>
								<?php endif; ?>
								<?php if($baladenid == '2236' || $baladenid == '2355' || $baladenid == '2358' || $baladenid == '2353' || $baladenid == '2323' || $baladenid == '2354' || $baladenid == '2292'):?>
									<div title="Les Amphibiens" id="picto_amphibien"></div>
								<?php endif; ?>
							</div>
						</div>
						
				<?php print views_embed_view('v_liste_taxon_balade','block_list_espece',$baladenid);?>
			<?php endif;?>
	
		</div>
	</div>
	  </section>
	<!-- *****ASIDE RIGHT****** -->
    <?php if ($page['sidebar_second']): ?>
      <aside class="span3 region-sidebar-second" role="complementary">
       <?php if ($node): ?>  
	   
		<?php print views_embed_view('v_note_balade','block',$baladenid);?>
		<a id="btn-esp" class="btn btn-primary" target="_blank" alt="lien vers la liste des espèces" href="#espece" title="Les espèces a découvrir" ><h2>Espèces à découvrir</h2></a>
		<?php print views_embed_view('v_caracteristiques_balade','block_1',$baladenid);?>
		<h2>Randonner avec un guide ?</h2>
		<?php print views_embed_view('v_guide_balade','block',$baladenid);?>
		<?php if($baladenid != '104' && $baladenid != '2387' && $baladenid != '270' && $baladenid != '2237' && $baladenid != '2355' && $baladenid != '269' && $baladenid != '2354' && $baladenid != '2356' && $baladenid != '2358' && $baladenid != '2353' && $baladenid != '268' ):?>
		<a id="btn-guide" class="btn btn-primary" target="" rel="" title="Contactez-nous" href="mailto:contact@natural-solutions.eu">Vous êtes guides, rejoignez-nous !</a>
		<?php endif; ?>
		<h2>Localisation</h2>
		<?php print views_embed_view('v_map_localisation_balade','block',$baladenid);?>
		<h2>Informations pratiques</h2>
		<?php print views_embed_view('v_informations_pratiques_balade','block',$baladenid);?>
		<h2>Balades similaires</h2>
		<?php $difficulte = $page['content']['system_main']['nodes'][$baladenid]['field_description_de_la_balade']['#object']->field_difficulte['und'][0]['taxonomy_term']->tid; ?>
		<?php print views_embed_view('v_balade_similaire','block',$difficulte);?>		
	<?php endif; ?>
      </aside>  <!-- /#sidebar-second -->
    <?php endif; ?>

  </div>
 </div><!-- fin container-node -->
  		<?php print render($page['footer']); ?>
	</div>
<script type="text/javascript">
jQuery( document ).ready(function() {
	
	if( $('.imageComment').length > 0 ) $('.imageComment').vanillabox();

	//Click sur bouton commenter
	$('section#comments section.collapseComment h2').click(function(){
		if ($('section#comments section.collapseComment form').is(':visible')) $('section#comments section.collapseComment form').hide();
		else $('section#comments section.collapseComment form').show();
	});

});
</script>

<script>
  $(function () {
  var currentUrl = document.URL;
  var spliter = currentUrl.split("#");
  if(spliter[1] == 'espece') $('#myTab a:last').tab('show');
  })
</script>

<!-- FILTRE ALL ESPECE -->
<script>
  $('#resetAllFilterOnTaxa').click(function() {
    $(".Insectes").parent().parent().show();
    $(".Mammifères").parent().parent().show();
    $(".Reptiles").parent().parent().show();
    $(".Oiseaux").parent().parent().show();
    $(".Arbres").parent().parent().show();
    $(".Arbustes.et.plantes").parent().parent().show();
    $(".Mollusque").parent().parent().show();
	$(".Amphibiens").parent().parent().show();
	
	$("#picto_oiseaux").css("border","none");
	$("#picto_mamifere").css("border","none");
	$("#picto_insect").css("border","none");
	$("#picto_reptile").css("border","none");
	$("#picto_arbre").css("border","none");
	$("#picto_arbuste").css("border","none");
	$("#picto_mollusque").css("border","none");
	$("#picto_amphibien").css("border","none");
});
</script>
<!-- FILTRE ANIMAUX -->
<script>
  $('#picto_oiseaux').click(function() {
    $(".Oiseaux").parent().parent().show();
    $(".Insectes").parent().parent().hide();
    $(".Mammifères").parent().parent().hide();
    $(".Reptiles").parent().parent().hide();
    $(".Arbres").parent().parent().hide();
    $(".Arbustes.et.plantes").parent().parent().hide();
    $(".Mollusque").parent().parent().hide();
	$(".Amphibiens").parent().parent().hide();
	
	$("#resetAllFilterOnTaxa").css("border","none");
	$("#picto_oiseaux").css("border","2px dotted #3b501B");
		$("#picto_oiseaux").css("borderRadius","100%");
	
	$("#picto_mamifere").css("border","none");
	$("#picto_insect").css("border","none");
	$("#picto_reptile").css("border","none");
	$("#picto_arbre").css("border","none");
	$("#picto_arbuste").css("border","none");
	$("#picto_mollusque").css("border","none");
	$("#picto_amphibien").css("border","none");
	
});  
</script>
<script>
 $('#picto_mamifere').click(function() {
    $(".Mammifères").parent().parent().show();
    $(".Insectes").parent().parent().hide();
    $(".Reptiles").parent().parent().hide();
    $(".Oiseaux").parent().parent().hide();
    $(".Arbres").parent().parent().hide();
    $(".Arbustes.et.plantes").parent().parent().hide();
    $(".Mollusque").parent().parent().hide();
	$(".Amphibiens").parent().parent().hide();
	
	$("#resetAllFilterOnTaxa").css("border","none");
	$("#picto_oiseaux").css("border","none");
	$("#picto_mamifere").css("border","2px dotted #3b501B");
		$("#picto_mamifere").css("borderRadius","100%");
	
	$("#picto_insect").css("border","none");
	$("#picto_reptile").css("border","none");
	$("#picto_arbre").css("border","none");
	$("#picto_arbuste").css("border","none");
	$("#picto_mollusque").css("border","none");
	$("#picto_amphibien").css("border","none");
});  
</script>
<script>
  $('#picto_reptile').click(function() {
    $(".Reptiles").parent().parent().show();
    $(".Insectes").parent().parent().hide();
    $(".Mammifères").parent().parent().hide();
    $(".Oiseaux").parent().parent().hide();
    $(".Arbres").parent().parent().hide();
    $(".Arbustes.et.plantes").parent().parent().hide();
    $(".Mollusque").parent().parent().hide();
	$(".Amphibiens").parent().parent().hide();
	
		$("#resetAllFilterOnTaxa").css("border","none");
	$("#picto_oiseaux").css("border","none");
	$("#picto_mamifere").css("border","none");
	$("#picto_insect").css("border","none");
	$("#picto_reptile").css("border","2px dotted #3b501B");
		$("#picto_reptile").css("borderRadius","100%");
	
	$("#picto_arbre").css("border","none");
	$("#picto_arbuste").css("border","none");
	$("#picto_mollusque").css("border","none");
	$("#picto_amphibien").css("border","none");
});  
</script>
<script>
 $('#picto_insect').click(function() {
    $(".Insectes").parent().parent().show();
    $(".Reptiles").parent().parent().hide();
    $(".Mammifères").parent().parent().hide();
    $(".Oiseaux").parent().parent().hide();
    $(".Arbres").parent().parent().hide();
    $(".Arbustes.et.plantes").parent().parent().hide();
    $(".Mollusque").parent().parent().hide();
	$(".Amphibiens").parent().parent().hide();
	
		$("#resetAllFilterOnTaxa").css("border","none");
	$("#picto_oiseaux").css("border","none");
	$("#picto_mamifere").css("border","none");
	$("#picto_insect").css("border","2px dotted #3b501B");
		$("#picto_insect").css("borderRadius","100%");
	
	$("#picto_reptile").css("border","none");
	$("#picto_arbre").css("border","none");
	$("#picto_arbuste").css("border","none");
	$("#picto_mollusque").css("border","none");
	$("#picto_amphibien").css("border","none");
}); 
</script>
<script>
    $('#picto_mollusque').click(function() {
    $(".Mollusque").parent().parent().show();
    $(".Insectes").parent().parent().hide();
    $(".Mammifères").parent().parent().hide();
    $(".Oiseaux").parent().parent().hide();
    $(".Reptiles").parent().parent().hide();
    $(".Arbres").parent().parent().hide();
    $(".Arbustes.et.plantes").parent().parent().hide();
	$(".Amphibiens").parent().parent().hide();
	
		$("#resetAllFilterOnTaxa").css("border","none");
	$("#picto_oiseaux").css("border","none");
	$("#picto_mamifere").css("border","none");
	$("#picto_insect").css("border","none");
	$("#picto_reptile").css("border","none");
	$("#picto_arbre").css("border","none");
	$("#picto_arbuste").css("border","none");
	$("#picto_mollusque").css("border","2px dotted #3b501B");
		$("#picto_mollusque").css("borderRadius","100%");
	
	$("#picto_amphibien").css("border","none");
}); 
</script>
<script>
    $('#picto_amphibien').click(function() {
	$(".Amphibiens").parent().parent().show();
    $(".Mollusque").parent().parent().hide();
    $(".Insectes").parent().parent().hide();
    $(".Mammifères").parent().parent().hide();
    $(".Oiseaux").parent().parent().hide();
    $(".Reptiles").parent().parent().hide();
    $(".Arbres").parent().parent().hide();
    $(".Arbustes.et.plantes").parent().parent().hide();
	
		$("#resetAllFilterOnTaxa").css("border","none");
	$("#picto_oiseaux").css("border","none");
	$("#picto_mamifere").css("border","none");
	$("#picto_insect").css("border","none");
	$("#picto_reptile").css("border","none");
	$("#picto_arbre").css("border","none");
	$("#picto_arbuste").css("border","none");
	$("#picto_mollusque").css("border","none");
	$("#picto_amphibien").css("border","2px dotted #3b501B");
		$("#picto_amphibien").css("borderRadius","100%");
	
}); 
</script>

<!-- FILTRE VEGETAUX -->
<script>
  $('#picto_arbre').click(function() {
    $(".Arbres").parent().parent().show();
    $(".Insectes").parent().parent().hide();
    $(".Mammifères").parent().parent().hide();
    $(".Oiseaux").parent().parent().hide();
    $(".Reptiles").parent().parent().hide();
    $(".Arbustes.et.plantes").parent().parent().hide();
    $(".Mollusque").parent().parent().hide();
	$(".Amphibiens").parent().parent().hide();
	
		$("#resetAllFilterOnTaxa").css("border","none");
	$("#picto_oiseaux").css("border","none");
	$("#picto_mamifere").css("border","none");
	$("#picto_insect").css("border","none");
	$("#picto_reptile").css("border","none");
	$("#picto_arbre").css("border","2px dotted #3b501B");
		$("#picto_arbre").css("borderRadius","100%");
	
	$("#picto_arbuste").css("border","none");
	$("#picto_mollusque").css("border","none");
	$("#picto_amphibien").css("border","none");
}); 
</script>
<script>
    $('#picto_arbuste').click(function() {
    $(".Arbustes.et.plantes").parent().parent().show();
    $(".Insectes").parent().parent().hide();
    $(".Mammifères").parent().parent().hide();
    $(".Oiseaux").parent().parent().hide();
    $(".Reptiles").parent().parent().hide();
    $(".Arbres").parent().parent().hide();
    $(".Mollusque").parent().parent().hide();
	$(".Amphibiens").parent().parent().hide();
	
		$("#resetAllFilterOnTaxa").css("border","none");
	$("#picto_oiseaux").css("border","none");
	$("#picto_mamifere").css("border","none");
	$("#picto_insect").css("border","none");
	$("#picto_reptile").css("border","none");
	$("#picto_arbre").css("border","none");
	$("#picto_arbuste").css("border","2px dotted #3b501B");
		$("#picto_arbuste").css("borderRadius","100%");
	
	$("#picto_mollusque").css("border","none");
	$("#picto_amphibien").css("border","none");
}); 
</script>
<!-- FILTRE CHAMPIGNON -->
