<!-- start main -->
<main>
    <div class="checkout-carts">
        <div class="checkout-cart active">
            <form>
                <h1 class="login-title">البيانات الشخصية</h1>

                <div class="two-input">
                    <div class="input-wrap">
                        <input name="number" type="tel" />
                        <label for="name">رقم الجوال</label>
                    </div>
                    <div class="input-wrap">
                        <label for="">رمز البلد</label>
                        <input type="password" name="password" />
                    </div>
                </div>

                <div class="input-wrap">
                    <label for="password">الاسم الاول</label>
                    <input type="password" name="password" />
                </div>

                <div class="input-wrap">
                    <label for="password">اسم العائله</label>
                    <input type="password" name="password" />
                </div>

                <div class="input-wrap">
                    <label for="password">البريد الالكتروني</label>
                    <input type="password" name="password" />
                </div>

                <div class="input-wrap">
                    <label for="password">كلمة السر</label>
                    <input type="password" name="password" />
                </div>
            </form>
        </div>
        <div class="checkout-cart">
            <form>
                <h1 class="login-title">بيانات الدفع</h1>
                <div class="input-wrap">
                    <label for="password">الاسم الاول</label>
                    <input type="password" name="password" />
                </div>

                <div class="input-wrap">
                    <label for="password">اسم العائله</label>
                    <input type="password" name="password" />
                </div>

                <div class="input-wrap">
                    <label for="password">البريد الالكتروني</label>
                    <input type="password" name="password" />
                </div>
                <div class="input-wrap">
                    <label for="date">تاريخ انتهاء البطاقة</label>
                    <input type="date" name="date" />
                </div>

                <div class="two-input">
                    <div class="input-wrap">
                        <input name="number" type="tel" />
                        <label for="name">رقم البطاقة</label>
                    </div>
                    <div class="input-wrap">
                        <label for="">CV2</label>
                        <input type="password" name="password" />
                    </div>
                </div>
            </form>
        </div>
        <div class="checkout-cart">
            <h1 class="login-title" style="width: 100%;margin-bottom: 2rem;">المجموع</h1>



            <div class="total-price">

                <div>
                    <div class="total-price-row total-row">
                        <p>المجموع</p>
                        <p id="total">0</p>
                    </div>
                    <div class="total-price-row shiping-row">
                        <p>تكاليف الشحن</p>
                        <p id="shipping-price">مجاني</p>
                    </div>
                    <div class="total-price-row final-total-row">
                        <p>المجموع الكلي</p>
                        <p id="final-total-price">0</p>
                    </div>
                </div>
            </div>
            <p style="font-size: 1.5rem;margin-top: 2rem;">اضغط على التالي لاتمام العمليه</p>

        </div>

        <div class="checkout-cart">
            <p>تمت العملية بنجاح</p>
            <p>اضغط على زر انهاء لإنهاء العمليه</p>
            <a id="progress-done" href="index" onclick="clear_storage()" class="btn">انهاء</a>
        </div>
    </div>
    <div class="container progress">
        <div id="progress">
            <div id="progress-bar"></div>
            <ul id="progress-num">
                <li class="step active">1</li>
                <li class="step">2</li>
                <li class="step">3</li>
                <li class="step">4</li>
            </ul>
        </div>
        <div class="btns">
            <button id="progress-prev" class="btn" disabled>السابق</button>
            <button id="progress-next" class="btn">التالي</button>
        </div>
    </div>
</main>