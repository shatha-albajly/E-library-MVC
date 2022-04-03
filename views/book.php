<!-- main start -->
<main dir="rtl" class="book-item">
    <div class="container siderbar-navigator">

        <div class="main" style="margin-right: 2rem;">
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
        <div>/</div>

        <div class="book_page">
            <a href="book">لأنك الله</a>
        </div>

    </div>


    </div>

    <div class="book container">
        <div class="book-pictures">
            <div class="pictures-box">
                <div class="picture-container">
                    <img src="../images/<?= $bookInfo['image']; ?>" alt="" />
                </div>
                <div class="pictures-nav">
                    <div class="small-pictures">
                        <div class="img-cart">
                            <img src="../images/<?= $bookInfo['image']; ?>" alt="" />
                        </div>
                        <!-- <div class="img-cart">
                            <img src="../images/book2back.jpg" alt="" />
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="book-details">
            <div class="product-info">
                <div class="product-name">
                    <h2>
                        <a href="book">
                            <p><?= $bookInfo['title']; ?></p>
                        </a>
                    </h2>
                </div>
                <div class="price-box">
                    <div class="price">
                        <p><?= $bookInfo['price']; ?></p>

                        <span class="price_currency"> رس </span>
                    </div>
                </div>
                <div class="book-more-details">
                    <div>وحدة البيع Each</div>
                    <div class="review">
                        <div class="stars">
                            <img src="../images/svgs//yellowstar.svg" alt="" />
                            <img src="../images/svgs//yellowstar.svg" alt="" />
                            <img src="../images/svgs//yellowstar.svg" alt="" />
                            <img src="../images/svgs//yellowstar.svg" alt="" />
                            <img src="../images/svgs//yellowstar.svg" alt="" />
                        </div>
                        <div class="review-text">(15 الراجعات)</div>
                    </div>
                    <div>رقم الصنف j88413442 رقم المنتج 4</div>
                </div>

                <div class="book-type-container">
                    <div class="book-type">الصيغ المتوفرة:</div>
                    <div class="row">
                        <div class="row_item">
                            <div class="outer-circle">
                                <div class="inner-circle"></div>
                            </div>

                            <a href="">كتاب إلكتروني</a>
                        </div>
                        <div class="price-box">
                            <div class="price">
                                <p><?= $bookInfo['price']; ?></p>

                                <span class="price_currency"> رس </span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="row_item">
                            <div class="outer-circle">
                                <div class="inner-circle"></div>
                            </div>
                            <a href="">كتاب إلكتروني</a>
                        </div>
                        <div class="price-box">
                            <div class="price">
                                <p><?= $bookInfo['price']; ?></p>

                                <span class="price_currency"> رس </span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="book-order">
            <div class="book-order-box">
                <div class="yellow-note">
                    <p>
                        <span>ملاحظة: </span>
                        سيتم اضافة هذا الكتاب الالكتروني الى مكتبتك في قارئ جرير
                    </p>
                    <a href="#">اقرا المزيد</a>
                </div>
                <div class="add-to-basket-input">
                    <label for="bookNum"></label>

                    <select name="booksNum" id="booksNum">
                        <option value="2">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                    <button onclick="btn_cart_fun()" class="btn-cart">
                        <img src="../images/svgs/red-basket.svg" alt="" />
                        <p>اضف الى السلة</p>
                    </button>
                </div>
                <div class="carts-notes">
                    <div>
                        <img src="../images/svgs/card1-1.svg" alt="" />
                        <p>تسوق أمن</p>
                    </div>
                    <div>
                        <img src="../images/svgs/card2.svg" alt="" />

                        <p>اصلي ومضمون</p>
                    </div>
                    <div>
                        <img src="../images/svgs/card3.svg" alt="" />

                        <p>شحن سريع ومجاني</p>
                    </div>
                </div>
                <div class="divider"></div>
                <div class="page-share">
                    <button class="share">
                        <img src="../images/svgs/share.svg" alt="" />
                        <p>مشاركة</p>
                    </button>
                    <button class="favorite">
                        <img src="../images/svgs/favorite.svg" alt="" />
                        <p>المفضلة</p>
                    </button>
                    <button class="compare">
                        <img src="../images/svgs/compare.svg" alt="" />
                        <p>مقارنة</p>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div dir="rtl" class="book-description">
        <p>
            كتاب يتحدث عن بعض اسماء الله الحسنىوكيف نعيشها في حياتنا حرصالمؤلف أن
            يكون الكتاب مناسبا لمن هم متوسطي الثقافة ويكون ممناسبا للمحتاج و
            المريض و السليم
        </p>
    </div>

</main>

<!-- main end -->
<section class="container book-details-section">
    <h2>المواصفات</h2>
    <p><?= $bookInfo['description']; ?></p>
    <!-- <table class="table">
        <tbody class="table-body">
            <tr class="table-row">
                <th class="table-item">
                    رقم الصنف
                </th>
                <td class="table-item">
                    465531</td>

            </tr>

            <tr class="table-row">
                <th class="table-item">
                    رقم المصنع
                </th>
                <td class="table-item">
                    156
                </td>
            </tr>
            <tr class="table-row">
                <th class="table-item">
                    تاريخ النشر
                </th>
                <td class="table-item">
                    ‎2016‎‎
                </td>
            </tr>
            <tr class="table-row">
                <th class="table-item">
                    الناشر
                </th>
                <td class="table-item">
                    ‎دار الحضارة للنشر والتوزيع‎
                </td>
            </tr>
            <tr class="table-row">
                <th class="table-item">
                    عدد الصفحات
                </th>
                <td class="table-item">
                    ‎192‎‎
                </td>
            </tr>
            <tr class="table-row">
                <th class="table-item">
                    صيغة الكتاب
                </th>
                <td class="table-item">
                    غلاف ورقي
                </td>
            </tr>
            <tr class="table-row">
                <th class="table-item">
                    المؤلف
                </th>
                <td class="table-item">
                    ‎علي جابر الفيفي‎
                </td>
            </tr>
            <tr class="table-row">
                <th class="table-item">
                    وزن الشحن
                </th>
                <td class="table-item">
                    0.24
                </td>
            </tr>
        </tbody>
    </table> -->
</section>