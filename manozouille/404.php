<?php $theme->display ( 'header' ); ?>
	<div id="main" role="main">
		<div class="grid grid-pad">
			<section class="col-9-12" id="articles">
				<div class="not-found" role="search">
					<h4><?php _e("It seems you couldn't find what you are looking for."); ?></h4>
					<div id="triste"></div>
					<p><?php _e('Perhaps you can try searching.'); ?></p>
					<?php $theme->display ( 'searchform' ); ?>
				</div>
			</section>
            <section class="col-3-12" id="sidebar">
                <div class="sidebar">
                    <?php $theme->display('sidebar'); ?>
                </div>
            </section>
		</div>
	</div>
	<?php $theme->display ( 'footer' ); ?>
