
<?php
/*
Template Name: Registrate
*/

get_header(); ?>
<!--HEADER-->
<?php get_template_part( 'include', 'header' ); ?>
<!--NAV-->
<?php get_template_part( 'include', 'nav' ); ?>
<?php //query_posts( 'category_name=puntos-de-vista' ); ?> 

  <style>
    .formulario-perfil ul {
	    list-style: none !important;
	    padding-left:0px;
    }
    .formulario-perfil label
    {
	    width:100%;
	    margin-top:1.3rem;
	    font-weight: 100;
    }
    .formulario-perfil input
    { 
	  	width:100%;
	  	border:1px solid #CCC;
	  	padding:0.5rem; 
	  }   
	  .formulario-perfil #send_credentials_via_email {
		  width:30px;
	  }
    .formulario-perfil #register
    { 
			color: #FFF;
			background-color: #ED7133;
			border-color: #EB611C;
			display: inline-block;
			margin-bottom: 0px;
			font-weight: normal;
			text-align: center;
			vertical-align: middle;
			cursor: pointer;
			background-image: none;
			border: 1px solid transparent;
			white-space: nowrap;
			padding: 0.7rem 0.8rem;
			font-size: 14px;
			line-height: 1.42857;
			border-radius: 3px;
			-moz-user-select: none;
			width:150px;
	  }   	  
  </style>


	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
		<section class="">
		  <div class="container">
		    <div class="row mt-35">
		      <div class="col-sm-10 col-md-offset-1"> 
						<h1 style="color: #aeab8b;"><?php the_title(); ?></h1>
		      </div>
		    </div>
		  </div>
		  <div class="container text-justify with-hr pb-70">
			  <div class="row">
					<div class="col-sm-10 col-md-offset-1">  	  
			      <div class="row mt-35">
				      <div class="col-sm-6 formulario-perfil">
					      <h3 class="light text-left lh-lg">Crea tu perfil ahora incluyendo los siguientes datos</h3>
				      	<?php the_content(); ?>
				      </div>
				      <div class="col-sm-6">
					      <h3 class="light text-left lh-lg">Ingresa Utilizando las redes sociales</h3>
					      <p><?php do_action( 'wordpress_social_login' ); ?></p>
				      </div>			      
				    </div>
					</div>
			  </div>       
		  </div>
		</section>

		<?php endwhile; ?>
	<?php endif; ?> 
<?php get_footer(); ?>
