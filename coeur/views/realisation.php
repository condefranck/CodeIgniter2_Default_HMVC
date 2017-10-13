<div class="ajax-text-and-image white-popup-block">
	<style>
	.ajax-text-and-image {
		max-width:800px; margin: 20px auto; background: #FFF; padding: 0; line-height: 0; position: relative;
	}
	.ajcol {
		/*width: 50%; float:left;*/
	}
	.ajcol img {
		width: 100%; height: auto; border-bottom:1px solid #efefef;
	}
	.ajcol p{
	line-height:22px;
	}
	.ajcol h2{
	color:#47975f;
	}
	.content{
		padding: 20px;
	}
	@media all and (max-width:30em) {
		.ajcol { 
			width: 100%;
			float:none;
		}

	}
	</style>
	
	
	
	
	
	<div class="ajcol">
			<div class="flexslider single-portfolio-item-slider">
				
						<ul class="slides round">
							
									<li>
										<img src="images/Allo101.jpg" alt="Réalisation"/>
										
										<div class="flex-small-caption">
											<div class="content">
												<h4>Titre de la réalisation</h4> 
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias molestiae facere ea exercitationem quasi animi sequi voluptates, nam odit rem, facilis eaque aspernatur qui ab perferendis consequatur quisquam laboriosam numquam. Aut numquam architecto molestias minus rem aspernatur dignissimos unde ea illo delectus voluptas aliquam nesciunt velit, reprehenderit dolor eveniet tempora.</p>
											</div>
										</div>
									</li>

								<li>
									
									<iframe width="100%" height="480" src="https://www.youtube.com/embed/5vxcbDa24Wg" frameborder="0" allowfullscreen></iframe>
									<div class="flex-small-caption">
										<div class="content">
											<h4>Titre de la réalisation</h4> 
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias molestiae facere ea exercitationem quasi animi sequi voluptates, nam odit rem, facilis eaque aspernatur qui ab perferendis consequatur quisquam laboriosam numquam. Aut numquam architecto molestias minus rem aspernatur dignissimos unde ea illo delectus voluptas aliquam nesciunt velit, reprehenderit dolor eveniet tempora.</p>
										</div>
									</div>
								</li>
							
							
						</ul>
					</div>

	</div>

	

	<div style="clear:both; line-height: 0;"></div>
	
	
						

</div>
<link rel="stylesheet" href="css/flexslider.css" media="screen"/><!-- FLEX SLIDER CSS FILE -->
<script type="text/javascript" src="js/flexslider-min.js"></script>

<script type="text/javascript">
/*----------------------------------------------------------*/
/*              FLEX SLIDERS                           */
/*----------------------------------------------------------*/

if ($('.flexslider.single-portfolio-item-slider').length && $()) {
    var target_flexslider = $('.flexslider.single-portfolio-item-slider');
    target_flexslider.flexslider({
        animation: "fade",
        controlNav: false,
        slideshow: false  
    });
}

</script>

