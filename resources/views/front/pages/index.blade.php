@section('title')Acasa @endsection
@extends('front.layout.app')

@section('content')
<video src="{{asset("video/mostele.mp4")}}" autoplay muted>
</video>
</div>
</section>
<div class="page_content_wrap page_paddings_no">
<div class="content_wrap">
<div class="content">
    <article class="post_item post_item_single page">
        <section class="post_content">
            <div data-sc-full-width="true" data-sc-full-width-init="false" class="sc_row row sc_custom_1459259915855">
                <div class="column sc_column_container sc_col-sm-12">
                    <div class="sc_column-inner ">
                        <div class="wrapper">
                            <div class="sc_empty_space em_height_8">
                                <span class="sc_empty_space_inner"></span>
                            </div>
                            <div id="sc_services_809_wrap" class="sc_services_wrap">
                                <div id="sc_services_809" class="sc_services sc_services_style_services-1 sc_services_type_images cu_fullwidth">
                                    <h6 class="sc_services_subtitle sc_item_subtitle">Bine ati venit la noi</h6>
                                    <h2 class="sc_services_title sc_item_title">masaj centru de terapie</h2>
                                    <div class="sc_services_descr sc_item_descr">
                                        Meriți mai bine decât un masaj înviat de un terapeut de debutant
                                        un loc care te face sa te simti mai stresat
                                    </div>
                                    <div class="sc_row row sc_row-fluid">
                                        <div class="column sc_column_container sc_col-sm-12">
                                            <div class="sc_column-inner ">
                                                <div class="wrapper">
                                                    <div class="sc_empty_space em_height_8-46">
                                                        <span class="sc_empty_space_inner"></span>
                                                    </div>
                                                    <div class="columns_wrap sc_columns columns_nofluid no_margins equal_height">
                                                        <div class="column-1_3 sc_column_item">
                                                            <div class="sc_column_item_inner cu_block_4"></div>
                                                        </div>
                                                        @foreach($categories as $category)
                                                        <div class="column-1_3 sc_column_item">
                                                            <div class="sc_column_item_inner cu_block_5">
                                                            <h2 class="sc_title sc_title_regular sc_align_center">{{$category->lang->title}}</h2>
                                                                <div class="sc_line sc_line_position_center_center sc_line_style_solid"></div>
                                                                <div class="text_column content_element ">
                                                                    <div class="wrapper">
                                                                        <ul class="cu_text_c">
                                                                           
                                                                            @foreach($category->products as $product)
                                                                        <li><span class="icon-list icon-right"></span>{{$product->lang->title}}</li>
                                                                            @endforeach

                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <a href="" class="sc_button sc_button_square sc_button_style_filled sc_button_size_base aligncenter">
                                                                    <div>
                                                                        <span class="first">Citeste mai mult</span>
                                                                        <span class="second">Citeste mai mult</span>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="column-1_3 sc_column_item">
                                                                <div class="sc_column_item_inner cu_block_7">
                                                                    
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                       
                                                       
                                                        {{-- <div class="column-1_3 sc_column_item">
                                                            <div class="sc_column_item_inner cu_block_6"></div>
                                                        </div>
                                                        <div class="column-1_3 sc_column_item">
                                                            <div class="sc_column_item_inner cu_block_5">
                                                                <h2 class="sc_title sc_title_regular sc_align_center">Tratamente par </h2>
                                                                <div class="sc_line sc_line_position_center_center sc_line_style_solid"></div>
                                                                <div class="text_column content_element ">
                                                                    <div class="wrapper">
                                                                        <ul class="cu_text_c">
                                                                            <li><span class="icon-list icon-right"></span> Îndreptarea parului cu keratina </li>
                                                                            <li><span class="icon-list icon-right"></span> Hair Botox -</li>
                                                                            <li><span class="icon-list icon-right"></span> Nanoplastia</li>
                                                                            <li><span class="icon-list icon-right"></span> Bixiplastia</li>
                                                                            <li><span class="icon-list icon-right"></span> Mezoterapie par</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <a href="" class="sc_button sc_button_square sc_button_style_filled sc_button_size_base aligncenter">
                                                                    <div>
                                                                        <span class="first">Citeste mai mult</span>
                                                                        <span class="second">Citeste mai mult</span>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div> --}}
                                                    </div>
                                                    <div class="sc_empty_space em_height_8-46">
                                                        <span class="sc_empty_space_inner"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sc_empty_space em_height_6">
                                <span class="sc_empty_space_inner"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sc_row-full-width"></div>
            <div data-sc-full-width="true" data-sc-full-width-init="false" data-sc-stretch-content="true" class="sc_row row sc_row-no-padding">
                <div class="column sc_column_container sc_col-sm-12">
                    <div class="sc_column-inner ">
                        <div class="wrapper">
                            <div class="sc_promo custom_promo_services sc_promo_size_large">
                                <div class="sc_promo_inner">
                                    <div class="sc_promo_image odd"></div>
                                    <div class="sc_promo_block sc_align_left cu_width_60 cu_fl_R">
                                        <div class="sc_promo_block_inner cu_nopadds">
                                            <div class="sc_promo_content">
                                                <div id="sc_services_350_wrap" class="sc_services_wrap">
                                                    <div id="sc_services_350" class="sc_services sc_services_style_services-2 sc_services_type_icons ">
                                                        <div class="sc_columns columns_wrap">
                                                            <div class="column-1_2 column_padding_bottom sc_testimonials sc_testimonials_style_testimonials-2 min-height">
                                                                <div class="swiper-slide" data-style="width:100%;">
                                                                    <div id="sc_testimonials_674_3" class="sc_testimonial_item">
                                                                        <div class="sc_testimonial_avatar">
                                                                            <img alt="" src="{{asset("images/testimonial-1.jpg")}}">
                                                                        </div>
                                                                        <div class="sc_testimonial_content">
                                                                            <p>Vin aici să-mi povestesc experiența trista cu final fericit. Acum 2 ani, un "stilist" mi-a decolorat púrul cu un procent mai mare de decolorant, mi sa parut scurt Chiar și după 2 ani inca ii mai repar greseala.</p>
                                                                        </div>
                                                                        <div class="sc_testimonial_author">
                                                                            <a href="#" class="sc_testimonial_author_name">Cristina Evtodii</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="column-1_2 column_padding_bottom bg-purple sc_testimonials sc_testimonials_style_testimonials-2 min-height">
                                                                <div class="swiper-slide" data-style="width:100%;">
                                                                    <div id="sc_testimonials_674_3" class="sc_testimonial_item">
                                                                        <div class="sc_testimonial_avatar">
                                                                            <img alt="" src="{{asset("images/testimonial-2.jpg")}}">
                                                                        </div>
                                                                        <div class="sc_testimonial_content">
                                                                            <p>O echipa minunata si profesionista, o atmosfera foarte placuta. Rezultate vizibile chiar după primele ședințe. Am simțit minunat să revin cu drag.</p>
                                                                        </div>
                                                                        <div class="sc_testimonial_author">
                                                                            <a href="#" class="sc_testimonial_author_name">Mariana Turca</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="column-1_2 column_padding_bottom bg-purple sc_testimonials sc_testimonials_style_testimonials-2 min-height">
                                                                <div class="swiper-slide" data-style="width:100%;">
                                                                    <div id="sc_testimonials_674_3" class="sc_testimonial_item">
                                                                        <div class="sc_testimonial_avatar">
                                                                            <img alt="" src="{{asset("images/testimonial-3.jpg")}}">
                                                                        </div>
                                                                        <div class="sc_testimonial_content">
                                                                            <p>#Profesionalism, #calitate și mult<br>
                                                                                Răsfăț ! Asta simt când sunt la voi în vizită !<br>
                                                                                Recomand cu încredere!!
                                                                            </p>
                                                                        </div>
                                                                        <div class="sc_testimonial_author">
                                                                            <a href="#" class="sc_testimonial_author_name">Odajii Vasilisa</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="column-1_2 column_padding_bottom sc_testimonials sc_testimonials_style_testimonials-2 min-height">
                                                                <div class="swiper-slide" data-style="width:100%;">
                                                                    <div id="sc_testimonials_674_3" class="sc_testimonial_item ">
                                                                        <div class="sc_testimonial_avatar">
                                                                            <img alt="" src="{{asset("images/testimonial-4.jpg")}}">
                                                                        </div>
                                                                        <div class="sc_testimonial_content">
                                                                            <p>La Mostelle ai toate serviciile necesare ca să arati minunat in orice clipa. 
                                                                                Folosesc produse ale marcilor de top, iar rezultatul este de fiecare data spectaculos. Ambianta plăcută, profesionalism si servicii de calitate.
                                                                            </p>
                                                                        </div>
                                                                        <div class="sc_testimonial_author">
                                                                            <a href="#" class="sc_testimonial_author_name">Tatiana Melnic</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="sc_row-full-width"></div>


            <div data-sc-full-width="true" data-sc-full-width-init="false" class="sc_row row sc_custom_1459343317996">
                <div class="column sc_column_container sc_col-sm-12">
                    <div class="sc_column-inner ">
                        <div class="wrapper">
                            <div class="sc_empty_space em_height_8-3">
                                <span class="sc_empty_space_inner"></span>
                            </div>
                            <div id="sc_blogger_321" class="sc_blogger layout_masonry_4 template_masonry sc_blogger_horizontal no_description">
                                <h6 class="sc_blogger_subtitle sc_item_subtitle">From The Blog</h6>
                                <h2 class="sc_blogger_title sc_item_title">latest news</h2>
                                <div class="isotope_wrap" data-columns="4">
                                    <div class="isotope_item isotope_item_masonry isotope_item_masonry_4 isotope_column_4">
                                        <div class="post_item post_item_masonry post_item_masonry_4">
                                            <div class="post_featured">
                                                <div class="post_thumb" data-image="{{asset("images/image-3.jpg")}}" data-title="How massage loses its value">
                                                    <a class="hover_icon hover_icon_link" href="single-post.html">
                                                        <img alt="" src="{{asset("images/image-3-370x370.jpg")}}">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="post_content isotope_item_content">

                                                <h4 class="post_title">
                                                    <a href="">MICRODERMABRAZIUNE</a>
                                                </h4>
                                                <div class="post_info">
                                                    <span class="post_info_item post_info_posted">
                                                        Tratamentul prin microdermabraziune este o metodă
                                                    </span>

                                                </div>
                                                <div class="post_descr">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="isotope_item isotope_item_masonry isotope_item_masonry_4 isotope_column_4">
                                        <div class="post_item post_item_masonry post_item_masonry_4">
                                            <div class="post_featured">
                                                <div class="post_thumb" data-image="images/image-17.jpg" data-title="How Often Should I get a Massage?">
                                                    <a class="hover_icon hover_icon_link" href="single-post.html">
                                                        <img alt="" src="{{asset("images/image-17-370x370.jpg")}}">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="post_content isotope_item_content">

                                                <h4 class="post_title">
                                                    <a href="">ÎMPACHETARE LA TERMOCUVERTĂ</a>
                                                </h4>
                                                <div class="post_info">
                                                    <span class="post_info_item post_info_posted">
                                                        Împachetarea la termocuvertă funcționează pe principiul efectului de saună care permite
                                                    </span>

                                                </div>
                                                <div class="post_descr">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="isotope_item isotope_item_masonry isotope_item_masonry_4 isotope_column_4">
                                        <div class="post_item post_item_masonry post_item_masonry_4">
                                            <div class="post_featured">
                                                <div class="post_thumb" data-image="images/image-18.jpg" data-title="What is Massage Therapy?">
                                                    <a class="hover_icon hover_icon_link" href="single-post.html">
                                                        <img alt="" src="{{asset("images/image-18-370x370.jpg")}}">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="post_content isotope_item_content">

                                                <h4 class="post_title">
                                                    <a href="">MEZOTERAPIE</a>
                                                </h4>
                                                <div class="post_info">
                                                    <span class="post_info_item post_info_posted">
                                                        Mezoterapia virtuală reprezintă o terapie inovatoare de excepție, fiind printre puținele
                                                    </span>
                                                </div>
                                                <div class="post_descr">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="isotope_item isotope_item_masonry isotope_item_masonry_4 isotope_column_4">
                                        <div class="post_item post_item_masonry post_item_masonry_4 last">
                                            <div class="post_featured">
                                                <div class="post_thumb" data-image="images/image-19.jpg" data-title="Massage Therapy for Tight Muscles">
                                                    <a class="hover_icon hover_icon_link" href="single-post.html">
                                                        <img alt="" src="{{asset("images/image-19-370x370.jpg")}}">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="post_content isotope_item_content">

                                                <h4 class="post_title">
                                                    <a href="single-post.html">ÎMPACHETĂRI</a>
                                                </h4>
                                                <div class="post_info">
                                                    <span class="post_info_item post_info_posted">
                                                        Împachetările sunt foarte eficiente pentru detoxifiere, slăbire localizată rapidă și sănătoasă,
                                                    </span>

                                                </div>
                                                <div class="post_descr">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sc_blogger_button sc_item_button">
                                    <a href="#" class="sc_button sc_button_square sc_button_style_filled sc_button_size_base">
                                        <div>
                                            <span class="first">View All Posts</span>
                                            <span class="second">View All Posts</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="sc_empty_space em_height_7-8">
                                <span class="sc_empty_space_inner"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="sc_row-full-width"></div>
            <div data-sc-full-width="true" data-sc-full-width-init="false" class="sc_row row sc_custom_1459347818729 inverse_colors">
                <div class="column sc_column_container sc_col-sm-12">
                    <div class="sc_column-inner ">
                        <div class="wrapper">
                            <div class="sc_empty_space em_height_11-4">
                                <span class="sc_empty_space_inner"></span>
                            </div>
                            <div id="sc_call_to_action_389" class="sc_call_to_action sc_call_to_action_style_2 sc_call_to_action_align_center cu_fullwidth">
                                <div class="sc_call_to_action_info">
                                    <h6 class="sc_call_to_action_subtitle sc_item_subtitle">Our Special Offer</h6>
                                    <h2 class="color sc_call_to_action_title sc_item_title">Înregistrează-te acum și noi îți modelăm o siluetă de vis! </h2>
                                </div>
                                <div class="sc_call_to_action_buttons sc_item_buttons">
                                    <div class="sc_call_to_action_button sc_item_button">
                                        <a href="" class="sc_button sc_button_square sc_button_style_filled sc_button_size_base">
                                            <div>
                                                <span class="first">Consultă specilistul</span>
                                                <span class="second">Consultă specilistul</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="sc_empty_space em_height_10-5">
                                <span class="sc_empty_space_inner"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="sc_row-full-width"></div>
            <div class="sc_row row">
                <div class="column sc_column_container sc_col-sm-12">
                    <div class="sc_column-inner ">
                        <div class="content_wrap">
                            <a href="#" class="sc_icon icon-up sc_icon_shape_square aligncenter scroll_to_top show"></a>
                            <div class="sc_empty_space em_height_5-7">
                                <span class="sc_empty_space_inner"></span>
                            </div>
                            <div class="columns_wrap sc_columns columns_nofluid sc_columns_count_3">
                                <div class="column-1_3 sc_column_item">
                                    <h5 class="sc_title sc_title_regular sc_align_center">Despre noi</h5>
                                    <div class="text_column content_element ">
                                        <div class="wrapper">
                                            <p class="cu_text_c">Intră și terapeuții noștri oferă tratamentul perfect. Masajul dvs. este special conceput pentru a vă ajuta să obțineți armonie perfectă a corpului minții-corpului</p>
                                        </div>
                                    </div>
                                    <div class="sc_empty_space em_height_3">
                                        <span class="sc_empty_space_inner"></span>
                                    </div>
                                </div>
                                <div class="column-1_3 sc_column_item">
                                    <h5 class="sc_title sc_title_regular sc_align_center">Program</h5>
                                    <div class="text_column content_element ">
                                        <div class="wrapper">
                                            <p class="cu_text_c">
                                                Mon-Fri: 9 AM &#8211; 6 PM
                                                <br/> Saturday: 9 AM &#8211; 4 PM
                                                <br/> Sunday: Closed
                                            </p>
                                        </div>
                                    </div>
                                    <div class="sc_empty_space em_height_3">
                                        <span class="sc_empty_space_inner"></span>
                                    </div>
                                </div>
                                <div class="column-1_3 sc_column_item">
                                    <h5 class="sc_title sc_title_regular sc_align_center">Contacteaza-ne</h5>
                                    <div class="text_column content_element ">
                                        <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="100" id="gmap_canvas" src="https://maps.google.com/maps?q=Or.%20Chi%C8%99in%C4%83u%2C%20Bd.%20Decebal%20139&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.crocothemes.net">crocothemes.net</a></div><style>.mapouter{text-align:right;height:100px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:100px;width:100%;}</style></div>
                                    </div>
                                    <div class="sc_empty_space em_height_3">
                                        <span class="sc_empty_space_inner"></span>
                                    </div>
                                </div>
                            </div>

@endsection