<form class="form-search-inline" action="<?php echo home_url( '/' ); ?>" method="get">
	<div class="input-group" style="position: relative !important; right: 121px !important;">
	  <input type="search" class="form-control" name="s" id="search" value="<?php echo get_search_query(); ?>" placeholder="Busca aquí..." style="width: 572px;position: relative;right: -2px;"/>
	  <span class="input-group-btn" style="display:block;right: -2px;">
	    <button type="submit" id="searchsubmit" class="btn btn-primary text-left " style="width: 106px !important ; background-position-x: 58px;"><p class="h3 light text-white mv-0">Buscar</p></button>
	  </span>
	</div>
</form>