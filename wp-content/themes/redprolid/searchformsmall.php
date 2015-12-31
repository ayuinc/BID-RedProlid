<form class="form-search-inline" action="<?php echo home_url( '/' ); ?>" method="get">
	<div class="input-group">
	  <input type="search" class="form-control" name="s" id="search" value="<?php echo get_search_query(); ?>" placeholder="Busca aquí..."/>
	  <span class="input-group-btn" style="display:block;right: -2px;">
	    <button type="submit" id="searchsubmit" class="btn btn-primary text-left"><p class="h3 light text-white mv-0">Buscar</p></button>
	  </span>
	</div><!-- /input-group -->
</form>