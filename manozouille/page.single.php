<?php $theme->display ( 'header' ); ?>
	<div id="main" role="main">
		<div class="grid grid-pad">
			<div class="col-9-12" id="articles">
				<div id="post-<?php echo $post->id; ?>" class="<?php echo $post->statusname; ?>">
					<h2>
						<a href="<?php echo $post->permalink; ?>" title="<?php echo $post->title; ?>"><?php echo $post->title_out; ?></a>
					</h2>
					<div class="entry">
						<?php echo $post->content_out; ?>
					</div>
					<div class="entryMeta">
						<?php if ( $loggedin ) { ?>
							<a href="<?php echo $post->editlink; ?>" title="<?php _e('Edit post'); ?>"><?php _e('Edit'); ?></a>
						<?php } ?>
					</div>
				</div>
			</div>
			<div class="col-3-12" id="sidebar">
				<div class="sidebar">
					<?php $theme->display ( 'sidebar' ); ?>
				</div>
			</div>
		</div>
	</div>
<?php $theme->display ( 'footer' ); ?>
