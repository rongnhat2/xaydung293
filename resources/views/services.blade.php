@extends('layout')
@section('title', 'Dịch vụ')
@section('description', 'Cung cấp dịch vụ xây dựng chuyên nghiệp: thi công nhà ở, sửa chữa, cải tạo, thiết kế trọn gói. Cam kết chất lượng – đúng tiến độ – giá hợp lý.')
@section('keyword', 'dịch vụ xây dựng, công ty xây dựng, thi công xây dựng, xây nhà trọn gói, sửa chữa nhà, cải tạo nhà, thiết kế xây dựng, nhà thầu xây dựng, thi công công trình, xây dựng dân dụng, xây dựng chuyên nghiệp')
@section('header-class', 'header-front-page style-1')


@section('css')

@endsection()


@section('body')

<!-- Featured Title -->
<div id="featured-title" class="clearfix featured-title-left">
    <div id="featured-title-inner" class="container clearfix">
        <div class="featured-title-inner-wrap">
            <div class="featured-title-heading-wrap">
                <h1 class="featured-title-heading">Dịch vụ của chúng tôi</h1>
            </div>
            <div id="breadcrumbs">
                <div class="breadcrumbs-inner">
                    <div class="breadcrumb-trail">
                        <a href="/" title="Construction" rel="home" class="trail-begin">Trang chủ</a>
                        <span class="sep">/</span>
                        <span class="trail-end">Dịch vụ của chúng tôi</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Main Content -->
<div id="main-content" class="site-main clearfix">
    <div id="content-wrap">
        <div id="site-content" class="site-content clearfix">
            <div id="inner-content" class="inner-content-wrap">
                <div class="page-content">
                    <section class="wprt-section">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="wprt-spacer" data-desktop="80" data-mobi="60" data-smobi="60"></div>
                                </div><!-- /.col-md-12 -->

                                <div class="col-md-4">

                                    <div class="service-item clearfix">
                                        <div class="thumb"><img src="image-project/img-05.png" alt="image" /></div>
                                        <div class="service-item-wrap">
                                            <h3 class="title font-size-18"><a href="#">Thiết Kế Kiến Trúc Sáng Tạo & Xây Dựng</a></h3>
                                            <p class="desc">Đưa ra giải pháp thiết kế tối ưu, phù hợp với nhu cầu sử dụng. Kết hợp yếu tố thẩm mỹ và công năng, đảm bảo không gian sống và làm việc tiện nghi.</p>
                                            <a href="#" class="wprt-button small rounded-3px">Xem thêm</a>
                                        </div>
                                    </div>

                                    <div class="wprt-spacer" data-desktop="55" data-mobi="40" data-smobi="40"></div>

                                    <div class="service-item clearfix">
                                        <div class="thumb"><img src="image-project/img-10.png" alt="image" /></div>
                                        <div class="service-item-wrap">
                                            <h3 class="title font-size-18"><a href="#">Kiểm Định & Đánh Giá Chất Lượng</a></h3>
                                            <p class="desc">Cung cấp bản vẽ kỹ thuật rõ ràng, đầy đủ thông tin. Đảm bảo tính chính xác, hỗ trợ thi công thuận lợi và hiệu quả.</p>
                                            <a href="#" class="wprt-button small rounded-3px">Xem thêm</a>
                                        </div>
                                    </div>

                                    <div class="wprt-spacer" data-desktop="0" data-mobi="40" data-smobi="40"></div>
                                </div><!-- /.col-md-4 -->

                                <div class="col-md-4">
                                    <div class="service-item clearfix">
                                        <div class="thumb"><img src="image-project/img-07.png" alt="image" /></div>
                                        <div class="service-item-wrap">
                                            <h3 class="title font-size-18"><a href="#">Thi Công & Xây Dựng Chuyên Nghiệp</a></h3>
                                            <p class="desc">Đội ngũ thi công giàu kinh nghiệm, đảm bảo tiến độ và chất lượng. Áp dụng công nghệ xây dựng tiên tiến, giảm thiểu rủi ro.</p>
                                            <a href="#" class="wprt-button small rounded-3px">Xem thêm</a>
                                        </div>
                                    </div>

                                    <div class="wprt-spacer" data-desktop="55" data-mobi="40" data-smobi="40"></div>

                                    <div class="service-item clearfix">
                                        <div class="thumb"><img src="image-project/img-08.png" alt="image" /></div>
                                        <div class="service-item-wrap">
                                            <h3 class="title font-size-18"><a href="#">Khoan Lỗ Lắp Đặt & Khoan Cắt Sàn</a></h3>
                                            <p class="desc">Khoan, cắt, đục bê tông cho công trình xây dựng. Sử dụng máy móc hiện đại, đảm bảo độ chính xác cao. </p>
                                            <a href="#" class="wprt-button small rounded-3px">Xem thêm</a>
                                        </div>
                                    </div>

                                    <div class="wprt-spacer" data-desktop="0" data-mobi="40" data-smobi="40"></div>
                                </div><!-- /.col-md-4 -->

                                <div class="col-md-4">
                                    <div class="service-item clearfix">
                                        <div class="thumb"><img src="image-project/img-06.png" alt="image" /></div>
                                        <div class="service-item-wrap">
                                            <h3 class="title font-size-18"><a href="#">Lắp Đặt Điện Dân Dụng & Công Nghiệp</a></h3>
                                            <p class="desc">Thiết kế, thi công hệ thống điện theo tiêu chuẩn an toàn. Lắp đặt tủ điện, dây dẫn, thiết bị chiếu sáng, ổ cắm, công tắc. Nâng cấp, thay thế hệ thống điện cũ.</p>
                                            <a href="#" class="wprt-button small rounded-3px">Xem thêm</a>
                                        </div>
                                    </div>

                                    <div class="wprt-spacer" data-desktop="55" data-mobi="40" data-smobi="40"></div>
                                    
                                    <div class="service-item clearfix">
                                        <div class="thumb"><img src="image-project/img-11.png" alt="image" /></div>
                                        <div class="service-item-wrap">
                                            <h3 class="title font-size-18"><a href="#">Bảo Hành & Bảo Trì Công Trình</a></h3>
                                            <p class="desc">Cung cấp dịch vụ bảo trì định kỳ, kéo dài tuổi thọ công trình. Hỗ trợ sửa chữa, nâng cấp khi có nhu cầu. </p>
                                            <a href="#" class="wprt-button small rounded-3px">Xem thêm</a>
                                        </div>
                                    </div>
                                </div><!-- /.col-md-4 -->

                                <div class="col-md-12">
                                    <div class="wprt-spacer" data-desktop="80" data-mobi="60" data-smobi="60"></div>
                                </div><!-- /.col-md-12 -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </section>
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection()


@section('js')

    <script src="{{ asset('customer/api/pages/projects.js') }}"></script>

@endsection()