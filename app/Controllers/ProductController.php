<?php
namespace app\Controllers;

class ProductController {
    public function index() {
        return [
            (include __DIR__ . ('/../Views/Public/headerlanding.html')),
            (include __DIR__ . ('/../Views/Public/landing.html')),
            (include __DIR__ . ('/../Views/Public/footerlanding.html'))
        ];
    }

    public function list() {
        return "<div class='product-card'>
                    <img src='sources/img/WD_BLACK.png' alt=''/>
                    <h3>WD BLACK 500GB</h3>
                    <p class='description'>WD BLACK 2.5 inch High performance 7200 RPM, up to 64MB cache and SATA 6Gb/s</p>
                    <p>Rp 825.000</p>
                    <a href='https://www.westerndigital.com/products/internal-drives/wd-black-mobile-sata-hdd?sku=WD5000LPSX'>
                        <button>Buy Now</button>
                    </a>
                </div>";
    }
}
