﻿<header id="navbar" role="banner" class="navbar navbar-fixed-top">
  <div class="navbar-inner">
  	<div class="container">
  	  <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
  	  <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
  		<span class="icon-bar"></span>
  		<span class="icon-bar"></span>
  		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
  	  </a>
  	  <?php render($page['content']['metatags']); ?>
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
	  <!-- PLUGIN SOCIAL TEST
	  <div id="socialBar" class='shareaholic-canvas' data-shareaholic-widgets='share_buttons'></div>
	  
	  <script type="text/javascript">
		//<![CDATA[
		  (function() {
			var shr = document.createElement('script');
			shr.src = '//dtym7iokkjlif.cloudfront.net/assets/pub/shareaholic.js';
			shr.type = 'text/javascript';
			shr.async = 'true';
			shr.onload = shr.onreadystatechange = function() {
			  var rs = this.readyState;
			  if (rs && rs != 'complete' && rs != 'loaded') return;
			  var apikey = '1fb5267c527c937899cbd172c03ededd'
			  try { Shareaholic.init(apikey); } catch (e) {}
			};
			var s = document.getElementsByTagName('script')[0];
			s.parentNode.insertBefore(shr, s);
		  })();
		//]]>
		</script>
  	  -->
  	  <div class="nav-collapse pull-right">
    	  <nav role="navigation">
      		<?php if ($primary_nav): ?>
      		  <?php //print $primary_nav;  ?>
			<!-- Personalisation du menu pour la page d'accueil. Pour comportement sans menu deroulant -->
			<div style='font-size:18px;float:right;padding-top:4%;padding-bottom:4%;'>

				<div style='float:left;'>
					<a href="" alt="Accueil" style="background: none repeat scroll 0% 0% rgb(77, 187, 116);
					border-radius: 2px 2px 2px 2px;
					color: white;
					display: block;
					float: none;
					text-decoration: none;
					padding: 10px 15px;
					text-shadow: 0px 1px 0px rgb(46, 144, 80);"
					class="active">Accueil</a>
				</div>
				<div style="float:left;padding-left:15px;"><a href="liste-balades" alt="Liens vers les balades" 
					style="background: none repeat scroll 0% 0%;
					border-radius: 2px 2px 2px 2px;
					color: rgb(119, 119, 119);
					display: block;
					float: none;
					padding: 10px 15px;
					text-decoration: none;
					text-shadow: 0px 1px 0px rgb(255, 255, 255);"
					class="active">Les balades</a>
				</div>
				
				<div style="float:left;padding-left:15px;"><a href="liste-especes" alt="Liens vers les Espèces" 
					style="background: none repeat scroll 0% 0%;
					border-radius: 2px 2px 2px 2px;
					color: rgb(119, 119, 119);
					display: block;
					float: none;
					padding: 10px 15px;
					text-decoration: none;
					text-shadow: 0px 1px 0px rgb(255, 255, 255);"
					class="active">Les espèces</a>
				</div>
				
				<div style="float:left;padding-left:15px;"><a href="les-sites" alt="Liens vers les Sites" 
					style="background: none repeat scroll 0% 0%;
					border-radius: 2px 2px 2px 2px;
					color: rgb(119, 119, 119);
					display: block;
					float: none;
					padding: 10px 15px;
					text-decoration: none;
					text-shadow: 0px 1px 0px rgb(255, 255, 255);"
					class="active">Les sites</a>
				</div>				
				
				<div style="float:left;padding-left:15px;"><a href="content/mobile" alt="Liens vers la page mobile" 
					style="background: none repeat scroll 0% 0%;
					border-radius: 2px 2px 2px 2px;
					color: rgb(119, 119, 119);
					display: block;
					float: none;
					padding: 10px 15px;
					text-decoration: none;
					text-shadow: 0px 1px 0px rgb(255, 255, 255);"
					class="active">Mobile</a>
				</div>
				<div style="float:left;padding-left:15px;"><a href="boutique" alt="Liens vers la boutique" 
					style="background: none repeat scroll 0% 0%;
					border-radius: 2px 2px 2px 2px;
					display: block;
					float: none;
					padding: 10px 15px;
					text-decoration: none;
					text-shadow: 0px 1px 0px rgb(255, 255, 255);"
					class="active">La boutique</a>
				</div>
				
			</div>


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

<div id="img-front">
	<span class="txt-front">
		<h2>En balade ou en rando, découvrez la nature pas à pas...</h2>
		<p>Apprenez à reconnaître la faune et la flore facilement avec ecoBalade</p>
		
		<a id="btn-front" class="btn" target="" rel="" title="Les Balades" href="http://www.ecobalade.fr/balade">Trouver une balade</a>
	</span>
</div>

<div class="container">

  <header role="banner" id="page-header">
    <?php if ( $site_slogan ): ?>
      <p class="lead"><?php print $site_slogan; ?></p>
    <?php endif; ?>

    <?php print render($page['header']); ?>
  </header> <!-- /#header -->
	
	<div class="row">
	  
    <?php if ($page['sidebar_first']): ?>
      <aside class="span3" role="complementary">
        <?php print render($page['sidebar_first']); ?>
      </aside>  <!-- /#sidebar-first -->
    <?php endif; ?>  
	  
	  <section class="<?php print _twitter_bootstrap_content_span($columns); ?>">  
	  <div id="social_top">
	  <a rel="external" id="lien_facebook" href="https://www.facebook.com/EcoBalade" title="Suivez-nous sur Facebook" target="_blank"></a>
	  <a href="https://twitter.com/ecobalade" title="Suivez-nous sur Twitter" id="lien_twitter" target="_blank" rel="external"></a>
	  <a href="https://plus.google.com/106878953750776121381/posts" title="Suivez-nous sur Google+" id="lien_google" target="_blank" rel="external"></a>
	  <a href="http://m.pinterest.com/Ecobalade" title="Suivez-nous sur Pinterest" id="lien_pinterest" target="_blank" rel="external"></a>
	  <a href="http://www.tumblr.com/blog/ecobalade" title="Suivez-nous sur Tumblr" id="lien_tumblr" target="_blank" rel="external"></a>
	  <a href="http://instagram.com/ecobalade#" title="Suivez-nous sur Instagram" id="lien_instagram" target="_blank" rel="external"></a>
	  
	  
	  </div>
      <?php if ($page['highlighted']): ?>
        <div class="highlighted hero-unit"><?php print render($page['highlighted']); ?>
			
		</div>
      <?php endif; ?>
      <?php if ($breadcrumb): print $breadcrumb; endif;?>
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <h1 class="page-header"><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php if ($tabs): ?>
        <?php print render($tabs); ?>
      <?php endif; ?>
      <?php if ($page['help']): ?> 
        <div class="well"><?php print render($page['help']); ?></div>
      <?php endif; ?>
      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
	  <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit" id="accueil">
	  <div class="row-fluid">
			<div class="span6 hero-unit-teaser">
				<h1>En balade ou en rando, découvrez la nature pas à pas...</h1>
				<p style="text-align:left;">En <strong>randonnée</strong>, apprenez à reconnaître la <strong>faune</strong> et la <strong>flore</strong> facilement avec <strong>ecoBalade</strong>. Partagez vos découvertes et sortez ressourcés de cette aventure! Une nouvelle façon de vivre une <strong>balade</strong> dans la <strong>nature</strong></p>
					<div>
						<!-- <a class="span6 " href="liste-balades" title="Découvrir toutes les balades disponibles" alt="Liens vers les balades"><img src="<?php echo $base_path;?>sites/all/themes/ecobaladeTwitter/img/btn_touteslesbalades.png"/></a> -->
						<!-- <a class="span6 " id='hp_button_android' target="_blank" rel="external" title="Télécharger l'application ecoBalade sur GooglePlay" href="https://play.google.com/store/apps/details?id=com.ns.ecoBalade&feature=search_result#?t=W251bGwsMSwyLDEsImNvbS5ucy5lY29CYWxhZGUiXQ.."><img src="<?php echo $base_path;?>sites/all/themes/ecobaladeTwitter/img/getItOnGooglePlay.jpg" alt="Liens vers GooglePlay"/></a> -->
						<!-- <a class="span6 " id='hp_button_android' target="_blank" rel="external" title="Télécharger l'application ecoBalade sur GooglePlay" href="https://play.google.com/store/apps/details?id=com.ns.ecoBalade&feature=search_result#?t=W251bGwsMSwyLDEsImNvbS5ucy5lY29CYWxhZGUiXQ.."><img src="<?php echo $base_path;?>sites/all/themes/ecobaladeTwitter/img/logo_googlePlay_vert.jpg" alt="Liens vers GooglePlay"/></a> -->
						<!-- <a class="span6 " target="_blank" rel="external" title="Télécharger l'application sur l'appleStore" href="https://itunes.apple.com/fr/app/ecobalade/id674569147?l=fr&ls=1&mt=8"><img src="<?php echo $base_path;?>sites/all/themes/ecobaladeTwitter/img/app_store_button_white.png" alt="Liens vers l'AppleStore"/></a> -->
						<a class="span5 button" id='hp_button_android' target="_blank" rel="external" title="Télécharger l'application ecoBalade sur GooglePlay" href="https://play.google.com/store/apps/details?id=com.ns.ecoBalade&feature=search_result#?t=W251bGwsMSwyLDEsImNvbS5ucy5lY29CYWxhZGUiXQ.."><span class="icon-android"></span><em>ANDROID APP ON</em>Google play</a>
						<a class="span5 button" id='hp_button_apple' target="_blank" rel="external" title="Télécharger l'application sur l'appleStore" href="https://itunes.apple.com/fr/app/ecobalade/id674569147?l=fr&ls=1&mt=8"><span class="icon-apple"></span><em>Disponible sur</em>App Store</a>
						<a id="fold1BntAllBalades" class="span5 btn btn-primary btn-large" target="" rel="" title="Toutes les balades" href="<?php echo $base_path;?>liste-balades">Toutes les balades</a>
					</div>	
					
					<!-- <script type="text/javascript">
					  $(document).ready(function () {
						$('#shell img').plaxify();
						$.plax.enable();
					  })
					</script>-->

					<!--<div id="shell">
					  <a href="liste-balades" alt="Liens vers les balades"><img src="<?php echo $base_path;?>sites/all/themes/ecobaladeTwitter/img/img_tt_les_balades.png" data-xrange="10" data-yrange="20" id="bnt_tt_balade_moving"/></a>
					</div>-->
			
				</p>

			</div>
			<div class="span6">
				<?php $slideshow = views_embed_view('v_slideshow_accueil', 'block');?>
				<?php print render($slideshow);?>
			</div>
		</div> 
		</div>
			<div id="ancre2"></div>
		<hr>
	
	
	<!-- fold 3 -->
	<div class="row" id="fold3">
		<div class="fleche-balade"><img src="<?php echo $base_path;?>sites/all/themes/ecobaladeTwitter/img/balade/fleche-balade.png"/><p>10km<p/></div>
		<div class="titreBalade">
			<h2>La balade</h2>
			<ul class="filArianeBalade">
				<li><span class="labelLine">France&nbsp&nbsp&nbsp></span></li>	
				<li><span class="labelLine">Provence Alpes Côtes d'Azur&nbsp&nbsp&nbsp></span></li>
				<li class="filArianeBaladeFin"><span class="labelLine">Roque d'Anthéron</span></li>
			</ul>
		</div>
		<div class="span6 contenuEtiquette  retour-force">
			<div class="etiquette">
				<p>La balade</p>
			</div>
			<div class="secondEtiquette">
				<p>du mois</p> 
			</div>
          <a href="<?php echo $base_path;?>balade/balade-la-roque-d-antheron-13-les-bords-de-la-durance" alt=""><img src="<?php echo $base_path;?>sites/all/themes/ecobaladeTwitter/img/balade/bord_de_durance.jpg" alt="La Roque d'Anthéron" title="La Roque d'Anthéron"/></a>
        </div>
        <div class="span6 ">
		<div class="miniCarte"><img src="<?php echo $base_path;?>sites/all/themes/ecobaladeTwitter/img/balade/miniCarte_toulon.png" alt="" /></div>
		<h3>La Roque d'Anthéron</h3>
          <p>La <strong>balade</strong> des bords de la <strong>Durance</strong> prend son départ au cœur du charmant village de la <a HREF="http://www.ville-laroquedantheron.fr/"><strong>Roque d’Anthéron</strong></a>, connu comme témoin du rôle des vaudois et des protestants à l’origine du développement du Lubéron au XVIe siècle. Situé au Nord Ouest d’Aix en Provence, la Roque d’Anthéron est entouré de magnifiques paysages sauvages et préservés, à quelques pas du <a HREF="http://www.parcduluberon.fr/"><strong>Parc Naturel Régional du Luberon</strong></a>.</p>
					<p>Cette<strong> randonnée nature</strong> vous emmènera à la découverte de la <strong>faune</strong> typique des milieux d’eau douce ! Vous pourrez observer, le long de la <strong>Durance</strong>, le <a HREF="<?php echo $base_path;?>espece/guepier-d-europe#.VHX03dKG9Gs">Guêpier d’Europe</a>, le <a HREF="<?php echo $base_path;?>espece/heron-pourpre">héron pourpré</a> ou des traces du <a HREF="<?php echo $base_path;?>espece/castor-d-europe#.VHX1Y9KG9Gs">Castor d’Europe</a> ! Cette zone humide est le lieu d’habitat de nombreuse espèces d’oiseaux et notamment d’échassiers. C’est un milieu d’une étonnante richesse !</p>
			<div class="row-fluid zoneEspecePhotoBalade">
				<div class="span4"><a href="<?php echo $base_path;?>espece/guepier-d-europe"><img src="<?php echo $base_path;?>sites/all/themes/ecobaladeTwitter/img/balade/guepier-d-europe.jpg" alt="le Guepier d'europe" title="le Guepier d'europe"/></a></div>
				<div class="span4"><a href="<?php echo $base_path;?>espece/heron-pourpre"><img src="<?php echo $base_path;?>sites/all/themes/ecobaladeTwitter/img/balade/heron-pourpre.jpg" alt="le Héron pourpré" title="le Héron pourpré"/></a></div>
				<div class="span4"><a href="<?php echo $base_path;?>espece/castor-d-europe"><img src="<?php echo $base_path;?>sites/all/themes/ecobaladeTwitter/img/balade/castor-d-europe.jpg" alt="le Castor d'europe" title="le Castor d'europe"/></a></div>
			</div>
			<div class="row-fluid zoneBtnBalade">
				<!-- <div class="span5 offset3"><p class=""><a href="liste-balades" alt="Liens vers les balades"><img src="<?php echo $base_path;?>sites/all/themes/ecobaladeTwitter/img/btn_touteslesbalades.png"/></a></p></div> -->
				<div class="span12">
					<a class="span6 btn btn-primary bnt-large" target="" rel="" title="Détails de la balade" href="<?php echo $base_path;?>balade/balade-de-la-roque-d-antheron-13-les-bords-de-la-durance">Détails de la balade</a> 
					<a class="span4 btn btn-primary bnt-large offset2" target="" rel="" title="Les balades" href="<?php echo $base_path;?>liste-balades">Toutes les balades</a>
				</div>
				<!--<div class="span4"><p class=""><a class="btn btn-warning btn-large disabled" target="_blank" rel="external" title="Bientôt en ligne!" href="">Réserver la balade<br/></a></p></div>-->
			</div>
	  </div>
    </div>
	<hr>
    <!-- fold 2 -->
    <div class="row" id="fold2">
		<h2>Comment ça marche ?</h2>
        <div class="span4">
          <h3>La clé de découverte</h3>
          <p>Vous ne connaissez pas certaines espèces que vous croisez sur votre <strong>balade</strong>? Identifiez-les grâce à la clé de découverte que nous avons imaginée : cochez les caractéristiques, validez et c’est trouvé !</p>
        </div>
        <div class="span4">
          <h3>Observez lors de la balade</h3>
          <p>Voir sans être vu, retrouver des signes de présence des animaux, décrire les plantes... Votre <strong>application</strong> vous accompagnera et vous donnera toutes les astuces pour mieux observer.</p>
         
        </div>
        <div class="span4">
          <h3>Partagez vos découvertes</h3>
          <p>Inscrivez-vous sur le site et partagez toutes vos découvertes. Avec l’Open Data, elles pourront à tout moment bénéficier aux réseaux <strong>naturalistes</strong> !</p>
		</div>
    </div>
	  
	  
	<div id="ancre3"></div>
	<hr>
	  	  
		 	 
	<h4>Les espèces observées</h4>
	<div class="row-fluid friseEspece" id="ancreFooter">
		
		<!-- https://github.com/tholman/intense-images -->
		
		<div class="span2">
			<div data-image="<?php echo $base_path;?>sites/all/themes/ecobaladeTwitter/img/lapinou2.jpg" class="img-polaroid" data-title="<a href='espece/lapin-de-garenne' title='voir la fiche espèce'>Lapin de garenne</a>" data-caption="Présent dans la balade de <a href='balade/balade-de-la-belle-pierre' title='Voir la page balade'>la Belle Pierre</a>" id='lapinou'><div class="ajaxloader"></div></div>
		</div>
		<div class="span2">
			<div data-image="<?php echo $base_path;?>sites/all/themes/ecobaladeTwitter/img/gabian1.jpg" data-title="Goéland argenté" data-caption="Présent dans la balade du Cap Sizun (prochainement)" class="img-polaroid" id='gabian'><div class="ajaxloader"></div></div>
		</div>
		<div class="span2">
			<div data-image="<?php echo $base_path;?>sites/all/themes/ecobaladeTwitter/img/cerisier.jpg" data-title="<a href='espece/cerisier-de-sainte-lucie' title='voir la fiche espèce'>Cerisier de sainte Lucie</a>" data-caption="Présent dans la balade de <a href='balade/balade-du-parc-des-grottes-d-aze' title='Voir la page balade'>du parc des grottes d'Azé</a>" class="img-polaroid" id="cerisier"><div class="ajaxloader"></div></div>
		</div>
		<div class="span2">
			<div data-image="<?php echo $base_path;?>sites/all/themes/ecobaladeTwitter/img/Vergerette2.jpg" data-title="Vergerette" data-caption="Présentes en régions chaudes et tempérées" class="img-polaroid" id='vergerette'><div class="ajaxloader"></div></div>
		</div>
		<div class="span2">
			<div data-image="<?php echo $base_path;?>sites/all/themes/ecobaladeTwitter/img/moineau.jpg" data-title="<a href='espece/moineau-domestique' title='voir la fiche espèce'>Moineau domestique</a>" data-caption="Présent dans la balade de <a href='balade/balade-de-la-mine-de-cap-garonne' title='Voir la page balade'>la Mine de Cap Garonne</a>" class="img-polaroid" id="moineau"><div class="ajaxloader"></div></div>
		</div>
		<div class="span2">
			<div data-image="<?php echo $base_path;?>sites/all/themes/ecobaladeTwitter/img/citron2.jpg" data-title="<a href='espece/citron-0' title='voir la fiche espèce'>Citron</a>" data-caption="Présent dans la balade de <a href='balade/balade-de-l-oppidum-montagne-sainte-victoire' title='Voir la page balade'>l'oppidum - Montagne Sainte-Victoire</a>" class="img-polaroid" id="citron"><div class="ajaxloader"></div></div>
		</div>
		
	</div>

	  <hr>
      <?php //print render($page['content']); ?>
	  </section>

    <?php if ($page['sidebar_second']): ?>
      <aside class="span3" role="complementary">
        <?php print render($page['sidebar_second']); ?>
      </aside>  <!-- /#sidebar-second -->
    <?php endif; ?>

  </div>
  
</div>
<?php print render($page['footer']); ?>

<script>(function() {

	window.init = function() {

		jQuery('.img-polaroid').click(function(){


			// //affiche loader
			// if(device == 'tablette' || device == 'mobile' || device == 'bureau'){

				jQuery( this ).find('.ajaxloader').show();
				
				
			//}


			
		});



		window.onload = function() {
	
		    // Intensify all images with the 'intense' classname.
		    var elements = document.querySelectorAll( '.img-polaroid' );
		    Intense( elements );
		}


	}

}())
init(); // true



</script>