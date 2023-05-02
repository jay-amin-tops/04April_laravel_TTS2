<?php
include("header.php");
if (isset($_REQUEST["saveproducttocart1"])) {
    $_SESSION['cartdata']['product1'] = array("product_title" => $_REQUEST['product_title'], "product_price" => $_REQUEST['product_price']);
}
if (isset($_REQUEST["saveproducttocart2"])) {
    $_SESSION['cartdata']['product2'] = array("product_title" => $_REQUEST['product_title'], "product_price" => $_REQUEST['product_price']);
}
?>
<style>
    .container .product-item {
        min-height: 450px;
        border: none;
        overflow: hidden;
        position: relative;
        border-radius: 0
    }

    .container .product-item .product {
        width: 100%;
        height: 350px;
        position: relative;
        overflow: hidden;
        cursor: pointer
    }

    .container .product-item .product img {
        width: 100%;
        height: 100%;
        object-fit: cover
    }

    .container .product-item .product .icons .icon {
        width: 40px;
        height: 40px;
        background-color: #fff;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        transition: transform 0.6s ease;
        transform: rotate(180deg);
        cursor: pointer
    }

    .container .product-item .product .icons .icon:hover {
        background-color: #b71c1c;
        color: #fff
    }

    .container .product-item .product .icons .icon:nth-last-of-type(3) {
        transition-delay: 0.2s
    }

    .container .product-item .product .icons .icon:nth-last-of-type(2) {
        transition-delay: 0.15s
    }

    .container .product-item .product .icons .icon:nth-last-of-type(1) {
        transition-delay: 0.1s
    }

    .container .product-item:hover .product .icons .icon {
        transform: translateY(-60px)
    }

    .container .product-item .tag {
        text-transform: uppercase;
        font-size: 0.75rem;
        font-weight: 500;
        position: absolute;
        top: 10px;
        left: 20px;
        padding: 0 0.4rem
    }

    .container .product-item .title {
        font-size: 0.95rem;
        letter-spacing: 0.5px
    }

    .container .product-item .fa-star {
        font-size: 0.65rem;
        color: goldenrod
    }

    .container .product-item .price {
        margin-top: 10px;
        margin-bottom: 10px;
        font-weight: 600
    }

    .fw-800 {
        font-weight: 800
    }

    .bg-green {
        background-color: #208f20 !important;
        color: #fff
    }

    .bg-black {
        background-color: #1f1d1d;
        color: #fff
    }

    .bg-red {
        background-color: #bb3535;
        color: #fff
    }

    @media (max-width: 767.5px) {

        .navbar-nav .nav-link.active,
        .navbar-nav .nav-link:hover {
            background-color: #b71c1c;
            color: #fff !important
        }

        .navbar-nav .nav-link {
            border: 3px solid transparent;
            margin: 0.8rem 0;
            display: flex;
            border-radius: 10px;
            justify-content: center
        }
    }
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<div class="container bg-white">

    <div class="row">
        <div class="col-lg-3 col-sm-6 d-flex flex-column align-items-center justify-content-center product-item my-3">
            <div class="product"> <img src="https://images.pexels.com/photos/54203/pexels-photo-54203.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
                <ul class="d-flex align-items-center justify-content-center list-unstyled icons">
                    <li class="icon"><span class="fas fa-expand-arrows-alt"></span></li>
                    <li class="icon mx-3"><span class="far fa-heart"></span></li>
                    <li class="icon">
                        <form method="post">
                            <input type="hidden" name="product_title" value="Winter Sweater" id="product_title">
                            <input type="hidden" name="product_price" value="60" id="product_price">
                            <button name="saveproducttocart1" type="submit">
                                <span class="fas fa-shopping-bag"></span>
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
            <div class="tag bg-red">sale</div>
            <div class="title pt-4 pb-1">Winter Sweater</div>
            <div class="d-flex align-content-center justify-content-center"> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> </div>
            <div class="price">$ 60.0</div>

        </div>
        <div class="col-lg-3 col-sm-6 d-flex flex-column align-items-center justify-content-center product-item my-3">
            <div class="product"> <img src="https://images.pexels.com/photos/6764040/pexels-photo-6764040.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
                <ul class="d-flex align-items-center justify-content-center list-unstyled icons">
                    <li class="icon"><span class="fas fa-expand-arrows-alt"></span></li>
                    <li class="icon mx-3"><span class="far fa-heart"></span></li>
                    <li class="icon"><form method="post">
                            <input type="hidden" name="product_title" value="Denim Dresses" id="product_title">
                            <input type="hidden" name="product_price" value="92" id="product_price">
                            <button name="saveproducttocart2" type="submit">
                                <span class="fas fa-shopping-bag"></span>
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
            <div class="tag bg-black">out of stock</div>
            <div class="title pt-4 pb-1">Denim Dresses</div>
            <div class="d-flex align-content-center justify-content-center"> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> </div>
            <div class="price">$ 55.0</div>
        </div>
        <div class="col-lg-3 col-sm-6 d-flex flex-column align-items-center justify-content-center product-item my-3">
            <div class="product"> <img src="https://images.pexels.com/photos/914668/pexels-photo-914668.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
                <ul class="d-flex align-items-center justify-content-center list-unstyled icons">
                    <li class="icon"><span class="fas fa-expand-arrows-alt"></span></li>
                    <li class="icon mx-3"><span class="far fa-heart"></span></li>
                    <li class="icon"><span class="fas fa-shopping-bag"></span></li>
                </ul>
            </div>
            <div class="tag bg-green">new</div>
            <div class="title pt-4 pb-1"> Empire Waist Dresses</div>
            <div class="d-flex align-content-center justify-content-center"> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> </div>
            <div class="price">$ 70.0</div>
        </div>
        <div class="col-lg-3 col-sm-6 d-flex flex-column align-items-center justify-content-center product-item my-3">
            <div class="product"> <img src="https://images.pexels.com/photos/6311392/pexels-photo-6311392.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
                <ul class="d-flex align-items-center justify-content-center list-unstyled icons">
                    <li class="icon"><span class="fas fa-expand-arrows-alt"></span></li>
                    <li class="icon mx-3"><span class="far fa-heart"></span></li>
                    <li class="icon"><span class="fas fa-shopping-bag"></span></li>
                </ul>
            </div>
            <div class="title pt-4 pb-1">Pinafore Dresses</div>
            <div class="d-flex align-content-center justify-content-center"> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> </div>
            <div class="price">$ 60.0</div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3 col-sm-6 d-flex flex-column align-items-center justify-content-center product-item my-3">
            <div class="product"> <img src="https://images.pexels.com/photos/54203/pexels-photo-54203.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
                <ul class="d-flex align-items-center justify-content-center list-unstyled icons">
                    <li class="icon"><span class="fas fa-expand-arrows-alt"></span></li>
                    <li class="icon mx-3"><span class="far fa-heart"></span></li>
                    <li class="icon"><span class="fas fa-shopping-bag"></span></li>
                </ul>
            </div>
            <div class="tag bg-red">sale</div>
            <div class="title pt-4 pb-1">Winter Sweater</div>
            <div class="d-flex align-content-center justify-content-center"> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> </div>
            <div class="price">$ 60.0</div>
        </div>
        <div class="col-lg-3 col-sm-6 d-flex flex-column align-items-center justify-content-center product-item my-3">
            <div class="product"> <img src="https://images.pexels.com/photos/6764040/pexels-photo-6764040.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
                <ul class="d-flex align-items-center justify-content-center list-unstyled icons">
                    <li class="icon"><span class="fas fa-expand-arrows-alt"></span></li>
                    <li class="icon mx-3"><span class="far fa-heart"></span></li>
                    <li class="icon"><span class="fas fa-shopping-bag"></span></li>
                </ul>
            </div>
            <div class="tag bg-black">out of stock</div>
            <div class="title pt-4 pb-1">Denim Dresses</div>
            <div class="d-flex align-content-center justify-content-center"> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> </div>
            <div class="price">$ 55.0</div>
        </div>
        <div class="col-lg-3 col-sm-6 d-flex flex-column align-items-center justify-content-center product-item my-3">
            <div class="product"> <img src="https://images.pexels.com/photos/914668/pexels-photo-914668.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
                <ul class="d-flex align-items-center justify-content-center list-unstyled icons">
                    <li class="icon"><span class="fas fa-expand-arrows-alt"></span></li>
                    <li class="icon mx-3"><span class="far fa-heart"></span></li>
                    <li class="icon"><span class="fas fa-shopping-bag"></span></li>
                </ul>
            </div>
            <div class="title pt-4 pb-1"> Empire Waist Dresses</div>
            <div class="d-flex align-content-center justify-content-center"> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> </div>
            <div class="price">$ 70.0</div>
        </div>
        <div class="col-lg-3 col-sm-6 d-flex flex-column align-items-center justify-content-center product-item my-3">
            <div class="product"> <img src="https://images.pexels.com/photos/6311392/pexels-photo-6311392.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
                <ul class="d-flex align-items-center justify-content-center list-unstyled icons">
                    <li class="icon"><span class="fas fa-expand-arrows-alt"></span></li>
                    <li class="icon mx-3"><span class="far fa-heart"></span></li>
                    <li class="icon"><span class="fas fa-shopping-bag"></span></li>
                </ul>
            </div>
            <div class="tag bg-green">new</div>
            <div class="title pt-4 pb-1">Pinafore Dresses</div>
            <div class="d-flex align-content-center justify-content-center"> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> </div>
            <div class="price">$ 60.0</div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>



</body>

</html>