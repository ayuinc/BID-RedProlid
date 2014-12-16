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
    <div class="mh-700">
      <section id="contacto">
        <div class="container relative">
          <div class="absolute dtl-custom-heading">
            <div><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/toc-main-icon.png" alt=""></div>
            <h1 style="color: #aeab8b;">Contáctanos</h1>
            <hr style="border-top: 3px dotted #aeab8b;">
          </div>
          <div class="row pt-14-100">
            <div class="col-sm-6">
              <h4 class="text-justify" style="color: #aaa;"><?php the_field('texto_introductorio_contactanos'); ?></h4>
              <h4 class="bold text-gray">¡Nos comprometemos a contestarte!</h4>
            </div>
            <div class="col-sm-6">
	            <p class="text-left">
		          <style>
			        	.formBuilderLabelRequired, .formBuilderLabel {
				        	text-align: left !important;
				        	color: #aaa;
				        	float: left !important;
				        	margin-right: 7px;
			        	}
			        	#formBuilderFieldName .formBuilderLabelRequired {
			        		margin-left: 66px;
			        	}
			        	.control-group {
			        		margin-bottom: 14px;
			        	}
			        	#fieldformBuilderFieldEmail, #fieldformBuilderFieldName {
				        	width:50%;
				        	padding:0.5rem 0.7rem;
				        	border:1px solid #ccc;
			        	}  
			        	#fieldformBuilderFieldComments {
				        	width:100%;
				        	padding:0.5rem 0.7rem;
				        	border:1px solid #ccc;
			        	}
			        	#formBuilderFieldComments .formBuilderLabel {
			        		margin-left: 61px;
			        	}
			        	.formBuilderInput input {
			        		box-shadow: inset -2px 5px 17px #eee;
			        		width: 428px;
			        	}
			        	#fieldformBuilderFieldComments {
			        		width: 70%;
			        	}
			        	.formBuilderSubmit input {
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
			        </style>  
              <?php
              // Formbuilder manual form display. Replace the # in the following line with the ID number of the form to be displayed.
              if(function_exists('formbuilder_process_form')) echo formbuilder_process_form(1);
              // End of FormBuilder manual form display.
              ?>
	            </p>
            </div>
          </div>
        </div>
      </section>
    </div>
		<?php endwhile; ?>
	<?php endif; ?>     

<?php get_footer(); ?>
