<!-- slider start -->
<section class="container slider-container">
    <div class="slide">
        <img src="../images/slider1.webp" alt="" />
    </div>
    <div class="slide">
        <img src="../images/slider2.jpg" alt="" />
    </div>
    <div class="slide">
        <img src="../images/slider3.jpg" alt="" />
    </div>
    <div class="slide">
        <img src="../images/slider4.jpg" alt="" />
    </div>
    <div class="slide">
        <img src="../images/slider5.webp" alt="" />
    </div>
    <div class="slide">
        <img src="../images/slider6.jpg" alt="" />
    </div>

    <div class="circles">
        <button class="circle active"></button>
        <button class="circle"></button>
        <button class="circle"></button>
        <button class="circle"></button>
        <button class="circle"></button>
        <button class="circle"></button>
    </div>
    <div class="btn-container">
        <button type="button" class="prevBtn">
            <img src="../images/svgs/rightArrow.svg" alt="" />
        </button>
        <button type="button" class="nextBtn">
            <img src="../images/svgs/leftArrow.svg" alt="" />
        </button>
    </div>
</section>
<!-- slider end -->

<section dir="rtl" class="container all-contents">
    <div class="sidebar">
        <div class="siderbar-navigator">
            <div class="main">
                <a href="index">الرئيسية</a>
            </div>
            <div>/</div>
            <div class="sub-main">
                <a href="category">الكتب العربية</a>
            </div>
            <div>/</div>

            <div class="branch">
                <a href="category">كتب الكترونية</a>
            </div>
        </div>
        <div class="category-header">
            <img src="../images/svgs/arabic.svg" style="width: 30px" alt="" />
            <h1 class="category-header-name">كتب الكترونية</h1>
        </div>

        <div class="category-box">
            <div class="category-box-title">
                <p>تصفية النتائج</p>
            </div>
        </div>
        <div class="category-box-elements">
            <div class="category-box-element">
                <p>علامة تجارية</p>
                <img src="../images/svgs/opened.svg" style="width: 15px" alt="" />
            </div>
            <div class="category-box-element">
                <p>السعر</p>
                <img src="../images/svgs/opened.svg" style="width: 15px" alt="" />
            </div>
            <div class="category-box-element">
                <input type="range" min="1" max="100" value="50" class="slider" id="myRange" />
                <div class="slider-prices">
                    <span>ر.س.0</span>
                    <span>ر.س.150</span>
                </div>
            </div>

            <div class="category-box-element">
                <p>صيغة الكتاب</p>
                <img src="../images/svgs/opened.svg" style="width: 15px" alt="" />
            </div>
        </div>
    </div>

    <div class="all-items" dir="rtl">
        <div class="re-order">
            <p>الترتيب بحسب:</p>
            <!-- <input type="text" placeholder="الرجاء الاختيار" /> -->
            <div class="select-wrap">
                <label for="dropdown">الرجاء الاختيار</label>
                <select id="dropdown" name="dropdown">
                    <option></option>

                    <option value="name">الاسم</option>
                    <option value="price">السعر</option>
                    <option value="date">التاريخ</option>
                </select>
            </div>
        </div>
        <div class="current-offers">
            <div class="product">
                <div class="img-container">
                    <a href="book">
                        <img src="../images/book2.jpg" alt="" />
                    </a>
                </div>
                <div class="product-info">
                    <div class="product-name">
                        <h2>
                            <a href="book">
                                <p>‎قصص من وحي الواقع‎‎</p>
                            </a>
                        </h2>
                    </div>
                    <div class="price-box">
                        <div class="price">
                            <p>17.54</p>

                            <span class="price_currency"> رس </span>
                        </div>
                    </div>
                    <div class="book-link">
                        صيغ أخرى
                        <span>كتاب الكتروني</span>
                    </div>
                    <div class="actions">
                        <ul class="add-to-links">
                            <li class="add-to-links-item">
                                <img src="../images/svgs/star.svg" alt="" />
                            </li>
                            <li class="add-to-links-item red-basket">
                                <button class="btn-cart">
                                    <img src="../images/svgs/red-basket.svg" alt="" />
                                </button>
                            </li>
                            <li class="add-to-links-item">
                                <img src="../images/svgs/twoarrows.svg" alt="" />
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="product">
                <div class="img-container">
                    <a href="book">
                        <img src="../images/book1front.jpg" alt="" />
                    </a>
                </div>
                <div class="product-info">
                    <div class="product-name">
                        <h2>
                            <a href="book">
                                <p>لانك الله رحلة الى السماء السابعة‎</p>
                            </a>
                        </h2>
                    </div>
                    <div class="price-box">
                        <div class="price">
                            <p>17.54</p>

                            <span class="price_currency"> رس </span>
                        </div>
                    </div>
                    <div class="book-link">
                        صيغ أخرى
                        <span>كتاب الكتروني</span>
                    </div>
                    <div class="actions">
                        <ul class="add-to-links">
                            <li class="add-to-links-item">
                                <img src="../images/svgs/star.svg" alt="" />
                            </li>
                            <li class="add-to-links-item red-basket">
                                <button class="btn-cart">
                                    <img src="../images/svgs/red-basket.svg" alt="" />
                                </button>
                            </li>
                            <li class="add-to-links-item">
                                <img src="../images/svgs/twoarrows.svg" alt="" />
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="product">
                <div class="img-container">
                    <a href="book">
                        <img src="../images/book1front.jpg" alt="" />
                    </a>
                </div>
                <div class="product-info">
                    <div class="product-name">
                        <h2>
                            <a href="book">
                                <p>لانك الله رحلة الى السماء السابعة‎</p>
                            </a>
                        </h2>
                    </div>
                    <div class="price-box">
                        <div class="price">
                            <p>17.54</p>

                            <span class="price_currency"> رس </span>
                        </div>
                    </div>
                    <div class="book-link">
                        صيغ أخرى
                        <span>كتاب الكتروني</span>
                    </div>
                    <div class="actions">
                        <ul class="add-to-links">
                            <li class="add-to-links-item">
                                <img src="../images/svgs/star.svg" alt="" />
                            </li>
                            <li class="add-to-links-item red-basket">
                                <button class="btn-cart">
                                    <img src="../images/svgs/red-basket.svg" alt="" />
                                </button>
                            </li>
                            <li class="add-to-links-item">
                                <img src="../images/svgs/twoarrows.svg" alt="" />
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="product">
                <div class="img-container">
                    <a href="book">
                        <img src="../images/book1front.jpg" alt="" />
                    </a>
                </div>
                <div class="product-info">
                    <div class="product-name">
                        <h2>
                            <a href="book">
                                <p>لانك الله رحلة الى السماء السابعة‎</p>
                            </a>
                        </h2>
                    </div>
                    <div class="price-box">
                        <div class="price">
                            <p>17.54</p>

                            <span class="price_currency"> رس </span>
                        </div>
                    </div>
                    <div class="book-link">
                        صيغ أخرى
                        <span>كتاب الكتروني</span>
                    </div>
                    <div class="actions">
                        <ul class="add-to-links">
                            <li class="add-to-links-item">
                                <img src="../images/svgs/star.svg" alt="" />
                            </li>
                            <li class="add-to-links-item red-basket">
                                <button class="btn-cart">
                                    <img src="../images/svgs/red-basket.svg" alt="" />
                                </button>
                            </li>
                            <li class="add-to-links-item">
                                <img src="../images/svgs/twoarrows.svg" alt="" />
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="product">
                <div class="img-container">
                    <a href="book">
                        <img src="../images/book1front.jpg" alt="" />
                    </a>
                </div>
                <div class="product-info">
                    <div class="product-name">
                        <h2>
                            <a href="book">
                                <p>لانك الله رحلة الى السماء السابعة‎</p>
                            </a>
                        </h2>
                    </div>
                    <div class="price-box">
                        <div class="price">
                            <p>17.54</p>

                            <span class="price_currency"> رس </span>
                        </div>
                    </div>
                    <div class="book-link">
                        صيغ أخرى
                        <span>كتاب الكتروني</span>
                    </div>
                    <div class="actions">
                        <ul class="add-to-links">
                            <li class="add-to-links-item">
                                <img src="../images/svgs/star.svg" alt="" />
                            </li>
                            <li class="add-to-links-item red-basket">
                                <button class="btn-cart">
                                    <img src="../images/svgs/red-basket.svg" alt="" />
                                </button>
                            </li>
                            <li class="add-to-links-item">
                                <img src="../images/svgs/twoarrows.svg" alt="" />
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="product">
                <div class="img-container">
                    <a href="book">
                        <img src="../images/book2.jpg" alt="" />
                    </a>
                </div>
                <div class="product-info">
                    <div class="product-name">
                        <h2>
                            <a href="book">
                                <p>‎قصص من وحي الواقع‎‎</p>
                            </a>
                        </h2>
                    </div>
                    <div class="price-box">
                        <div class="price">
                            <p>17.54</p>

                            <span class="price_currency"> رس </span>
                        </div>
                    </div>
                    <div class="book-link">
                        صيغ أخرى
                        <span>كتاب الكتروني</span>
                    </div>
                    <div class="actions">
                        <ul class="add-to-links">
                            <li class="add-to-links-item">
                                <img src="../images/svgs/star.svg" alt="" />
                            </li>
                            <li class="add-to-links-item red-basket">
                                <button class="btn-cart">
                                    <img src="../images/svgs/red-basket.svg" alt="" />
                                </button>
                            </li>
                            <li class="add-to-links-item">
                                <img src="../images/svgs/twoarrows.svg" alt="" />
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="product">
                <div class="img-container">
                    <a href="book">
                        <img src="../images/book1front.jpg" alt="" />
                    </a>
                </div>
                <div class="product-info">
                    <div class="product-name">
                        <h2>
                            <a href="book">
                                <p>لانك الله رحلة الى السماء السابعة‎</p>
                            </a>
                        </h2>
                    </div>
                    <div class="price-box">
                        <div class="price">
                            <p>17.54</p>

                            <span class="price_currency"> رس </span>
                        </div>
                    </div>
                    <div class="book-link">
                        صيغ أخرى
                        <span>كتاب الكتروني</span>
                    </div>
                    <div class="actions">
                        <ul class="add-to-links">
                            <li class="add-to-links-item">
                                <img src="../images/svgs/star.svg" alt="" />
                            </li>
                            <li class="add-to-links-item red-basket">
                                <button class="btn-cart">
                                    <img src="../images/svgs/red-basket.svg" alt="" />
                                </button>
                            </li>
                            <li class="add-to-links-item">
                                <img src="../images/svgs/twoarrows.svg" alt="" />
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="product">
                <div class="img-container">
                    <a href="book">
                        <img src="../images/book1front.jpg" alt="" />
                    </a>
                </div>
                <div class="product-info">
                    <div class="product-name">
                        <h2>
                            <a href="book">
                                <p>لانك الله رحلة الى السماء السابعة‎</p>
                            </a>
                        </h2>
                    </div>
                    <div class="price-box">
                        <div class="price">
                            <p>17.54</p>

                            <span class="price_currency"> رس </span>
                        </div>
                    </div>
                    <div class="book-link">
                        صيغ أخرى
                        <span>كتاب الكتروني</span>
                    </div>
                    <div class="actions">
                        <ul class="add-to-links">
                            <li class="add-to-links-item">
                                <img src="../images/svgs/star.svg" alt="" />
                            </li>
                            <li class="add-to-links-item red-basket">
                                <button class="btn-cart">
                                    <img src="../images/svgs/red-basket.svg" alt="" />
                                </button>
                            </li>
                            <li class="add-to-links-item">
                                <img src="../images/svgs/twoarrows.svg" alt="" />
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="product">
                <div class="img-container">
                    <a href="book">
                        <img src="../images/book1front.jpg" alt="" />
                    </a>
                </div>
                <div class="product-info">
                    <div class="product-name">
                        <h2>
                            <a href="book">
                                <p>لانك الله رحلة الى السماء السابعة‎</p>
                            </a>
                        </h2>
                    </div>
                    <div class="price-box">
                        <div class="price">
                            <p>17.54</p>

                            <span class="price_currency"> رس </span>
                        </div>
                    </div>
                    <div class="book-link">
                        صيغ أخرى
                        <span>كتاب الكتروني</span>
                    </div>
                    <div class="actions">
                        <ul class="add-to-links">
                            <li class="add-to-links-item">
                                <img src="../images/svgs/star.svg" alt="" />
                            </li>
                            <li class="add-to-links-item red-basket">
                                <button class="btn-cart">
                                    <img src="../images/svgs/red-basket.svg" alt="" />
                                </button>
                            </li>
                            <li class="add-to-links-item">
                                <img src="../images/svgs/twoarrows.svg" alt="" />
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="product">
                <div class="img-container">
                    <a href="book">
                        <img src="../images/book1front.jpg" alt="" />
                    </a>
                </div>
                <div class="product-info">
                    <div class="product-name">
                        <h2>
                            <a href="book">
                                <p>لانك الله رحلة الى السماء السابعة‎</p>
                            </a>
                        </h2>
                    </div>
                    <div class="price-box">
                        <div class="price">
                            <p>17.54</p>

                            <span class="price_currency"> رس </span>
                        </div>
                    </div>
                    <div class="book-link">
                        صيغ أخرى
                        <span>كتاب الكتروني</span>
                    </div>
                    <div class="actions">
                        <ul class="add-to-links">
                            <li class="add-to-links-item">
                                <img src="../images/svgs/star.svg" alt="" />
                            </li>
                            <li class="add-to-links-item red-basket">
                                <button class="btn-cart">
                                    <img src="../images/svgs/red-basket.svg" alt="" />
                                </button>
                            </li>
                            <li class="add-to-links-item">
                                <img src="../images/svgs/twoarrows.svg" alt="" />
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="product">
                <div class="img-container">
                    <a href="book">
                        <img src="../images/book2.jpg" alt="" />
                    </a>
                </div>
                <div class="product-info">
                    <div class="product-name">
                        <h2>
                            <a href="book">
                                <p>‎قصص من وحي الواقع‎‎</p>
                            </a>
                        </h2>
                    </div>
                    <div class="price-box">
                        <div class="price">
                            <p>17.54</p>

                            <span class="price_currency"> رس </span>
                        </div>
                    </div>
                    <div class="book-link">
                        صيغ أخرى
                        <span>كتاب الكتروني</span>
                    </div>
                    <div class="actions">
                        <ul class="add-to-links">
                            <li class="add-to-links-item">
                                <img src="../images/svgs/star.svg" alt="" />
                            </li>
                            <li class="add-to-links-item red-basket">
                                <button class="btn-cart">
                                    <img src="../images/svgs/red-basket.svg" alt="" />
                                </button>
                            </li>
                            <li class="add-to-links-item">
                                <img src="../images/svgs/twoarrows.svg" alt="" />
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="product">
                <div class="img-container">
                    <a href="book">
                        <img src="../images/book1front.jpg" alt="" />
                    </a>
                </div>
                <div class="product-info">
                    <div class="product-name">
                        <h2>
                            <a href="book">
                                <p>لانك الله رحلة الى السماء السابعة‎</p>
                            </a>
                        </h2>
                    </div>
                    <div class="price-box">
                        <div class="price">
                            <p>17.54</p>

                            <span class="price_currency"> رس </span>
                        </div>
                    </div>
                    <div class="book-link">
                        صيغ أخرى
                        <span>كتاب الكتروني</span>
                    </div>
                    <div class="actions">
                        <ul class="add-to-links">
                            <li class="add-to-links-item">
                                <img src="../images/svgs/star.svg" alt="" />
                            </li>
                            <li class="add-to-links-item red-basket">
                                <button class="btn-cart">
                                    <img src="../images/svgs/red-basket.svg" alt="" />
                                </button>
                            </li>
                            <li class="add-to-links-item">
                                <img src="../images/svgs/twoarrows.svg" alt="" />
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="product">
                <div class="img-container">
                    <a href="book">
                        <img src="../images/book1front.jpg" alt="" />
                    </a>
                </div>
                <div class="product-info">
                    <div class="product-name">
                        <h2>
                            <a href="book">
                                <p>لانك الله رحلة الى السماء السابعة‎</p>
                            </a>
                        </h2>
                    </div>
                    <div class="price-box">
                        <div class="price">
                            <p>17.54</p>

                            <span class="price_currency"> رس </span>
                        </div>
                    </div>
                    <div class="book-link">
                        صيغ أخرى
                        <span>كتاب الكتروني</span>
                    </div>
                    <div class="actions">
                        <ul class="add-to-links">
                            <li class="add-to-links-item">
                                <img src="../images/svgs/star.svg" alt="" />
                            </li>
                            <li class="add-to-links-item red-basket">
                                <button class="btn-cart">
                                    <img src="../images/svgs/red-basket.svg" alt="" />
                                </button>
                            </li>
                            <li class="add-to-links-item">
                                <img src="../images/svgs/twoarrows.svg" alt="" />
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="product">
                <div class="img-container">
                    <a href="book">
                        <img src="../images/book1front.jpg" alt="" />
                    </a>
                </div>
                <div class="product-info">
                    <div class="product-name">
                        <h2>
                            <a href="book">
                                <p>لانك الله رحلة الى السماء السابعة‎</p>
                            </a>
                        </h2>
                    </div>
                    <div class="price-box">
                        <div class="price">
                            <p>17.54</p>

                            <span class="price_currency"> رس </span>
                        </div>
                    </div>
                    <div class="book-link">
                        صيغ أخرى
                        <span>كتاب الكتروني</span>
                    </div>
                    <div class="actions">
                        <ul class="add-to-links">
                            <li class="add-to-links-item">
                                <img src="../images/svgs/star.svg" alt="" />
                            </li>
                            <li class="add-to-links-item red-basket">
                                <button class="btn-cart">
                                    <img src="../images/svgs/red-basket.svg" alt="" />
                                </button>
                            </li>
                            <li class="add-to-links-item">
                                <img src="../images/svgs/twoarrows.svg" alt="" />
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="product">
                <div class="img-container">
                    <a href="book">
                        <img src="../images/book1front.jpg" alt="" />
                    </a>
                </div>
                <div class="product-info">
                    <div class="product-name">
                        <h2>
                            <a href="book">
                                <p>لانك الله رحلة الى السماء السابعة‎</p>
                            </a>
                        </h2>
                    </div>
                    <div class="price-box">
                        <div class="price">
                            <p>17.54</p>

                            <span class="price_currency"> رس </span>
                        </div>
                    </div>
                    <div class="book-link">
                        صيغ أخرى
                        <span>كتاب الكتروني</span>
                    </div>
                    <div class="actions">
                        <ul class="add-to-links">
                            <li class="add-to-links-item">
                                <img src="../images/svgs/star.svg" alt="" />
                            </li>
                            <li class="add-to-links-item red-basket">
                                <button class="btn-cart">
                                    <img src="../images/svgs/red-basket.svg" alt="" />
                                </button>
                            </li>
                            <li class="add-to-links-item">
                                <img src="../images/svgs/twoarrows.svg" alt="" />
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="product">
                <div class="img-container">
                    <a href="book">
                        <img src="../images/book2.jpg" alt="" />
                    </a>
                </div>
                <div class="product-info">
                    <div class="product-name">
                        <h2>
                            <a href="book">
                                <p>‎قصص من وحي الواقع‎‎</p>
                            </a>
                        </h2>
                    </div>
                    <div class="price-box">
                        <div class="price">
                            <p>17.54</p>

                            <span class="price_currency"> رس </span>
                        </div>
                    </div>
                    <div class="book-link">
                        صيغ أخرى
                        <span>كتاب الكتروني</span>
                    </div>
                    <div class="actions">
                        <ul class="add-to-links">
                            <li class="add-to-links-item">
                                <img src="../images/svgs/star.svg" alt="" />
                            </li>
                            <li class="add-to-links-item red-basket">
                                <button class="btn-cart">
                                    <img src="../images/svgs/red-basket.svg" alt="" />
                                </button>
                            </li>
                            <li class="add-to-links-item">
                                <img src="../images/svgs/twoarrows.svg" alt="" />
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="product">
                <div class="img-container">
                    <a href="book">
                        <img src="../images/book1front.jpg" alt="" />
                    </a>
                </div>
                <div class="product-info">
                    <div class="product-name">
                        <h2>
                            <a href="book">
                                <p>لانك الله رحلة الى السماء السابعة‎</p>
                            </a>
                        </h2>
                    </div>
                    <div class="price-box">
                        <div class="price">
                            <p>17.54</p>

                            <span class="price_currency"> رس </span>
                        </div>
                    </div>
                    <div class="book-link">
                        صيغ أخرى
                        <span>كتاب الكتروني</span>
                    </div>
                    <div class="actions">
                        <ul class="add-to-links">
                            <li class="add-to-links-item">
                                <img src="../images/svgs/star.svg" alt="" />
                            </li>
                            <li class="add-to-links-item red-basket">
                                <button class="btn-cart">
                                    <img src="../images/svgs/red-basket.svg" alt="" />
                                </button>
                            </li>
                            <li class="add-to-links-item">
                                <img src="../images/svgs/twoarrows.svg" alt="" />
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="product">
                <div class="img-container">
                    <a href="book">
                        <img src="../images/book1front.jpg" alt="" />
                    </a>
                </div>
                <div class="product-info">
                    <div class="product-name">
                        <h2>
                            <a href="book">
                                <p>لانك الله رحلة الى السماء السابعة‎</p>
                            </a>
                        </h2>
                    </div>
                    <div class="price-box">
                        <div class="price">
                            <p>17.54</p>

                            <span class="price_currency"> رس </span>
                        </div>
                    </div>
                    <div class="book-link">
                        صيغ أخرى
                        <span>كتاب الكتروني</span>
                    </div>
                    <div class="actions">
                        <ul class="add-to-links">
                            <li class="add-to-links-item">
                                <img src="../images/svgs/star.svg" alt="" />
                            </li>
                            <li class="add-to-links-item red-basket">
                                <button class="btn-cart">
                                    <img src="../images/svgs/red-basket.svg" alt="" />
                                </button>
                            </li>
                            <li class="add-to-links-item">
                                <img src="../images/svgs/twoarrows.svg" alt="" />
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="product">
                <div class="img-container">
                    <a href="book">
                        <img src="../images/book1front.jpg" alt="" />
                    </a>
                </div>
                <div class="product-info">
                    <div class="product-name">
                        <h2>
                            <a href="book">
                                <p>لانك الله رحلة الى السماء السابعة‎</p>
                            </a>
                        </h2>
                    </div>
                    <div class="price-box">
                        <div class="price">
                            <p>17.54</p>

                            <span class="price_currency"> رس </span>
                        </div>
                    </div>
                    <div class="book-link">
                        صيغ أخرى
                        <span>كتاب الكتروني</span>
                    </div>
                    <div class="actions">
                        <ul class="add-to-links">
                            <li class="add-to-links-item">
                                <img src="../images/svgs/star.svg" alt="" />
                            </li>
                            <li class="add-to-links-item red-basket">
                                <button class="btn-cart">
                                    <img src="../images/svgs/red-basket.svg" alt="" />
                                </button>
                            </li>
                            <li class="add-to-links-item">
                                <img src="../images/svgs/twoarrows.svg" alt="" />
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="product">
                <div class="img-container">
                    <a href="book">
                        <img src="../images/book1front.jpg" alt="" />
                    </a>
                </div>
                <div class="product-info">
                    <div class="product-name">
                        <h2>
                            <a href="book">
                                <p>لانك الله رحلة الى السماء السابعة‎</p>
                            </a>
                        </h2>
                    </div>
                    <div class="price-box">
                        <div class="price">
                            <p>17.54</p>

                            <span class="price_currency"> رس </span>
                        </div>
                    </div>
                    <div class="book-link">
                        صيغ أخرى
                        <span>كتاب الكتروني</span>
                    </div>
                    <div class="actions">
                        <ul class="add-to-links">
                            <li class="add-to-links-item">
                                <img src="../images/svgs/star.svg" alt="" />
                            </li>
                            <li class="add-to-links-item red-basket">
                                <button class="btn-cart">
                                    <img src="../images/svgs/red-basket.svg" alt="" />
                                </button>
                            </li>
                            <li class="add-to-links-item">
                                <img src="../images/svgs/twoarrows.svg" alt="" />
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- main end -->