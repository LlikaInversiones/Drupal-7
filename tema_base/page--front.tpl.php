<?php  print render($page['content']['metatags']); ?>
<div class="zone-head">
	<div class="zone-logomenu">
		<div class="container">
			<div class="row">
				<div class="col-xs-6 col-sm-3 logo">
					<?php if ($logo): ?>
					    <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
					    <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
					    </a>
					<?php endif; ?>
				</div>
				<div class="col-xs-6 col-sm-9 redes sociales">
					<?php print render($page['redes_sociales']); ?> 
				</div>

			</div>
			<div class="row">				
				<div class="col-xs-6 col-sm-9 contenedor_menu">
					<?php if ($main_menu): ?>
						<!-- /#main-menu -->
					    <div id="main-menu" class="navigation">
					        <?php print theme('links__system_main_menu', array(
					            'links' => $main_menu,
					            'attributes' => array(
					            'id' => 'main-menu-links',
					            'class' => array('list-inline', 'clearfix'),
					            ),
					            'heading' => array(
					            'text' => t('Main menu'),
					            'level' => 'h2',
					            'class' => array('element-invisible'),
					            ),
					        )); ?>
					    </div> <!-- /#main-menu -->
					<?php endif; ?>
					<div id="menu-icon">C</div>			
				</div>
				<div class="col-xs-6 col-sm-3 zona_contacto">	
					<?php print render($page['zona_contacto']); ?> 
				</div>
			</div>
		</div>
	</div>
</div>

<div class="contenedor-general">
	<div class="zone-slider">
			<?php print render($page['slider']); ?>
	</div>
	<div class="zone-vistas">
		<div class="container">
			<?php print render($page['zona_vistas']); ?>
		</div>
	</div>
</div>

<div class="zone-footer">
	<div class="container contenedor-footer">
		<div class="row">
			<div class="col-sm-12 col-md-4 footer-first">
				<?php print render($page['footer_first']); ?>
			</div>			
			<div class="col-sm-12 col-md-4 footer-second">
				<?php print render($page['footer_second']); ?>
			</div>
			<div class="col-sm-12 col-md-4 footer-third">
				<?php print render($page['footer_third']); ?>
			</div>			
		</div>
	</div>
</div>
<div class="zone-by text-center">
	<div class="container">
		<?php print render($page['by']); ?>
	</div>
</div>