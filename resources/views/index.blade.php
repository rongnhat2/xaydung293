@extends('layout')
@section('title', 'Trang chủ')
@section('description', 'Công ty xây dựng uy tín chuyên thi công nhà ở, cải tạo sửa chữa, thiết kế – xây dựng trọn gói. Đảm bảo chất lượng, đúng tiến độ, giá cạnh tranh.')
@section('keyword', 'công ty xây dựng, dịch vụ xây dựng chuyên nghiệp, xây dựng nhà ở, nhà thầu xây dựng uy tín, xây dựng dân dụng, thi công xây dựng, thiết kế kiến trúc, xây nhà trọn gói, cải tạo sửa chữa nhà, xây dựng công trình')
@section('body-class', 'header-style-5')
@section('header-class', 'header-front-page style-5')


@section('css')

@endsection()


@section('body')

<!-- Hero Background SlideShow -->
<div id="hero-section" data-number="3" data-image-1="assets/img/slider/3.jpg" data-image-2="assets/img/slider/4.jpg" data-image-3="assets/img/slider/5.jpg" data-effect="fade">
    <div class="hero-content">
        <div class="hero-title scroll" data-min="28px" data-max="60px">
            <h1>CHÀO MỪNG</h1>
            <h1>XÂY DỰNG 293 </h1>
            <h1>DỊCH VỤ CỦA CHÚNG TÔI</h1>
        </div>

        <div class="hero-text">
            <p>Kinh nghiệm của chúng tôi đảm bảo dự án của bạn được thực hiện đúng chuẩn và chuyên nghiệp nhất.</p>
        </div>

        <div class="hero-button">
            <a class="wprt-button rounded-3px" href="#">Dịch vụ</a>
        </div>
    </div><!-- /.hero-content -->

    <a class="arrow scroll-target" href="#services-section"></a><!-- change href value to ID of section you want to scroll down -->
</div>

<!-- Main Content -->
<div id="main-content" class="site-main clearfix">
    <div id="content-wrap">
        <div id="site-content" class="site-content clearfix">
            <div id="inner-content" class="inner-content-wrap">
                <div class="page-content">

                    <!-- Promotion -->
                    <section class="wprt-section promotion">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="wprt-spacer" data-desktop="8" data-mobi="8" data-smobi="8"></div>
                                    <h2 class="text-white text-center-mobile font-size-20 margin-bottom-0">Nhà thầu & Quản lý xây dựng từ năm 2010</h2>
                                    <div class="wprt-spacer" data-desktop="0" data-mobi="20" data-smobi="20"></div>
                                </div><!-- /.col-md-8 -->

                                <div class="col-md-4">
                                    <div class="text-right text-center-mobile"><a href="#" class="wprt-button white rounded-3px">YÊU CẦU BÁO GIÁ</a></div>
                                    <div class="wprt-spacer" data-desktop="0" data-mobi="15" data-smobi="15"></div>
                                </div><!-- /.col-md-4 -->

                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </section>

                    <!-- SERVICES -->
                    <section id="services-section" class="wprt-section services">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="wprt-spacer" data-desktop="70" data-mobi="60" data-smobi="60"></div>
                                    <h2 class="text-center margin-bottom-10">DỊCH VỤ CHÍNH</h2>
                                    <div class="wprt-lines style-2 custom-1">
                                        <div class="line-1"></div>
                                    </div>
                                    <div class="wprt-spacer" data-desktop="50" data-mobi="40" data-smobi="40"></div>
                                </div><!-- /.col-md-12 -->
                                        
                                <div class="col-md-4">
                                    <div class="wprt-icon-box accent-background rounded icon-effect-2 icon-left">
                                        <div class="icon-wrap">
                                            <span class="dd-icon icon-drawing"></span>
                                        </div>
                                        <div class="content-wrap">
                                            <h3 class="dd-title font-size-18" style="height: 54px"><a href="#">Thiết Kế Kiến Trúc Sáng Tạo & Xây Dựng</a></h3>
                                            <p style="height: 105px">Đưa ra giải pháp thiết kế tối ưu, phù hợp với nhu cầu sử dụng. Kết hợp yếu tố thẩm mỹ và công năng, đảm bảo không gian sống và làm việc tiện nghi.</p>
                                        </div>
                                    </div>

                                    <div class="wprt-spacer" data-desktop="50" data-mobi="30" data-smobi="30"></div>

                                    <div class="wprt-icon-box accent-background rounded icon-effect-2 icon-left">
                                        <div class="icon-wrap">
                                            <span class="dd-icon icon-engineer"></span>
                                        </div>
                                        <div class="content-wrap">
                                            <h3 class="dd-title font-size-18" style="height: 54px"><a href="#">Kiểm Định & Đánh Giá Chất Lượng</a></h3>
                                            <p style="height: 105px">Cung cấp bản vẽ kỹ thuật rõ ràng, đầy đủ thông tin. Đảm bảo tính chính xác, hỗ trợ thi công thuận lợi và hiệu quả.</p>
                                        </div>
                                    </div>

                                    <div class="wprt-spacer" data-desktop="0" data-mobi="30" data-smobi="30"></div>
                                </div><!-- /.col-md-4 -->

                                <div class="col-md-4">
                                    <div class="wprt-icon-box accent-background rounded icon-effect-2 icon-left">
                                        <div class="icon-wrap">
                                            <span class="dd-icon icon-drawing-compass"></span>
                                        </div>
                                        <div class="content-wrap">
                                            <h3 class="dd-title font-size-18" style="height: 54px"><a href="#">Thi Công & Xây Dựng Chuyên Nghiệp</a></h3>
                                            <p style="height: 105px">Đội ngũ thi công giàu kinh nghiệm, đảm bảo tiến độ và chất lượng. Áp dụng công nghệ xây dựng tiên tiến, giảm thiểu rủi ro.</p>
                                        </div>
                                    </div>

                                    <div class="wprt-spacer" data-desktop="50" data-mobi="30" data-smobi="30"></div>

                                    <div class="wprt-icon-box accent-background rounded icon-effect-2 icon-left">
                                        <div class="icon-wrap">
                                            <span class="dd-icon icon-drill-2"></span>
                                        </div>
                                        <div class="content-wrap">
                                            <h3 class="dd-title font-size-18" style="height: 54px"><a href="#">Khoan Lỗ Lắp Đặt & Khoan Cắt Sàn & Tường</a></h3>
                                            <p style="height: 105px">Khoan, cắt, đục bê tông cho công trình xây dựng. Sử dụng máy móc hiện đại, đảm bảo độ chính xác cao.</p>
                                        </div>
                                    </div>

                                    <div class="wprt-spacer" data-desktop="0" data-mobi="30" data-smobi="30"></div>
                                </div><!-- /.col-md-4 -->

                                <div class="col-md-4">
                                    <div class="wprt-icon-box accent-background rounded icon-effect-2 icon-left">
                                        <div class="icon-wrap">
                                            <span class="dd-icon icon-light-bulb"></span>
                                        </div>
                                        <div class="content-wrap">
                                            <h3 class="dd-title font-size-18" style="height: 54px"><a href="#">Lắp Đặt Điện Dân Dụng & Công Nghiệp </a></h3>
                                            <p style="height: 105px">Thiết kế, thi công hệ thống điện theo tiêu chuẩn an toàn. Lắp đặt tủ điện, dây dẫn, thiết bị chiếu sáng, ổ cắm, công tắc. Nâng cấp, thay thế hệ thống điện cũ.</p>
                                        </div>
                                    </div>

                                    <div class="wprt-spacer" data-desktop="50" data-mobi="30" data-smobi="30"></div>

                                    <div class="wprt-icon-box accent-background rounded icon-effect-2 icon-left">
                                        <div class="icon-wrap">
                                            <span class="dd-icon icon-pipe-11"></span>
                                        </div>
                                        <div class="content-wrap">
                                            <h3 class="dd-title font-size-18" style="height: 54px"><a href="#">Bảo Hành & Bảo Trì Công Trình</a></h3>
                                            <p style="height: 105px">Cung cấp dịch vụ bảo trì định kỳ, kéo dài tuổi thọ công trình. Hỗ trợ sửa chữa, nâng cấp khi có nhu cầu.</p>
                                        </div>
                                    </div>
                                </div><!-- /.col-md-4 -->

                                <div class="col-md-12">
                                    <div class="wprt-spacer" data-desktop="70" data-mobi="60" data-smobi="60"></div>
                                </div><!-- /.col-md-12 -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </section>

                    <!-- WORKS -->
                    <section class="wprt-section works parallax">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="wprt-spacer" data-desktop="70" data-mobi="60" data-smobi="60"></div>
                                    <h2 class="text-left text-white">CÔNG TRÌNH TIÊU BIỂU</h2>
                                    <div class="wprt-lines custom-2">
                                        <div class="line-1"></div>
                                    </div>
                                    <div class="wprt-spacer" data-desktop="50" data-mobi="40" data-smobi="40"></div>
                                </div><!-- /.col-md-12 -->
                                        
                                <div class="col-md-12">
                                    <div class="wprt-project arrow-style-2 has-arrows arrow60 arrow-dark" data-layout="slider" data-column="3" data-column2="3" data-column3="2" data-column4="1" data-gaph="30" data-gapv="30">
                                        <div id="projects" class="cbp">
                                            <div class="cbp-item">
                                                <div class="project-item">
                                                    <div class="inner">
                                                        <div class="grid">
                                                        <figure class="effect-sadie">
                                                            <img src="image-project/img-01.png" alt="image" />
                                                            <figcaption>
                                                                <div>
                                                                    <h2><a target="_blank" href="page-project-detail.html">Thiết Kế Móng Công Trình</a></h2>
                                                                    <p>Phương án móng phù hợp với địa hình và công trình.</p>
                                                                </div>
                                                            </figcaption>           
                                                        </figure>
                                                        </div> 
                                                    </div>
                                                </div>
                                            </div><!--/.cbp-item --> 
                                            <div class="cbp-item">
                                                <div class="project-item">
                                                    <div class="inner">
                                                        <div class="grid">
                                                        <figure class="effect-sadie">
                                                            <img src="image-project/img-02.png" alt="image" />
                                                            <figcaption>
                                                                <div>
                                                                    <h2><a target="_blank" href="page-project-detail.html">Lắp Đặt Hệ Thống Điện Công Nghiệp</a></h2>
                                                                    <p>Cung cấp giải pháp điện cho nhà máy, xưởng sản xuất.</p>
                                                                </div>
                                                            </figcaption>           
                                                        </figure>
                                                        </div> 
                                                    </div>
                                                </div>
                                            </div><!--/.cbp-item --> 
                                            <div class="cbp-item">
                                                <div class="project-item">
                                                    <div class="inner">
                                                        <div class="grid">
                                                        <figure class="effect-sadie">
                                                            <img src="image-project/img-03.png" alt="image" />
                                                            <figcaption>
                                                                <div>
                                                                    <h2><a target="_blank" href="page-project-detail.html"> Thiết Kế Sơ Đồ Đi Dây Điện</a></h2>
                                                                    <p>Lên bản vẽ đi dây hợp lý, đảm bảo an toàn và thẩm mỹ.</p>
                                                                </div>
                                                            </figcaption>           
                                                        </figure>
                                                        </div> 
                                                    </div>
                                                </div>
                                            </div><!--/.cbp-item --> 
                                            <div class="cbp-item">
                                                <div class="project-item">
                                                    <div class="inner">
                                                        <div class="grid">
                                                        <figure class="effect-sadie">
                                                            <img src="image-project/img-04.png" alt="image" />
                                                            <figcaption>
                                                                <div>
                                                                    <h2><a target="_blank" href="page-project-detail.html">Gia Công Tỉ Mỉ, Độ Chính Xác Cao</a></h2>
                                                                    <p>Hoàn thiện kỹ lưỡng, đảm bảo chất lượng từng chi tiết.</p>
                                                                </div>
                                                            </figcaption>           
                                                        </figure>
                                                        </div> 
                                                    </div>
                                                </div>
                                            </div><!--/.cbp-item --> 
                                        </div><!-- /#projects -->
                                    </div><!--/.wprt-project -->
                                </div><!-- /.col-md-12 -->

                                <div class="col-md-12">
                                    <div class="wprt-spacer" data-desktop="80" data-mobi="60" data-smobi="60"></div>
                                </div><!-- /.col-md-12 -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </section>

                    <!-- OFFER -->
                    <section class="wprt-section offer">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="wprt-spacer" data-desktop="70" data-mobi="60" data-smobi="60"></div>
                                    <h2>DỊCH VỤ CHÚNG TÔI CUNG CẤP</h2>
                                    <div class="wprt-lines style-1 custom-5">
                                        <div class="line-1"></div>
                                        <div class="line-2"></div>
                                    </div>
                                    <div class="wprt-spacer" data-desktop="50" data-mobi="40" data-smobi="40"></div>
                                </div><!-- /.col-md-12 -->

                                <div class="col-md-12">
                                    <div class="wprt-service arrow-style-2 has-arrows arrow60 arrow-light" data-layout="slider" data-column="3" data-column2="3" data-column3="2" data-column4="1" data-gaph="30" data-gapv="30">
                                        <div id="service-wrap" class="cbp">
                                            <div class="cbp-item">
                                                <div class="service-item clearfix">
                                                    <div class="thumb"><img src="image-project/img-08.png" alt="image" /></div>
                                                    <div class="service-item-wrap">
                                                        <h3 class="title font-size-18"><a href="#">Sửa Chữa & Cải Tạo Công Trình</a></h3>
                                                        <p class="desc">Nâng cấp, mở rộng không gian sống và làm việc. Xử lý các sự cố về kết cấu, thấm dột, xuống cấp. </p>
                                                        <a href="#" class="wprt-button small rounded-3px">Chi tiết</a>
                                                    </div>
                                                </div>
                                            </div><!-- /.cbp-item -->

                                            <div class="cbp-item">
                                                <div class="service-item clearfix">
                                                    <div class="thumb"><img src="image-project/img-05.png" alt="image" /></div>
                                                    <div class="service-item-wrap">
                                                        <h3 class="title font-size-18"><a href="#">Thiết Kế & Tư Vấn Xây Dựng</a></h3>
                                                        <p class="desc">Lên ý tưởng, bản vẽ chi tiết theo yêu cầu khách hàng. Đảm bảo tính thẩm mỹ, công năng và chi phí tối ưu. </p>
                                                        <a href="#" class="wprt-button small rounded-3px">Chi tiết</a>
                                                    </div>
                                                </div>
                                            </div><!-- /.cbp-item -->

                                            <div class="cbp-item">
                                                <div class="service-item clearfix">
                                                    <div class="thumb"><img src="image-project/img-07.png" alt="image" /></div>
                                                    <div class="service-item-wrap">
                                                        <h3 class="title font-size-18"><a href="#">Thi Công Xây Dựng</a></h3>
                                                        <p class="desc">Xây dựng nhà ở, công trình dân dụng & công nghiệp. Đảm bảo chất lượng, tiến độ và an toàn lao động. </p>
                                                        <a href="#" class="wprt-button small rounded-3px">Chi tiết</a>
                                                    </div>
                                                </div>
                                            </div><!-- /.cbp-item -->

                                            <div class="cbp-item">
                                                <div class="service-item clearfix">
                                                    <div class="thumb"><img src="image-project/img-06.png" alt="image" /></div>
                                                    <div class="service-item-wrap">
                                                        <h3 class="title font-size-18"><a href="#">Lắp Đặt Hệ Thống Điện & Nước</a></h3>
                                                        <p class="desc">Thi công hệ thống điện nước dân dụng & công nghiệp. Đảm bảo an toàn, hoạt động ổn định lâu dài. </p>
                                                        <a href="#" class="wprt-button small rounded-3px">Chi tiết</a>
                                                    </div>
                                                </div>
                                            </div><!-- /.cbp-item -->
                                        </div><!-- /#service-wrap -->
                                    </div><!-- /.wprt-service -->
                                </div><!-- /.col-md-12 -->

                                <div class="col-md-12">
                                    <div class="wprt-spacer" data-desktop="80" data-mobi="60" data-smobi="60"></div>
                                </div><!-- /.col-md-12 -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </section>
 

                    <!-- WHY CHOOSE US -->
                    <section class="wprt-section">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="wprt-spacer" data-desktop="70" data-mobi="60" data-smobi="60"></div>
                                    <h2>TẠI SAO CHỌN CHÚNG TÔI?</h2>
                                    <div class="wprt-lines style-1 custom-3">
                                        <div class="line-1"></div>
                                        <div class="line-2"></div>
                                    </div>
                                    <div class="wprt-spacer" data-desktop="50" data-mobi="40" data-smobi="40"></div>

                                    <div class="wprt-toggle active style-1">
                                        <h3 class="toggle-title">Kinh Nghiệm & Uy Tín</h3>
                                        <div class="toggle-content">Hơn 15 năm trong ngành xây dựng, luôn đặt chất lượng lên hàng đầu. Hàng trăm công trình đã hoàn thành với sự hài lòng của khách hàng.</div>
                                    </div>

                                    <div class="wprt-toggle style-1">
                                        <h3 class="toggle-title">Chất Lượng Đảm Bảo</h3>
                                        <div class="toggle-content">Sử dụng vật liệu cao cấp, bền vững theo thời gian. Thi công chuẩn kỹ thuật, an toàn và chắc chắn.</div>
                                    </div>

                                    <div class="wprt-toggle style-1">
                                        <h3 class="toggle-title">Đội Ngũ Chuyên Nghiệp</h3>
                                        <div class="toggle-content">Kiến trúc sư, kỹ sư giàu kinh nghiệm, thợ lành nghề. Luôn tư vấn tận tình, đưa ra giải pháp tối ưu.</div>
                                    </div>

                                    <div class="wprt-toggle style-1">
                                        <h3 class="toggle-title">Tiến Độ Đúng Hẹn</h3>
                                        <div class="toggle-content">Lập kế hoạch chặt chẽ, cam kết hoàn thành đúng thời gian. Hạn chế tối đa gián đoạn, giúp khách hàng yên tâm.</div>
                                    </div>

                                    <div class="wprt-toggle style-1">
                                        <h3 class="toggle-title">Giá Cả Cạnh Tranh</h3>
                                        <div class="toggle-content">Báo giá minh bạch, không phát sinh chi phí bất hợp lý. Đảm bảo mức giá tốt nhất đi kèm với chất lượng cao.</div>
                                    </div>

                                    <div class="wprt-toggle style-1">
                                        <h3 class="toggle-title">Chế Độ Bảo Hành Tốt</h3>
                                        <div class="toggle-content">Hỗ trợ nhanh chóng khi có sự cố phát sinh. Chính sách bảo hành dài hạn, đảm bảo lợi ích khách hàng.</div>
                                    </div>
                                </div><!-- /.col-md-6 -->

                                <div class="col-md-6">
                                    <div class="wprt-spacer" data-desktop="70" data-mobi="60" data-smobi="60"></div>
                                    <h2>VỀ CHÚNG TÔI</h2>
                                    <div class="wprt-lines style-1 custom-3">
                                        <div class="line-1"></div>
                                        <div class="line-2"></div>
                                    </div>
                                    <div class="wprt-spacer" data-desktop="50" data-mobi="40" data-smobi="40"></div>

                                    <div class="wprt-galleries galleries w-570px" data-width="135" data-margin="10">
                                        <div id="wprt-slider" class="flexslider">
                                            <ul class="slides">
                                                <li class="flex-active-slide">
                                                    <a class="zoom" href="image-project/img-09.png"><i class="fa fa-arrows-alt"></i></a>
                                                    <img src="image-project/img-09.png" alt="image" />
                                                </li>

                                                <li class="flex-active-slide">
                                                    <a class="zoom" href="image-project/img-10.png"><i class="fa fa-arrows-alt"></i></a>
                                                    <img src="image-project/img-10.png" alt="image" />
                                                </li>

                                                <li class="flex-active-slide">
                                                    <a class="zoom" href="image-project/img-11.png"><i class="fa fa-arrows-alt"></i></a>
                                                    <img src="image-project/img-11.png" alt="image" />
                                                </li>

                                                <li class="flex-active-slide">
                                                    <a class="zoom" href="image-project/img-12.png"><i class="fa fa-arrows-alt"></i></a>
                                                    <img src="image-project/img-12.png" alt="image" />
                                                </li>

                                                <li class="flex-active-slide">
                                                    <a class="zoom" href="image-project/img-13.png"><i class="fa fa-arrows-alt"></i></a>
                                                    <img src="image-project/img-13.png" alt="image" />
                                                </li>
                                            </ul>
                                        </div>

                                        <div id="wprt-carousel" class="flexslider">
                                            <ul class="slides">
                                                <li><img src="image-project/img-09.png" alt="image"></li>
                                                <li><img src="image-project/img-10.png" alt="image"></li>
                                                <li><img src="image-project/img-11.png" alt="image"></li>
                                                <li><img src="image-project/img-12.png" alt="image"></li>
                                                <li><img src="image-project/img-13.png" alt="image"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- /.col-md-6 -->

                                <div class="col-md-12">
                                    <div class="wprt-spacer" data-desktop="70" data-mobi="60" data-smobi="60"></div>
                                </div><!-- /.col-md-12 -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </section>
                </div><!-- /.page-content -->
            </div>
        </div>
    </div>
</div>


@endsection()


@section('js') 

@endsection()