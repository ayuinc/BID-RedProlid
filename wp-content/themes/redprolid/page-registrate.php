
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
    .formulario-perfil input,
    .formulario-perfil select
    { 
	  	width:100%;
	  	border:1px solid #CCC;
	  	padding:0.5rem; 
	  }   
	  .formulario-perfil select {
			height: 44px;
		}
	  ul.wppb-radios li {
			float: left;
			width: 35%;
		}
	  .formulario-perfil input[type="radio"]
    { 
	  	width:10%;
	  } 
	  .formulario-perfil input[type="radio"]+label {
			width: 50%;
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
	  #wppb-form-element-2 label {
			width: 35%;
			margin-left: 6%;
	  }
	  #wppb-form-element-2 input {
	  	width: 58%;
			box-shadow: inset -2px 5px 17px #eee;
	  }
	  #wppb-form-element-3 label {
	  	width: 11%;
			margin-left: 30%;
	  } 
	  #wppb-form-element-3 input {
	  	width: 58%;
			box-shadow: inset -2px 5px 17px #eee;
	  }
	  #wppb-form-element-4 label {
	  	width: 11%;
			margin-left: 30%;
	  }
	  #wppb-form-element-4 input {
	  	width: 58%;
			box-shadow: inset -2px 5px 17px #eee;
	  }
	  #wppb-form-element-8 label {
			width: 24%;
			margin-left: 17%;
	  }
	  #wppb-form-element-8 input {
	  	width: 58%;
			box-shadow: inset -2px 5px 17px #eee;
	  }
	  #wppb-form-element-12 label {
	  	width: 11%;
			margin-left: 24%;
	  }
	  #wppb-form-element-12 input {
	  	width: 58%;
			box-shadow: inset -2px 5px 17px #eee;
	  }
	  #wppb-form-element-12 .wppb-description-delimiter {
	  	margin-left: 42%;
	  }
	  #wppb-form-element-13 label {
			width: 27%;
			margin-left: 78px;
	  }
	  #wppb-form-element-13 input {
	  	width: 58%;
			box-shadow: inset -2px 5px 17px #eee;
	  }
	  #wppb-form-element-14 {
	  	margin-left: 30%;
	  	margin-top: 1rem;
	  }
	  #wppb-form-element-14 label {
	  	width: 17%;
			float: left;
	  }
	  #wppb-form-element-15 label {
	  	width: 10%;
			margin-left: 31%
	  }
	  #wppb-form-element-15 select {
	  	width: 58%;
			box-shadow: inset -2px 5px 17px #eee;
	  }
	  #wppb-form-element-16 {
	  		margin-left: 23%;
	  }
	  #wppb-form-element-16 label {
	  	width: 23%;
	  }
	  #wppb-form-element-16 select {
	  	width: 76%;			
	  	box-shadow: inset -2px 5px 17px #eee;
	  }
	  #wppb-form-element-17 {
	  	margin-left: 20%;
	  }
	  #wppb-form-element-17 label {
	  	width: 26%;
	  }
	  #wppb-form-element-17 select {
	  	width: 73%;
			box-shadow: inset -2px 5px 17px #eee;
	  }
	  .wppb-send-credentials-checkbox label {
	  	margin-left: 40%;
	  }
	  .form-submit #register {
	  	margin-left: 73%;
	  }

  </style>


	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
		<section class="">
		  <div class="container">
		    <div class="row mt-35">
		      <div class="col-sm-10 col-md-offset-1"> 
            <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/registrate.png" class="pull-left mr-21 relative pt-70 mt-42" width="60px" height="auto">
						<h1 style="color: #aeab8b;"><?php the_title(); ?></h1>
						<hr style="border-top: 3px dotted #aaa;">
		      </div>
		    </div>
		  </div>
		  <div class="container-fluid text-justify with-hr pb-70">
			  <div class="row">
					<div class="col-sm-11 col-md-offset-1">  	  
			      <div class="row mt-21">
				      <div class="col-sm-6 formulario-perfil mt-35">
					      <h3 class="light text-left">Crea tu perfil ahora incluyendo los siguientes datos</h3>
				      	<?php the_content(); ?>
				      </div>
				      <div class="col-sm-1 pt-21">
				      	<img src="http://redprolid.org/wp-content/themes/redprolid/assets/icons/division-02.png" alt="" style="width: 16px;">
				      </div>
				      <div class="col-sm-5 mt-35">
					      <h3 class="light text-left">Ingresa Utilizando las redes sociales</h3>
					      <p class="mt-70"><?php do_action( 'wordpress_social_login' ); ?></p>
				      </div>			      
				    </div>
					</div>
			  </div>       
		  </div>
		</section>

		<?php endwhile; ?>
	<?php endif; ?> 
<?php get_footer(); ?>
