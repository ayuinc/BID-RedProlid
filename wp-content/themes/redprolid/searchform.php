<form class="form-search-inline" action="<?php echo home_url( '/' ); ?>" method="get">
	<div class="input-group">
	  <input type="search" class="form-control" name="s" id="search" value="<?php echo get_search_query(); ?>" placeholder="Busca" style="width: 320px"/>
	  <span class="input-group-btn">
	    <button type="submit" id="searchsubmit" class="btn btn-primary"></button>
	  </span>
	</div><!-- /input-group -->
</form>