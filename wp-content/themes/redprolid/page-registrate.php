
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
	  	width: 202px;
			margin-left: 87px;
	  }
	  #wppb-form-element-2 input {
	  	width: 295px;
			box-shadow: inset -2px 5px 17px #eee;
	  }
	  #wppb-form-element-3 label {
	  	width: 54px;
			margin-left: 228px;
			margin-right: 6px;
	  } 
	  #wppb-form-element-3 input {
	  	width: 296px;
			box-shadow: inset -2px 5px 17px #eee;
	  }
	  #wppb-form-element-4 label {
	  	width: 58px;
			margin-left: 230px;
	  }
	  #wppb-form-element-4 input {
	  	width: 296px;
			box-shadow: inset -2px 5px 17px #eee;
	  }
	  #wppb-form-element-8 label {
	  	width: 53px;
			margin-left: 236px;
	  }
	  #wppb-form-element-8 input {
	  	width: 296px;
			box-shadow: inset -2px 5px 17px #eee;
	  }
	  #wppb-form-element-12 label {
	  	width: 82px;
			margin-left: 202px;
	  }
	  #wppb-form-element-12 input {
	  	width: 296px;
			box-shadow: inset -2px 5px 17px #eee;
	  }
	  #wppb-form-element-12 span {
	  	margin-left: 291px;
	  }
	  #wppb-form-element-13 label {
	  	width: 148px;
			margin-left: 142px;
	  }
	  #wppb-form-element-13 input {
	  	width: 296px;
			box-shadow: inset -2px 5px 17px #eee;
	  }
	  #wppb-form-element-14 {
	  	margin-left: 239px;
	  }
	  #wppb-form-element-14 label {
	  	width: 46px;
			float: left;
			margin-left: 10px;
	  }
	  #wppb-form-element-14 .wppb-radios li {
	  	float: left;
	  }
	  #wppb-form-element-15 label {
	  	width: 42px;
			margin-left: 248px;
	  }
	  #wppb-form-element-15 select {
	  	width: 296px;
			box-shadow: inset -2px 5px 17px #eee;
	  }
	  #wppb-form-element-16 {
	  		margin-left: 209px;
	  }
	  #wppb-form-element-16 label {
	  		width: 81px;
	  }
	  #wppb-form-element-16 select {
	  	width: 296px;
			box-shadow: inset -2px 5px 17px #eee;
	  }
	  #wppb-form-element-17 {
	  	margin-left: 187px;
	  }
	  #wppb-form-element-17 label {
	  	width: 103px;
	  }
	  #wppb-form-element-17 select {
	  	width: 296px;
			box-shadow: inset -2px 5px 17px #eee;
	  }
	  .wppb-send-credentials-checkbox label {
	  	margin-left: 286px;
	  }
	  .form-submit #register {
	  	margin-left: 442px;
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
		  <div class="container-fluid text-justify with-hr pb-70">
			  <div class="row">
					<div class="col-sm-11 col-md-offset-1">  	  
			      <div class="row mt-35">
				      <div class="col-sm-6 formulario-perfil">
					      <h3 class="light text-left">Crea tu perfil ahora incluyendo los siguientes datos</h3>
				      	<?php the_content(); ?>
				      </div>
				      <div class="col-sm-6">
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
