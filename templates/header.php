<div class="header">
    <div class="large_container">
        <div class="header_inner">
            <div class="main_logo">
                <?php if (strpos($_SERVER['SCRIPT_FILENAME'], 'index.php') == false) : ?>
                    <a href="index.php">
                    <?php endif ?>
                    <img src="css/images/logo.svg" alt="" title="" width="55" height="63" />
                    <span class="logo_text">ՀԱՅ<span>ՀԵՂԻՆԱԿ</span></span>
                    <?php if (strpos($_SERVER['SCRIPT_FILENAME'], 'index.php') == false) : ?>
                    </a>
                <?php endif ?>
            </div>
            <div class="header_block">
                <div class="menu_block">
                    <div class="menu_inner">
                        <ul class="main_menu">
                            <li>
                                <a href="" class="submenu_btn icon_down">Փաստաթղթեր</a>
                                <ul class="submenu_list">
                                    <li><a href="">Վարձատրության բաշխման կարգը</a></li>
                                    <li><a href="">Կանոնադրություն</a></li>
                                    <li><a href="#">Մինիմալ դրույքաչափեր</a></li>
                                    <li><a href="">Չպահանջված հոնորարների կանոններ</a></li>
                                    <li><a href="">Անդամավճարների չափի մասին</a></li>
                                    <li><a href="">Գրանցման կարգ</a></li>
                                    <li><a href="">Վարչական ծախսերի բաշխումը</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="" class="submenu_btn icon_down">Իրավատերերին</a>
                                <ul class="submenu_list">
                                    <li><a href="">Submenu Item</a></li>
                                    <li><a href="">Submenu Item</a></li>
                                    <li><a href="">Submenu Item</a></li>
                                    <li><a href="">Submenu Item</a></li>
                                    <li><a href="">Submenu Item</a></li>
                                    <li><a href="">Submenu Item</a></li>
                                    <li><a href="">Submenu Item</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="" class="submenu_btn icon_down">Օգտագործողներ</a>
                                <ul class="submenu_list">
                                    <li><a href="">Հեղինակներին</a></li>
                                    <li><a href="">Ժառանգներին</a></li>
                                    <li><a href="">Ի պահ վերցնելը</a></li>
                                    <li><a href="" class="submenu_btn icon_down">Մեր մասին</a>
                                        <ul class="submenu_list">
                                            <li><a href="">Մեր պատմությունը</a></li>
                                            <li><a href="">Ղեկավարություն</a></li>
                                            <li><a href="">Անձնակազմ</a></li>
                                            <li><a href="">Կառուցվածք</a></li>
                                            <li><a href="">Գործընկերներ</a></li>
                                            <li><a href="">Տարեկան հաշվետվություն</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="videoGallery.php">Տեսադարան</a></li>
                            <li class="selected"><a href="news.php">Նորություններ</a></li>
                            <li><a href="contact.php">Հետադարձ կապ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="lg_block drop_block">
                    <button class="drop_btn icon_down" aria-label="կայքի լեզու">Հայ</button>
                    <div class="drop_inner drop_list">
                        <ul>
                            <li class="selected"><a href="#">AM</a></li>
                            <li><a href="#">RU</a></li>
                            <li><a href="#">EN</a></li>
                        </ul>
                    </div>
                </div>
                <div class="search_block">
                    <form class="search_form">
                        <label class="search_field">
                            <input type="text" name="search" autocomplete="off" maxlength="200" placeholder="Փնտրել" aria-label="Փնտրել" />
                        </label>
                        <button class="search_btn icon_search" type="submit" aria-label="поиск"></button>
                    </form>
                </div>
            </div>
            <button class="menu_btn" aria-label="mobile menu"><span></span></button>
        </div>
    </div>
</div>