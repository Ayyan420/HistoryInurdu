<?php   
$data['css'] = $css;
// var_dump($posts);
$this->load->view('frontend/layout/header_book' ,$data);

function get_month_name($num){
    if($num == '01'){
       return 'جنوری';
    }elseif ($num == '02') {
       return 'فروری';
    }elseif ($num == '03') {
       return 'مارچ';
    }elseif ($num == '04') {
       return 'اپریل';
    }elseif ($num == '05') {
       return 'مئ';
    }elseif ($num == '06') {
       return 'جون';
    }elseif ($num == '07') {
       return 'جولائ';
    }elseif ($num == '08') {
       return 'جولائ';
    }elseif ($num == '09') {
       return 'ستمبر';
    }elseif ($num == '10') {
       return 'اکتوبر';
    }elseif ($num == '11') {
       return 'نومبر ';
    }elseif ($num == '12') {
       return 'دسمبر';
    }
}

?>

    <section class="section1_bg_categories">
        <div class="overlay">
        </div>
        <div class="bg_main">
            <div class="bg_img"><a href="post.html"><img src="<?= base_url('assets/frontend') ?>/Images/IMG-20210312-WA0003.jpg" alt=""></a></div>
            <div class="center_text_categories">
                <h1><?php //$categories[0]->category ?></h1>
            </div>
        </div>
    </section>
    <section class="section2_categoeries">
        <div class="container">
            <div class="row justify-content-md-center row_section2_categoeries">
                <!-- <div class="center_categories"> -->
                <div class="col-sm-4 d-flex justify-content-center col_sidebar">
                <div class="right">
                    <div class="recipes_items_sidebar">
                        <div class="sidebar_recent_post">
                            <div class="heading_sidebar_22"><span>تازہ ترین پوسٹ
                                </span></div>
                            <?php foreach($recent_posts as $recent_post): ?>    
                            <a href="<?= base_url() ?>/book/<?= $recent_post->route_name ?>">
                                <div class="sidebar-items">
                                    <div class="left_recent_sidebar"><a href="<?= base_url() ?>/book/<?= $recent_post->route_name ?>"><img src="<?= base_url('uploads/admin/').$recent_post->image ?>" alt=""></a></div>
                                    <div class="right_recent_sidebar">
                                        <h2><?= $recent_post->title ?></h2><small><?php
                                                            $timestamp1 = strtotime($recent_post->modified_at);
                                                            $month1 = date('m', $timestamp1);
                                                            $year1 = date('Y', $timestamp1);
                                                            echo get_month_name($month1);
                                                            echo $year1; ?></small>
                                    </div>
                                </div>
                            </a>
                            <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="recipes_items_sidebar">
                        <div class="sidebar_recent_post">
                            <div class="heading_sidebar_2"><span>مشہور زمرے</span></div>
                            <?php foreach($popular_categories as $popular_categorie): ?>
                                <a href="<?= base_url() ?>/book/categorie/<?= $popular_categorie->route_name ?>">
                                    <div class="sidebar-items">
                                        <div class="left_recent_sidebar"><img src="<?= base_url('uploads/admin') ?>/<?= $popular_categorie->image ?>" alt=""></div>
                                        <div class="right_recent_sidebar">
                                            <h2><?= $popular_categorie->category ?></h2>
                                        </div>
                                    </div>
                                </a>
                                <?php endforeach ?>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="left">
                        <div class="left_main">
                            <?php if($posts){ ?>
                                <?php foreach($posts as $post): ?>
                                    <div><a href="<?= base_url() ?>/book/<?= $post->route_name ?>"><img src="<?= base_url('uploads/admin') ?>/<?= $post->image?>" alt=""></a>
                                        <h1><?=$post->title ?>
                                        </h1>
                                       
                                        <p><?php $str = word_limiter($post->body , 40);
                                            echo   strip_tags( $str) ; ?></p>
                                        <a href="<?= base_url() ?>/book/<?= $post->route_name ?>" class="download_now"> ڈاؤن لوڈ کریں</a>
                                    </div>
                                <?php endforeach; ?>
                            <?php }else{ ?>
                                
                             <div style="justify-content: center;
    align-items: center;
    display: flex;
}"><h2>کوئی پوسٹ نہیں ملی</h2></div>

                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </section>
    <section class="section4_load_more">
        <div class="container-fluid">
            <div class="section_load_more">
                <div class="left_main">
                    <div><a href="post.html"><img src="../Assets/Images/spain-Recovered.png" alt=""></a>
                        <h1>اسپین برآمد ہوا
                        </h1>
                        <div class="icons_count">
                            <i class="fas fa-eye">1.5K</i>
                            <i class="fa fa-heart">50</i>
                            <i class="fas fa-comments">2</i>
                        </div>
                        <p>چنگیز خان کی موت کے بعد اسکی سلطنت ایشیا میں صدیوں تک قایم رہی۔یہاں تک کہ 13ھرویں صدی عیسوی کے درمیاں میں منگول آپس کی خانہ جنگی میں تباہی کا شکار ہو کر مختلف چھوٹی چھو ٹی ریاستوں میں تقسیم ہو گے تھے۔
                        </p>
                        <a href="post.html" class="read_more">مزید پڑھیں
                        </a>
                    </div>
                    <div><a href="post.html"><img src="../Assets/Images/Ameer Taimoor Part 01 Thumbnail.png" alt=""></a>
                        <h1>امیر تیمور</h1>
                        <div class="icons_count">
                            <i class="fas fa-eye">1.5K</i>
                            <i class="fa fa-heart">50</i>
                            <i class="fas fa-comments">2</i>
                        </div>
                        <p>چنگیز خان کی موت کے بعد اسکی سلطنت ایشیا میں صدیوں تک قایم رہی۔یہاں تک کہ 13ھرویں صدی عیسوی کے درمیاں میں منگول آپس کی خانہ جنگی میں تباہی کا شکار ہو کر مختلف چھوٹی چھو ٹی ریاستوں میں تقسیم ہو گے تھے۔
                        </p>
                        <a href="post.html" class="read_more">مزید پڑھیں
                        </a>
                    </div>
                    <div><a href="post.html"><img src="../Assets/Images/Mongol Empire.jpg" alt=""></a>
                        <h1>منگول سلطنت
                        </h1>
                        <div class="icons_count">
                            <i class="fas fa-eye">1.5K</i>
                            <i class="fa fa-heart">50</i>
                            <i class="fas fa-comments">2</i>
                        </div>
                        <p>چنگیز خان کی موت کے بعد اسکی سلطنت ایشیا میں صدیوں تک قایم رہی۔یہاں تک کہ 13ھرویں صدی عیسوی کے درمیاں میں منگول آپس کی خانہ جنگی میں تباہی کا شکار ہو کر مختلف چھوٹی چھو ٹی ریاستوں میں تقسیم ہو گے تھے۔
                        </p>
                        <a href="post.html" class="read_more">مزید پڑھیں
                        </a>
                    </div>
                    <div><a href="post.html"><img src="../Assets/Images/spain-Recovered.png" alt=""></a>
                        <h1>اسپین برآمد ہوا
                        </h1>
                        <div class="icons_count">
                            <i class="fas fa-eye">1.5K</i>
                            <i class="fa fa-heart">50</i>
                            <i class="fas fa-comments">2</i>
                        </div>
                        <p>چنگیز خان کی موت کے بعد اسکی سلطنت ایشیا میں صدیوں تک قایم رہی۔یہاں تک کہ 13ھرویں صدی عیسوی کے درمیاں میں منگول آپس کی خانہ جنگی میں تباہی کا شکار ہو کر مختلف چھوٹی چھو ٹی ریاستوں میں تقسیم ہو گے تھے۔
                        </p>
                        <a href="post.html" class="read_more">مزید پڑھیں
                        </a>
                    </div>
                    <div><a href="post.html"><img src="../Assets/Images/Ameer Taimoor Part 01 Thumbnail.png" alt=""></a>
                        <h1>امیر تیمور</h1>
                        <div class="icons_count">
                            <i class="fas fa-eye">1.5K</i>
                            <i class="fa fa-heart">50</i>
                            <i class="fas fa-comments">2</i>
                        </div>
                        <p>چنگیز خان کی موت کے بعد اسکی سلطنت ایشیا میں صدیوں تک قایم رہی۔یہاں تک کہ 13ھرویں صدی عیسوی کے درمیاں میں منگول آپس کی خانہ جنگی میں تباہی کا شکار ہو کر مختلف چھوٹی چھو ٹی ریاستوں میں تقسیم ہو گے تھے۔
                        </p>
                        <a href="post.html" class="read_more">مزید پڑھیں
                        </a>
                    </div>
                    <div><a href="post.html"><img src="../Assets/Images/Mongol Empire.jpg" alt=""></a>
                        <h1>منگول سلطنت
                        </h1>
                        <div class="icons_count">
                            <i class="fas fa-eye">1.5K</i>
                            <i class="fa fa-heart">50</i>
                            <i class="fas fa-comments">2</i>
                        </div>
                        <p>چنگیز خان کی موت کے بعد اسکی سلطنت ایشیا میں صدیوں تک قایم رہی۔یہاں تک کہ 13ھرویں صدی عیسوی کے درمیاں میں منگول آپس کی خانہ جنگی میں تباہی کا شکار ہو کر مختلف چھوٹی چھو ٹی ریاستوں میں تقسیم ہو گے تھے۔
                        </p>
                        <a href="post.html" class="read_more">مزید پڑھیں
                        </a>
                    </div>
                    <div><a href="post.html"><img src="../Assets/Images/spain-Recovered.png" alt=""></a>
                        <h1>اسپین برآمد ہوا
                        </h1>
                        <div class="icons_count">
                            <i class="fas fa-eye">1.5K</i>
                            <i class="fa fa-heart">50</i>
                            <i class="fas fa-comments">2</i>
                        </div>
                        <p>چنگیز خان کی موت کے بعد اسکی سلطنت ایشیا میں صدیوں تک قایم رہی۔یہاں تک کہ 13ھرویں صدی عیسوی کے درمیاں میں منگول آپس کی خانہ جنگی میں تباہی کا شکار ہو کر مختلف چھوٹی چھو ٹی ریاستوں میں تقسیم ہو گے تھے۔
                        </p>
                        <a href="post.html" class="read_more">مزید پڑھیں
                        </a>
                    </div>
                    <div><a href="post.html"><img src="../Assets/Images/Ameer Taimoor Part 01 Thumbnail.png" alt=""></a>
                        <h1>امیر تیمور</h1>
                        <div class="icons_count">
                            <i class="fas fa-eye">1.5K</i>
                            <i class="fa fa-heart">50</i>
                            <i class="fas fa-comments">2</i>
                        </div>
                        <p>چنگیز خان کی موت کے بعد اسکی سلطنت ایشیا میں صدیوں تک قایم رہی۔یہاں تک کہ 13ھرویں صدی عیسوی کے درمیاں میں منگول آپس کی خانہ جنگی میں تباہی کا شکار ہو کر مختلف چھوٹی چھو ٹی ریاستوں میں تقسیم ہو گے تھے۔
                        </p>
                        <a href="post.html" class="read_more">مزید پڑھیں
                        </a>
                    </div>
                    <div><a href="post.html"><img src="../Assets/Images/Mongol Empire.jpg" alt=""></a>
                        <h1>منگول سلطنت
                        </h1>
                        <div class="icons_count">
                            <i class="fas fa-eye">1.5K</i>
                            <i class="fa fa-heart">50</i>
                            <i class="fas fa-comments">2</i>
                        </div>
                        <p>چنگیز خان کی موت کے بعد اسکی سلطنت ایشیا میں صدیوں تک قایم رہی۔یہاں تک کہ 13ھرویں صدی عیسوی کے درمیاں میں منگول آپس کی خانہ جنگی میں تباہی کا شکار ہو کر مختلف چھوٹی چھو ٹی ریاستوں میں تقسیم ہو گے تھے۔
                        </p>
                        <a href="post.html" class="read_more">مزید پڑھیں
                        </a>
                    </div>
                    <div><a href="post.html"><img src="../Assets/Images/Ameer Taimoor Part 01 Thumbnail.png" alt=""></a>
                        <h1>امیر تیمور</h1>
                        <div class="icons_count">
                            <i class="fas fa-eye">1.5K</i>
                            <i class="fa fa-heart">50</i>
                            <i class="fas fa-comments">2</i>
                        </div>
                        <p>چنگیز خان کی موت کے بعد اسکی سلطنت ایشیا میں صدیوں تک قایم رہی۔یہاں تک کہ 13ھرویں صدی عیسوی کے درمیاں میں منگول آپس کی خانہ جنگی میں تباہی کا شکار ہو کر مختلف چھوٹی چھو ٹی ریاستوں میں تقسیم ہو گے تھے۔
                        </p>
                        <a href="post.html" class="read_more">مزید پڑھیں
                        </a>
                    </div>
                    <div><a href="post.html"><img src="../Assets/Images/spain-Recovered.png" alt=""></a>
                        <h1>اسپین برآمد ہوا
                        </h1>
                        <div class="icons_count">
                            <i class="fas fa-eye">1.5K</i>
                            <i class="fa fa-heart">50</i>
                            <i class="fas fa-comments">2</i>
                        </div>
                        <p>چنگیز خان کی موت کے بعد اسکی سلطنت ایشیا میں صدیوں تک قایم رہی۔یہاں تک کہ 13ھرویں صدی عیسوی کے درمیاں میں منگول آپس کی خانہ جنگی میں تباہی کا شکار ہو کر مختلف چھوٹی چھو ٹی ریاستوں میں تقسیم ہو گے تھے۔
                        </p>
                        <a href="post.html" class="read_more">مزید پڑھیں
                        </a>
                    </div>
                    <div><a href="post.html"><img src="../Assets/Images/Ameer Taimoor Part 01 Thumbnail.png" alt=""></a>
                        <h1>امیر تیمور</h1>
                        <div class="icons_count">
                            <i class="fas fa-eye">1.5K</i>
                            <i class="fa fa-heart">50</i>
                            <i class="fas fa-comments">2</i>
                        </div>
                        <p>چنگیز خان کی موت کے بعد اسکی سلطنت ایشیا میں صدیوں تک قایم رہی۔یہاں تک کہ 13ھرویں صدی عیسوی کے درمیاں میں منگول آپس کی خانہ جنگی میں تباہی کا شکار ہو کر مختلف چھوٹی چھو ٹی ریاستوں میں تقسیم ہو گے تھے۔
                        </p>
                        <a href="post.html" class="read_more">مزید پڑھیں
                        </a>
                    </div>
                </div>
            </div>
            <div class="load_more" style="display: none;">
                <a href="#" id="js-loadMore">مزید لوڈ کریں
                </a>
            </div>
        </div>
    </section>
    <?php $this->load->view('frontend/layout/footer') ?>
