<header class="main-header">
    <div class="alpha-navigation container">
        <div class="alpha-navigation__list col-xl-7 d-flex">
            <ul>
                <li class="alpha-navigation__list-item"><a href="{{ url('/about') }}">О компании</a></li>
                <li class="alpha-navigation__list-item"><a href="{{ url('/ourBrands') }}">Наши бренды</a></li>
                <li class="alpha-navigation__list-item"><a href="{{ url('/payment') }}">Оплата</a></li>
                <li class="alpha-navigation__list-item"><a href="{{ url('/installment') }}">Кредит и рассрочка</a></li>
                <li class="alpha-navigation__list-item"><a href="{{ url('/delivery') }}">Доставка и сборка</a></li>
                <li class="alpha-navigation__list-item"><a href="{{ url('/stocks') }}">акции</a></li>
            </ul>
        </div>
        <div class="alpha-navigation__sale col-xl-2">
            <a href="/sales">
                <img src="/assets/img/elements/sale.svg" alt="">
                <p>Распродажа</p>
            </a>
        </div>
        <div class="alpha-navigation__search col-xl-3 ">
            <form class="d-flex" action="/search" method="post">
                @csrf
                <input required type="text" name="text" placeholder="Поиск...">
                <button type="submit" 
                style="background: none;
                color: inherit;
                border: none;
                padding: 0;
                font: inherit;
                cursor: pointer;
                outline: inherit;">
                    <img src="/assets/img/elements/search-black.svg" alt="">
                </button>
            </form>
        </div>
    </div>
    <div class="brand-navigation container">
        <div class="brand-navigation__logo col-xl-3 col-lg-4 col-md-4 col-sm-3 col-12">
            <a href="{{ url('/') }}">
                <img src="/assets/img/elements/shatura-logo.svg" alt="">
            </a>
        </div>
        <div class="brand-navigation__branches col-xl-3">
            <a href="{{ url('/ourShops') }}">
                <p>Наши магазины: <a id="ourBranches" href="#!">Ташкент
                        <img src="/assets/img/elements/arrow-down.svg" alt=""></a>
                </p>
            </a>
            <div class="branches">
                <p><a href="{{ url('/ourShops') }}">Ташкент</a></p>
                <p><a href="{{ url('/ourShops') }}">Самарканд</a></p>
            </div>
        </div>
        <div class="brand-navigation__info col-xl-3 col-lg-4 col-md-4 col-sm-6 col-9">
            <div class="brand-navigation__info-tel">
                <p>9:00 до 18:00</p>
                <a href="tel:+998900324445"><svg width="16" height="16" viewBox="0 0 16 16"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M15.5434 11.3062L12.0434 9.80619C11.8939 9.74247 11.7277 9.72904 11.5699 9.76793C11.4121 9.80682 11.2712 9.89592 11.1684 10.0218L9.61844 11.9156C7.18586 10.7686 5.22819 8.81096 4.08125 6.37838L5.975 4.82838C6.10115 4.72577 6.19044 4.58487 6.22934 4.42698C6.26825 4.2691 6.25466 4.10284 6.19063 3.95338L4.69063 0.453375C4.62035 0.292253 4.49605 0.160702 4.33917 0.0814062C4.18229 0.00211036 4.00266 -0.0199601 3.83125 0.0190004L0.58125 0.769C0.41599 0.807162 0.268545 0.900213 0.16298 1.03296C0.0574141 1.16572 -3.80691e-05 1.33033 1.89256e-08 1.49994C1.89256e-08 9.51556 6.49687 15.9999 14.5 15.9999C14.6697 16 14.8343 15.9426 14.9672 15.8371C15.1 15.7315 15.1931 15.584 15.2312 15.4187L15.9812 12.1687C16.02 11.9964 15.9974 11.8161 15.9175 11.6587C15.8376 11.5013 15.7053 11.3766 15.5434 11.3062Z" />
                    </svg>+99890 032 44 45</a>
            </div>
        </div>
        <div class="brand-navigation__basket col-xl-3 col-lg-4 col-md-4 col-sm-3 col-3">
            <a href="/cart">
                <div class="basket-price">
                    <p>{{ Cart::subtotal(0, 0, ' ') }} <span>сум</span></p> 
                </div>
                <div class="basket-logo">
                    <img src="/assets/img/elements/basket.svg" alt="">
                    <span class="basket-items">{{ Cart::count() }} </span>
                </div>
            </a>
        </div>
    </div>
    <div class="product-navigation container">
        <div class="products-for-mobile" id="catalogueMobile">
            <p>каталог товаров <img src="/assets/img/elements/arrow-down-black.svg" alt=""></p>
        </div>
        <ul class="product-navigation__list">
            {{-- <li class="products-for-mobile">коллекции</li> --}}
            <a class="product-navigation__list-item" href="{{ url('products/' .  10) }}">
                <li>Спальни</li>
            </a>
            <a class="product-navigation__list-item" href="{{ url('products/' .  11) }}">
                <li>гостиные</li>
            </a>
            <a class="product-navigation__list-item" href="{{ url('products/' .  12) }}">
                <li>детские</li>
            </a>
            <a class="product-navigation__list-item" href="{{ url('products/' .  13) }}">
                <li>прихожие</li>
            </a>
            <a class="product-navigation__list-item" href="{{ url('offices') }}">
                <li>офисы и гостиницы</li>
            </a>
            <a class="product-navigation__list-item" href="/kitchens">
                <li>кухни</li>
            </a>
            {{-- <li class="products-for-mobile">предметы мебели</li> --}}

            <a class="product-navigation__list-item light-bg" href="{{ url('sofas/' .  16) }}">
                <li>мягкая мебель</li>
            </a>
            <a class="product-navigation__list-item light-bg" href="{{ url('wardobes/' .  17) }}">
                <li>шкафы</li>
            </a>
            <a class="product-navigation__list-item light-bg" href="{{ url('comods/' .  18) }}">
                <li>комоды</li>
            </a>
            <a class="product-navigation__list-item light-bg" href="{{ url('chairs/' .  19) }}">
                <li>столы и стулья</li>
            </a>
            <a class="product-navigation__list-item light-bg" href="{{ url('beds/' .  20) }}">
                <li>кровати</li>
            </a>
            <a class="product-navigation__list-item light-bg" href="{{ url('mattress/' .  21) }}">
                <li>матрасы</li>
            </a>
        </ul>
    </div>
    <div class="mobile-menu-buttons">
        <img class="mobile-menu-open-button" src="/assets/img/elements/menu-open.svg" alt="">
        <img class="mobile-menu-close-button" src="/assets/img/elements/menu-close.svg" alt="">
    </div>
   
</header>