@section('title')Categories @endsection
@extends('front.layout.app')

@section('content')
<section class="top_panel_image" style="background-image: url(images/Depositphotos_21608857_original.jpg)">
	<div class="top_panel_image_hover"></div>
	<div class="top_panel_image_header">
		<div class="top_panel_image_icon icon-book-open"></div>
		<h1 class="top_panel_image_title">Servicii</h1>
		<div class="breadcrumbs">
			<a class="breadcrumbs_item home" href="index.php">Acasă</a>
			<span class="breadcrumbs_delimiter"></span>
			<span class="breadcrumbs_item current">Servicii</span>
			<span class="breadcrumbs_delimiter"></span>
			<span class="breadcrumbs_item current">Remodelare corporală</span>
		</div>
	</div>
</section>

<div class="page_content_wrap page_paddings_yes">
	<div class="content_wrap">
		<div class="content">
			<article class="post_item post_item_single page">
				<section class="post_content">
					<div class="sc_row row sc_row-fluid">
						<div class="column sc_column_container sc_col-sm-12">
							<div class="sc_column-inner ">
								<div class="wrapper">
									<article class="myportfolio-container minimal-light" id="esg-grid-6-1-wrap">
										<div id="esg-grid-6-1" class="esg-grid">

											<ul>

												{{-- <li class="filterall filter-gallery filter-swedish-massage filter-swedish-massage eg-roosevelt-massage-wrapper eg-post-id-226" data-date="1459262255" data-cobblesw="1" data-cobblesh="2">
													<div class="esg-media-cover-wrapper">
														<div class="esg-entry-media esg-shifttotop" data-delay="0">
															<img src="images/image-1-1.jpg" alt="">
														</div>
														<div class="esg-entry-cover">
															<div class="esg-overlay esg-fade eg-roosevelt-massage-container" data-delay="0"></div>
															<div class="esg-bottom eg-post-226 eg-roosevelt-massage-element-0 " >MASAJ CELLULIT MANUAL</div>
															<div class="esg-center eg-post-226 eg-roosevelt-massage-element-2-a esg-slideup" data-delay="0.2">
																<a class="eg-roosevelt-massage-element-2 eg-post-226 esgbox" href="images/image-1-1.jpg" lgtitle="Massage Therapy: 7 Ways to Manage Pain">
																	<i class="eg-icon-search"></i>
																</a>
															</div>
<!--															<div class="esg-bottom eg-post-226 eg-roosevelt-massage-element-4-a " >
																<a class="eg-roosevelt-massage-element-4 eg-post-226" href="details.php" title="View all posts in Gallery" rel="category tag">TRATAMENT strict pentru zona picioarelor, de la degetele picioarelor până la mușchii fesieri, zona abdominală și a brațelor.</a>
															</div>-->
															<div class="esg-bottom eg-post-209 eg-roosevelt-massage-element-4-a pb-20 ">
																<a href="details.php" class="more-btn">Află mai multe detalii</a>
															</div>
															<div class="esg-center eg-post-226 eg-roosevelt-massage-element-1-a esg-slideup" data-delay="0.3">
																<a class="eg-roosevelt-massage-element-1 eg-post-226" href="request-form.php" target="_self">
																	<i class="eg-icon-paper-plane"></i>
																</a>
															</div>
														</div>
													</div>
												</li>
												
												<li class="filterall filter-gallery filter-massage-therapy filter-massage-therapy eg-roosevelt-massage-wrapper eg-post-id-209" data-date="1459261695" data-cobblesw="1" data-cobblesh="1">
													<div class="esg-media-cover-wrapper">
														<div class="esg-entry-media esg-shifttotop" data-delay="0">
															<img src="images/img-19.jpg" alt="">
														</div>
														<div class="esg-entry-cover">
															<div class="esg-overlay esg-fade eg-roosevelt-massage-container" data-delay="0"></div>
															<div class="esg-bottom eg-post-224 eg-roosevelt-massage-element-0 ">Radiofrequency</div>
															<div class="esg-center eg-post-224 eg-roosevelt-massage-element-2-a esg-slideup" data-delay="0.2">
																<a class="eg-roosevelt-massage-element-2 eg-post-224 esgbox" href="images/img-19.jpg" lgtitle="">
																	<i class="eg-icon-search"></i>
																</a>
															</div>
															<div class="esg-bottom eg-post-209 eg-roosevelt-massage-element-4-a pb-20 ">
																<a href="details.php" class="more-btn">Află mai multe detalii</a>
															</div>
															
															<div class="esg-center eg-post-224 eg-roosevelt-massage-element-1-a esg-slideup" data-delay="0.3">
																<a class="eg-roosevelt-massage-element-1 eg-post-224" href="request-form.php" target="_self">
																	<i class="eg-icon-paper-plane"></i>
																</a>
															</div>
														</div>
													</div>
                                                </li> --}}

												@foreach($category->products as $product)
												
												
												<li class="filterall filter-gallery filter-sports-massage filter-swedish-massage filter-sports-massage filter-swedish-massage eg-roosevelt-massage-wrapper eg-post-id-211" data-date="1459261777" data-cobblesw="1" data-cobblesh="1">
													<div class="esg-media-cover-wrapper">
														<div class="esg-entry-media esg-shifttotop" data-delay="0">
														@foreach($product->photos as $photo)
														<img src="{{asset('products/'.$photo->file)}}" alt="">
														@break
														@endforeach
														</div>
														<div class="esg-entry-cover">
															<div class="esg-overlay esg-fade eg-roosevelt-massage-container" data-delay="0"></div>
															<div class="esg-bottom eg-post-211 eg-roosevelt-massage-element-0 ">{{$product->lang->title}} </div>
															<div class="esg-center eg-post-211 eg-roosevelt-massage-element-2-a esg-slideup" data-delay="0.2">
																<a class="eg-roosevelt-massage-element-2 eg-post-211 esgbox" href="images/image-2-1.jpg" lgtitle="Benefits of Lymphatic Drainage Massage">
																	<i class="eg-icon-search"></i>
																</a>
															</div>
															<div class="esg-bottom eg-post-211 eg-roosevelt-massage-element-4-a ">
																<a class="eg-roosevelt-massage-element-4 eg-post-211" href="details.php" title="View all posts in Gallery" rel="category tag">TRATAMENT - constă în masaj al țesuturilor cutanate care dislocă grăsimile ce provoacă celulită inestetică.</a>
															</div>
															<div class="esg-bottom eg-post-209 eg-roosevelt-massage-element-4-a pb-20 ">
																<a href="details.php" class="more-btn">Află mai multe detalii</a>
															</div>
															<div class="esg-center eg-post-211 eg-roosevelt-massage-element-1-a esg-slideup" data-delay="0.3">
																<a class="eg-roosevelt-massage-element-1 eg-post-211" href="request-form.php" target="_self">
																	<i class="eg-icon-paper-plane"></i>
																</a>
															</div>
														</div>
													</div>
												</li>
												@endforeach
                                                
											</ul>
										</div>
									</article>
									<div class="clear"></div>
								</div>
							</div>
						</div>
					</div>
				</section>
			</article>
			<section class="related_wrap related_wrap_empty"></section>
		</div>
	</div>
</div>
@endsection