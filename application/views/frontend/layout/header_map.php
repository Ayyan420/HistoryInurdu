<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="initial-scale=1.0, width=device-width">

    <meta name="description" content="#HistoryInUrdu”. At this Platform you got Knowledge about ” History of Islam” ,History of Culture ,History of Sub Continent and Others, History about Famous ...">

    <meta name="robots" content="index, follow">

    <meta name="og:title" property="og:title" content="Your Awesome Open Graph Title">

    <meta name="keywords" content="HTML, CSS, JavaScript">

    <meta name="author" content="History With Sohail">

    <!-- <meta http-equiv="refresh" content="120"> -->

    <!-- <link rel="canonical" href="http://example.com/" /> -->

    <link rel="stylesheet" type="text/css" href="<?= base_url("assets/frontend") ?>/Css/<?= $css ?>">

       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/imagehover.css/2.0.0/css/imagehover.min.css" integrity="sha512-SYBBAnJsPEzSQ/kBqkR/9krJ+EUgF624c8uaMBww1Q26pnCw5k7zVmtc48BfXjZ9MRNNBveIdhx/na1xRLWgjw==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/spinkit/2.0.1/spinkit.min.css" integrity="sha512-kRYkjiYH/VXxoiaDK2oGNMKIi8VQVfie1lkYGX3kmfzWNR2kfaF5ze0885W3/eE6lIiURBsZA91M/WNvCajHMw==" crossorigin="anonymous" />
    <!--  <link rel="stylesheet" media="screen" href="https://fontlibrary.org//face/nafees-nastaleeq" type="text/css"/> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" integrity="sha512-P5MgMn1jBN01asBgU0z60Qk4QxiXo86+wlFahKrsQf37c9cro517WzVSPPV1tDKzhku2iJ2FVgL67wG03SGnNA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css" integrity="sha512-X/RSQYxFb/tvuz6aNRTfKXDnQzmnzoawgEQ4X8nZNftzs8KFFH23p/BA6D2k0QCM4R0sY1DEy9MIY9b3fwi+bg==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css" integrity="sha512-f28cvdA4Bq3dC9X9wNmSx21rjWI+5piIW/uoc2LuQ67asKxfQjUow2MkcCNcfJiaLrHcGbed1wzYe3dlY4w9gA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w==" crossorigin="anonymous" />
    
    
    <?php if(isset($link)){echo $link;} ?>
    <title>

        History In Urdu | ہوم </title>

</head>



<body>

    <header class="header_area">

        <div class="main_header_area animated">

            <div class="container-fluid">

                <nav id="navigation1" class="navigation">

                    <!-- Logo Area Start -->

                    <div class="nav-header">

                        <a class="nav-brand" href="<?= base_url() ?>"><img src="<?= base_url("assets/frontend") ?>/Images/Logo.png" alt=""></a>

                        <div class="nav-toggle"></div>

                    </div>

                    <!-- Search panel Start -->

                    <div class="nav-search">

                        <div class="nav-search-button">

                            <i class="nav-search-icon"></i>

                        </div>

                        <form action="<?= base_url('maps/search') ?>" meathod="POST">


                            <div class="nav-search-inner">
                                <input type="search" name="search" placeholder="یہاں تلاش کریں">
                                 <input type="submit" value="Submit" class="submit_btn">
                            </div>

                        </form>

                    </div>

                    <!-- Main Menus Wrapper -->

                    <div class="nav-menus-wrapper">

                    <ul class="nav-menu align-to-right">
                        <li>
                            <a href="<?= base_url() ?>">ہوم </a>
                        </li>
                        <li>
                            <a href="
                                <?= base_url() ?>/categorie/history_of_islam">تاریخ اسلام
                            </a>
                            <ul class="nav-dropdown">
                                <li>
                                    <a href="
                                        <?= base_url() ?>/categorie/history_of_islam/life_of_Muhammad">حیات محمد
                                    </a>
                                </li>
                                <li>
                                    <a href="
                                        <?= base_url() ?>/categorie/history_of_islam/stories_of_prophets">حقصص الانبياء
                                    </a>
                                </li>
                                <li>
                                    <a href="
                                        <?= base_url() ?>/categorie/history_of_islam/life_of_ashaab">  حیاتِ صحابہ 
                                    </a>
                                </li>
                                <li>
                                    <a href="
                                        <?= base_url() ?>/categorie/history_of_islam/ahle_bait">اہلِ بیت  
                                    </a>
                                </li>
                                <li>
                                    <a href="
                                        <?= base_url() ?>/categorie/history_of_islam/caliphs_of_islam">  خلافتِ راشدہ 
                                    </a>
                                </li>
                                
                                <li>
                                    <a href="
                                        <?= base_url() ?>/categorie/history_of_islam/tabiun_of_islam">  تابعين 
                                    </a>
                                </li>
                                
                                <li>
                                    <a href="
                                        <?= base_url() ?>/categorie/history_of_islam/banu_umayya"> بنو امیہ  
                                    </a>
                                </li>
                                <li>
                                    <a href="
                                        <?= base_url() ?>/categorie/history_of_islam/banu_abbas">  بنو عباس  
                                    </a>
                                </li>
                                <li>
                                    <a href="
                                        <?= base_url() ?>/categorie/history_of_islam/fatimid_caliphate">  فاطمی خلافت 
                                    </a>
                                </li>
                                <li>
                                    <a href="
                                        <?= base_url() ?>/categorie/history_of_islam/khilafat_e_andalus">  خلافتِ اُندلس  
                                    </a>
                                </li>
                                <li>
                                    <a href="
                                        <?= base_url() ?>/categorie/history_of_islam/ottoman_empire">  خلافتِ عثمانیہ 
                                    </a>
                                </li>
                                <li>
                                    <a href="
                                        <?= base_url() ?>/categorie/history_of_islam/famous_personalities">مشہور شخصیات  
                                    </a>
                                </li>
                                <li>
                                    <a href="
                                        <?= base_url() ?>/categorie/history_of_islam/islamic_wars"> اسلامی جنگی 
                                    </a>
                                </li>
                                <li>
                                    <a href="
                                        <?= base_url() ?>/categorie/history_of_islam/muslim_kingdoms"> مسلم بادشاہتیں 
                                    </a>
                                    <ul class="nav-dropdown">
                                        <li>
                                            <a href="
                                                <?= base_url() ?>/categorie/history_of_islam/muslim_kingdoms/ayubian_empire">ایوبی سلطنت
                                            </a>
                                        </li>
                                        <li>
                                            <a href="
                                                <?= base_url() ?>/categorie/history_of_islam/muslim_kingdoms/zangi_empire">زنگی سلطنت
                                            </a>
                                        </li>
                                        <li>
                                            <a href="
                                                <?= base_url() ?>/categorie/history_of_islam/muslim_kingdoms/seljuk_empire">سلجوقی سلطنت
                                            </a>
                                        </li>
                                        <li>
                                            <a href="
                                                <?= base_url() ?>/categorie/history_of_islam/muslim_kingdoms/mali_empire"> مالی سلطنت 
                                            </a>
                                            <ul class="nav-dropdown">
                                                <li>
                                                    <a href="
                                                        <?= base_url() ?>/categorie/history_of_islam/muslim_kingdoms/mali_empire/boya_empire">بویہ سلطنت
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="
                                                        <?= base_url() ?>/categorie/history_of_islam/muslim_kingdoms/mali_empire/caliphate_of_cordoba">خلافتِ قرطبہ
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="
                                                        <?= base_url() ?>/categorie/history_of_islam/muslim_kingdoms/mali_empire/samanid">دولتِ عثمانیہ
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="
                                                        <?= base_url() ?>/categorie/history_of_islam/muslim_kingdoms/mali_empire/saffarid_dynasty">صفاری خاندان
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="
                                                        <?= base_url() ?>/categorie/history_of_islam/muslim_kingdoms/mali_empire/crimean_khanate">خانان کریمیا
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="
                                                <?= base_url() ?>/categorie/history_of_islam/muslim_kingdoms/mamluk_empire">مملوک سلطنت
                                            </a>
                                        </li>
                                        <li>
                                            <a href="
                                                <?= base_url() ?>/categorie/history_of_islam/muslim_kingdoms/ghaznavi_empire">غزنوی سلطنت
                                            </a>
                                        </li>
                                        <li>
                                            <a href="
                                                <?= base_url() ?>/categorie/history_of_islam/muslim_kingdoms/timurid_empire">تیموری سلطنت
                                            </a>
                                        </li>
                                        <li>
                                            <a href="
                                                <?= base_url() ?>/categorie/history_of_islam/muslim_kingdoms/safavid_empire"> صفوی سلطنت
                                            </a>
                                        </li>
                                        <li>
                                            <a href="
                                                <?= base_url() ?>/categorie/history_of_islam/muslim_kingdoms/khwarezmian_empire"> خوارزمی سلطنت 
                                            </a>
                                        </li>
                                        <li>
                                            <a href="
                                                <?= base_url() ?>/categorie/history_of_islam/muslim_kingdoms/golden_horde"> اردوئے ذریں 
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="
                                <?= base_url() ?>/categorie/history_of_subcontinent">تاریخ برصغیر
                            </a>
                            <ul class="nav-dropdown">
                                <li>
                                    <a href="
                                        <?= base_url() ?>/categorie/history_of_subcontinent/history_of_pakistan">تاریخِ پاکستان 
                                    </a>
                                </li>
                                <li>
                                    <a href="
                                        <?= base_url() ?>/categorie/history_of_subcontinent/muslim_governments">مسلم حکومتیں 
                                    </a>
                                    <ul class="nav-dropdown">
                                        <li>
                                            <a href="
                                                <?= base_url() ?>/categorie/history_of_subcontinent/muslim_governments/mughal_empire">مغلیہ سلطنت
                                            </a>
                                        </li>
                                        <li>
                                            <a href="
                                                <?= base_url() ?>/categorie/history_of_subcontinent/muslim_governments/sultanate_of_delhi">دہلی سلطنت
                                            </a>
                                        </li>
                                        <li>
                                            <a href="
                                                <?= base_url() ?>/categorie/history_of_subcontinent/muslim_governments/ghoriya_empire">غوری سلطنت
                                            </a>
                                        </li>
                                        <li>
                                            <a href="
                                                <?= base_url() ?>/categorie/history_of_subcontinent/muslim_governments/family_dynasty">خاندانِ غلاماں
                                            </a>
                                        </li>
                                        <li>
                                            <a href="
                                                <?= base_url() ?>/categorie/history_of_subcontinent/muslim_governments/khilji_family">خلجی خاندان
                                            </a>
                                        </li>
                                        <li>
                                            <a href="
                                                <?= base_url() ?>/categorie/history_of_subcontinent/muslim_governments/tughlaq_family">تغلق خاندان
                                            </a>
                                        </li>
                                        <li>
                                            <a href="
                                                <?= base_url() ?>/categorie/history_of_subcontinent/muslim_governments/kingdom_of_mysore">سلطنتِ خداداد میسور
                                            </a>
                                        </li>
                                        <li>
                                            <a href="
                                                <?= base_url() ?>/categorie/history_of_subcontinent/muslim_governments/syed_family">سید خاندان
                                            </a>
                                        </li>
                                        <li>
                                            <a href="
                                                <?= base_url() ?>/categorie/history_of_subcontinent/muslim_governments/lodhi_empire">لودھی خاندان
                                            </a>
                                        </li>
                                        <li>
                                            <a href="
                                                <?= base_url() ?>/categorie/history_of_subcontinent/muslim_governments/suri_empire">سلطنتِ سور
                                            </a>
                                        </li>
                                        <li>
                                            <a href="
                                                <?= base_url() ?>/categorie/history_of_subcontinent/muslim_governments/durrani_empire">درانی سلطنت 
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="
                                        <?= base_url() ?>/categorie/history_of_subcontinent/non_muslim_governments">غیر مسلم حکومتیں
                                    </a>
                                    <ul class="nav-dropdown">
                                        <li>
                                            <a href="
                                                <?= base_url() ?>/categorie/history_of_subcontinent/non_muslim_governments/east_india_company">ایسٹ انڈیا
                                            </a>
                                        </li>
                                        <li>
                                            <a href="
                                                <?= base_url() ?>/categorie/history_of_subcontinent/non_muslim_governments/ashoka_empire">اشوکا سلطنت
                                            </a>
                                        </li>
                                        <li>
                                            <a href="
                                                <?= base_url() ?>/categorie/history_of_subcontinent/non_muslim_governments/gupta_empire">گپتا سلطنت
                                            </a>
                                        </li>
                                        <li>
                                            <a href="
                                                <?= base_url() ?>/categorie/history_of_subcontinent/non_muslim_governments/maurya_empire">موریہ سلطنت
                                            </a>
                                        </li>
                                        <li>
                                            <a href="
                                                <?= base_url() ?>/categorie/history_of_subcontinent/non_muslim_governments/maratha_empire">مرہٹہ سلطنت
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="
                                <?= base_url() ?>/categorie/history_of_world">تارِیخِ عالَم
                            </a>
                            <ul class="nav-dropdown">
                                <li>
                                    <a href="
                                        <?= base_url() ?>/categorie/history_of_world/mongol_empire">منگول سلطنت
                                    </a>
                                    <ul class="nav-dropdown">
                                        <li>
                                            <a href="
                                                <?= base_url() ?>/categorie/history_of_world/mongol_empire/el_khani_empire">ایل خانی سلطنت
                                            </a>
                                        </li>
                                        <li>
                                            <a href="
                                                <?= base_url() ?>/categorie/history_of_world/mongol_empire/chughtai_empire">چغتائی سلطنت
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="
                                        <?= base_url() ?>/categorie/history_of_world/yuan_family"> یو آن سلطنت 
                                    </a>
                                </li>
                                <li>
                                    <a href="
                                        <?= base_url() ?>/categorie/history_of_world/roman_empire">رومی سلطنت
                                    </a>
                                </li>
                                <li>
                                    <a href="
                                        <?= base_url() ?>/categorie/history_of_world/portuguese_empire">پرتگیزی سلطنت
                                    </a>
                                </li>
                                <li>
                                    <a href="
                                        <?= base_url() ?>/categorie/history_of_world/sassanid_empire">ساسانی سلطنت
                                    </a>
                                </li>
                                <li>
                                    <a href="
                                        <?= base_url() ?>/categorie/history_of_world/macedonia_empire">مقدونیای سلطنت
                                    </a>
                                </li>
                                <li>
                                    <a href="
                                        <?= base_url() ?>/categorie/history_of_world/hunnic_empire">ہن سلطنت
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?= base_url() ?>/book/categorie/history_books">کتب تاریخ </a>
                            <ul class="nav-dropdown">
                                <li>
                                    <a href="<?= base_url() ?>/book/categorie/history_books/islamic_books">اسلامی کتابیں </a>
                                    <ul class="nav-dropdown">
                                        <li>
                                            <a href="<?= base_url() ?>/book/categorie/history_books/islamic_books/history_of_Islam">تاریخِ اسلام</a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url() ?>/book/categorie/history_books/islamic_books/world_history">تاریخِ عالم</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="<?= base_url() ?>/book/categorie/history_books/history_of_pakistan">  تاریخِ پاکستان </a>
                                </li>
                                <li>
                                    <a href="<?= base_url() ?>/book/categorie/history_books/urdu_novel">اردو ناول</a>
                                </li>
                                <li>
                                    <a href="<?= base_url() ?>/book/categorie/history_books/autobiography">آپ بیتی</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?= base_url() ?>/maps">نقشہ</a>
                        </li>
                        <li>
                            <a href="<?= base_url() ?>/blog">بلاگ</a>
                        </li>
                        <li>
                            <a href="<?= base_url() ?>/contact"> رابطہ کریں</a>
                        </li>
                    </ul>

                    </div>

                </nav>

            </div>

        </div>

    </header>
