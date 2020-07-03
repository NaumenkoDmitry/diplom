@extends("frontend.layout.app")
@section('content')
    <section id="sliderSection">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-8">
                <div class="slick_slider slick-initialized slick-slider">
                    <div class="slick-list draggable" tabindex="0">
                        <div class="slick-track" style="opacity: 1; width: 4260px; transform: translate3d(-2130px, 0px, 0px);">

                            <div class="single_iteam slick-slide slick-cloned" index="-1" style="width: 710px;">
                                <a href="pages/single_page.html"> <img src="images/slider_img1.jpg" alt=""></a>
                                <div class="slider_article">
                                    <h2><a class="slider_tittle" href="pages/single_page.html">Fusce eu nulla semper porttitor felis sit amet</a></h2>
                                    <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui...</p>
                                </div>
                            </div>

                            <div class="single_iteam slick-slide" index="0" style="width: 710px;"> <a href="pages/single_page.html"> <img src="images/slider_img4.jpg" alt=""></a>
                                <div class="slider_article">
                                    <h2><a class="slider_tittle" href="pages/single_page.html">Fusce eu nulla semper porttitor felis sit amet</a></h2>
                                    <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui...</p>
                                </div>
                            </div>
                            <div class="single_iteam slick-slide" index="1" style="width: 710px;"> <a href="pages/single_page.html"> <img src="images/slider_img2.jpg" alt=""></a>
                                <div class="slider_article">
                                    <h2><a class="slider_tittle" href="pages/single_page.html">Fusce eu nulla semper porttitor felis sit amet</a></h2>
                                    <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui...</p>
                                </div>
                            </div>
                            <div class="single_iteam slick-slide slick-active" index="2" style="width: 710px;"> <a href="pages/single_page.html"> <img src="images/slider_img3.jpg" alt=""></a>
                                <div class="slider_article">
                                    <h2><a class="slider_tittle" href="pages/single_page.html">Fusce eu nulla semper porttitor felis sit amet</a></h2>
                                    <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui...</p>
                                </div>
                            </div>
                            <div class="single_iteam slick-slide" index="3" style="width: 710px;"> <a href="pages/single_page.html"> <img src="images/slider_img1.jpg" alt=""></a>
                                <div class="slider_article">
                                    <h2><a class="slider_tittle" href="pages/single_page.html">Fusce eu nulla semper porttitor felis sit amet</a></h2>
                                    <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui...</p>
                                </div>
                            </div>
                            <div class="single_iteam slick-slide slick-cloned" index="4" style="width: 710px;"> <a href="pages/single_page.html"> <img src="images/slider_img4.jpg" alt=""></a>
                                <div class="slider_article">
                                    <h2><a class="slider_tittle" href="pages/single_page.html">Fusce eu nulla semper porttitor felis sit amet</a></h2>
                                    <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui...</p>
                                </div>
                            </div>
                        </div>
                    </div>



                    <button type="button" data-role="none" class="slick-prev" style="display: block;">Previous</button><button type="button" data-role="none" class="slick-next" style="display: block;">Next</button><ul class="slick-dots" style="display: block;"><li class=""><button type="button" data-role="none">1</button></li><li class=""><button type="button" data-role="none">2</button></li><li class="slick-active"><button type="button" data-role="none">3</button></li><li class=""><button type="button" data-role="none">4</button></li></ul></div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="latest_post">
                    <h2><span>Latest post</span></h2>
                    <div class="latest_post_container">
                        <div id="prev-button"><i class="fa fa-chevron-up"></i></div>
                        <ul class="latest_postnav" style="height: 192px; overflow: hidden;">





                            <li style="margin-top: -32.377px;">
                                <div class="media"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                                    <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 3</a> </div>
                                </div>
                            </li><li style="margin-top: 0px;">
                                <div class="media"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                                    <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 4</a> </div>
                                </div>
                            </li><li style="margin-top: 0px;">
                                <div class="media"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                                    <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 2</a> </div>
                                </div>
                            </li><li style="margin-top: 0px;">
                                <div class="media"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                                    <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 1</a> </div>
                                </div>
                            </li><li style="margin-top: 0px;">
                                <div class="media"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                                    <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 2</a> </div>
                                </div>
                            </li></ul>
                        <div id="next-button"><i class="fa  fa-chevron-down"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
