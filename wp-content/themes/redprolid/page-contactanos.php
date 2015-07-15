<?php
/*
Template Name: Contactanos
*/

get_header(); ?>

    <!--HEADER-->
    <?php get_template_part( 'include', 'header' ); ?>
    
    <!--NAV-->
    <?php get_template_part( 'include', 'nav' ); ?>
    
    
<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>    
    <section id="contacto">
      <div class="container">
      	<div class="clearfix sub-header mb-0-xs">
	        <div class="col-sm-1 col-xs-12 text-center-xs pt-35-xs">
	          <div><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/toc-main-icon.png" alt="" width="100%"></div>
	        </div>
	        <div class="col-sm-5 col-xs-12 text-center-xs pb-0-xs">
	          <h1>Contáctanos</h1>
	        </div>
	      </div>
        <div class="row pt-14-100">
          <div class="col-md-10 col-md-offset-1">
	          <div class="row">
	            <div class="col-md-6 mb-21-xs">
	              <h4 class="text-justify light" style="color: #aaa;"><?php the_field('texto_introductorio_contactanos'); ?></h4>
	              <h4 class="medium text-gray mb-21-xs">¡Nos comprometemos a contestarte!</h4>
	            </div>
	            <div class="col-md-6 mv-21-xs ph-14-xs">
			          <style>
									.control-label, .formBuilderLabel {
										font-weight: 500 !important;
										text-align: left !important;
										margin-bottom:7px;
									}
									.formBuilderInput input {
										width:40%;
									}
									.formBuilderLargeTextarea textarea {
										width:100%;
									}
				        	.formBuilderSubmit input{
					        	padding: 5px 10px;
										font-size: 12px;
										line-height: 1.5;
										border-radius: 3px;
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
										padding: 6px 12px;
										font-size: 14px;
										line-height: 1.42857;
										border-radius: 3px;
										-moz-user-select: none;
				        	}
				        	.formBuilderSubmit {
					        	width:100%;
				        	}
				        	#contacto .formBuilderSubmit input {
					        	margin-right:0.8rem;
				        	}
				        </style>  
	              <?php
	              if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 1 ); }
	              ?>
	            </div>
	          </div>	          
          </div>
        </div>
      </div>
    </section>
	<?php endwhile; ?>
<?php endif; ?>     

<?php get_footer(); ?>
