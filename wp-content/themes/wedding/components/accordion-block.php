
	
<h3><?php the_field( 'accordion_header' ); ?></h3>
		
<?php if ( have_rows( 'accordion' ) ) : ?>
	<div id="accordion">

	<?php while ( have_rows( 'accordion' ) ) : the_row(); ?>
		<div class="card">
	    <div class="card-header" id="heading-<?php echo get_row_index(); ?>-">
	      <h3 class="mb-0">
	        <button id="btn-<?php echo get_row_index(); ?>-" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-<?php echo get_row_index(); ?>-" aria-expanded="false" aria-controls="collapse-<?php echo get_row_index(); ?>-">
	          <?php the_sub_field( 'title' ); ?> 
	        </button>
	      </h3>
	    </div>

	    <div id="collapse-<?php echo get_row_index(); ?>-" class="collapse" aria-labelledby="heading-<?php echo get_row_index(); ?>-" data-parent="#accordion">
	      <div class="card-body">
	        <?php the_sub_field( 'content' ); ?>
	      </div>
	    </div>
	  </div>
		
		
	<?php endwhile; ?>
	</div>
<?php else : ?>
	<?php // no rows found ?>
<?php endif; ?>




  