<form class="form-search-inline" action="<?php echo home_url( '/' ); ?>" method="get">
	<div class="input-group" style="position: relative !important; right: 213px !important;">
	  <input type="search" class="form-control" name="s" id="search" value="<?php echo get_search_query(); ?>" placeholder="Busca aquí..." style="width: 473px;position: relative;left: 0px;"/>
	  <span class="input-group-btn">
	    <button type="submit" id="searchsubmit" class="btn btn-primary text-left " style="width: 106px !important ; background-position-x: 58px;"><p class="h3 light text-white mv-0">Buscar</p></button>
	  </span>
	</div><!-- /input-group -->
</form>