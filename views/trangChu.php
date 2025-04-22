<?php include "banner.php" ?>
<section class="content-section">
    <div class="container">
        <div class="section-head section-head-nav mb-0">
            <h2
                class="section-title text-upper"
                data-inview-showup="showup-translate-right">
                Laptop
            </h2>
            <a class="banner-btn text-upper px-5 btn" href="#" style="white-space: nowrap;" data-inview-showup="showup-translate-right">
        Xem tất cả
    </a>
            <div
                class="separator-line muted-bg"
                data-inview-showup="showup-translate-top"></div>
            <div
                class="owl-custom-navigation owl-nav-bordered"
                data-inview-showup="showup-translate-left"></div>
        </div>
        <div class="flex cols-md rows-md">
            <div class="col-12 sm-col-8 md-col-12 h-100 mt-sm-3">
                <div
                    class="owl-carousel owl-list-product"
                    data-owl-section-arrows="true"
                    data-autoplay="false">
                    <?php for ($i = 1; $i <= 10; $i++): ?>
                    <div
                        class="item shop-item shop-item-simple"
                        data-inview-showup="showup-scale">
                        <div class="item-back"></div>

                        <div class="pos-relative">
                            <a href="shop-item.html" class="item-image responsive-1by1"><img src="assets/images/shop/mouse.jpg" alt="" /></a>
                        </div>
                        <div class="item-content pr-0">
                            <div class="item-lables">
                                <a class="item-label-sale item-label" href="#">- 20%</a>
                            </div>
                            <div class="item-textes">
                                <div class="item-title text-upper text-center">
                                    <a href="shop-item.html" class="content-link">Gamers Mouse</a>
                                </div>
                                <div class="item-categories">
                                    <p><strong>CPU:</strong> Apple M2 aaaaaaaaaaaaaaaaaaaaaaa</p>
                                    <p><strong>RAM:</strong> 8GB</p>
                                    <p><strong>Card đồ họa:</strong> GPU Apple 10-core111111111111111111111111111111111111111111</p>
                                    <p><strong>Ổ cứng:</strong> 256GB SSD</p>
                                    <p><strong>Màn hình:</strong> Retina 13.3 inch</p>
                                </div>
                            </div>
                        </div>
                        <div class="item-links">
                            <div class="item-prices">
                                <div class="item-price">15.990.000 VNĐ</div>
                                <div class="item-old-price">15.990.000 VNĐ</div>
                            </div>
                            <a href="#" class="btn"><i class="fas fa-shopping-cart"></i></a>
                        </div>
                    </div>
                    <?php endfor; ?>
                </div>
            </div>
            <!-- <div class="col-12 sm-col-4 md-col-3 order-sm-first">
                <div
                    class="h-100 pos-relative px-3 pt-5 pb-3 d-flex"
                    data-inview-showup="showup-translate-right">
                    <div
                        class="fix-image-wrap"
                        data-image-src="./assets/images/shop/note-category.jpg"
                        data-parallax="scroll"></div>
                    <div class="mt-auto mx-auto">
                        <a class="banner-btn text-upper px-5 btn" href="#">Xem tất cả</a>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</section>