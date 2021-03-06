<?php   
$data['css'] = $css;
$this->load->view('frontend/layout/header_book' ,$data);


$timestamp = strtotime($post->modified_at);
$date = date('m', $timestamp);
$time = date('Gi.s', $timestamp);
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
    <section class="section1_bg_posts">
        <div class="overlay">
        </div>
        <div class="bg_main">
            <div class="bg_img"><img src="../Assets/Images/IMG-20210312-WA0003.jpg" alt=""></div>
            <div class="center_text_posts">
                <h1><?= $categorie[0]->category ?> </h1>
            </div>
        </div>
    </section>
    <section class="section_posts">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-sm-8 d-flex justify-content-center">
                    <div class="left_main">
                        <div class="post_heading">
                            <div class="pre_title">
                            <h5><?= get_month_name($date);  ?> <?=  date('d', $timestamp); ?> ، <?=  date('Y', $timestamp); ?> </h5>
                                <?php 
                                    $index = count($categorie);
                                    $index2 = count($categorie);
                                    while($index) : ?>
                                        <a href="<?= base_url() ?>/categorie/<?= $categorie[--$index2]->route_name ?>"> / <?= $categorie[--$index]->category ?></a>
                                    <?php  endwhile ?> 
                            </div>
                            <h1> <?= $post->title ?></h1>

                            <div class="icons_count" style="display:none">
                                <i class="fas fa-eye">1.5K</i>
                                <i class="fa fa-heart">50</i>
                                <i class="fas fa-comments">2</i>
                            </div>
                        </div>
                        <div class="image_post">
                            <img src="<?= base_url('uploads/admin') ?>/<?= $post->image ?>" alt="">
                        </div>
                        <div class="row">
                            <div class="desp_post">
                                <?= $post->body ?>
                                <a href="<?= base_url('uploads/books/').$post->book_file ?>" class=" download_button"><i class="fa fa-download pr-3"></i> ڈاؤن لوڈ</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /*** sidebar column *** / -->
                <div class="col-sm-4 d-flex justify-content-center col_sidebar">
                <section class="right_bar1">
                        <div class="recipes_items_sidebar">
                            <div class="sidebar_recent_post">
                                <div class="heading_sidebar_2"><span>تازہ ترین کتابیں
                                    </span></div>
                                    <?php for($i=0; $i<2;$i++): ?>    
                                        <a href="<?= base_url() ?>/book/<?= $recent_posts[$i]->route_name ?>">
                                            <div class="sidebar-items">
                                                <div class="left_recent_sidebar"><a href="<?= base_url() ?>/book/<?= $recent_posts[$i]->route_name ?>"><img src="<?= base_url('uploads/admin') ?>/<?= $recent_posts[$i]->image ?>" alt=""></a></div>
                                                <div class="right_recent_sidebar">
                                                    <h2><?= $recent_posts[$i]->title ?></h2><small>
                                                    <?php
                                                            $timestamp1 = strtotime($recent_posts[$i]->modified_at);
                                                            $month1 = date('m', $timestamp1);
                                                            $year1 = date('Y', $timestamp1);
                                                            echo get_month_name($month1);
                                                            echo $year1;
                                                     ?></small>
                                                </div>
                                            </div>
                                        </a>
                                        <?php endfor ?>
                            </div>
                        </div>
                    </section>
                    <section class="right_bar2">
                        <div class="recipes_items_sidebar ">
                            <div class="sidebar_recent_post">
                                <div class="heading_sidebar_2"><span>مشہور زمرے</span></div>
                                <?php foreach($popular_categories as $popular_categorie): ?>
                                <a href="<?= base_url() ?>/categorie/<?= $popular_categorie->route_name ?>">
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
                    </section>
                </div>
            </div>
        </div>
    </section>
   <!--  <section class="recent_bottom_posts">
        <div class="container">
            <h1 class="text-center">حالیہ پوسٹس
            </h1>
            <img src="../Assets/Images/bar_22222-01.svg" alt="svg" class="bar">

            <div class="row justify-content-md-center">
                <div class="col-sm-4 d-flex justify-content-center">
                    <div class="recipes_items_main">
                        <div class="recipes_items">
                            <figure class="snip1543">
                                <img src="../Assets/Images/Mongol Empire.jpg" />
                                <figcaption>
                                    
                                </figcaption>
                                <a href="post_4.html">
                                </a>
                            </figure>
                        </div>
                        <div class="recipes_items">
                            <h6>منگول سلطنت</h6>
                            <p>قطب شاہی سلطنت کا بانی سلطان قلی شاہ تھا۔ سلطان قلی شاہ بھی عادل شاہی سلطنت کے بانی یوسف خان عادل کی طرح ایران سے جان بچا کر دکن آیا اور اپنی اعلیٰ صلاحیتوں ، قابلیت ، وفاداری اور سخت کوشی کی 
                            </p>
                            <a href="post_4.html" class="link_color">
                                مزید پڑھیں
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 d-flex justify-content-center">
                    <div class="recipes_items_main">
                        <div class="recipes_items">
                            <figure class="snip1543">
                                <img src="../Assets/Images/Ain Jaloot.png" />
                                <figcaption>
                                </figcaption>
                                <a href="post_3.html"></a>
                            </figure>
                        </div>
                        <div class="recipes_items">
                            <h6>این جلوت سلطنت</h6>
                            <p>قطب شاہی سلطنت کا بانی سلطان قلی شاہ تھا۔ سلطان قلی شاہ بھی عادل شاہی سلطنت کے بانی یوسف خان عادل کی طرح ایران سے جان بچا کر دکن آیا اور اپنی اعلیٰ صلاحیتوں ، قابلیت ، وفاداری اور سخت کوشی کی </p>
                            <a href="post_3.html" class="link_color">مزید پڑھیں
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 d-flex justify-content-center">
                    <div class="recipes_items_main">
                        <div class="recipes_items">
                            <figure class="snip1543">
                                <img src="../Assets/Images/Seljuq Empire.png" />
                                <figcaption>
                                </figcaption>
                                <a href="post_6.html"></a>
                            </figure>
                        </div>
                        <div class="recipes_items">
                            <h6>سیلجوکی سلطنت
                            </h6>
                            <p>قطب شاہی سلطنت کا بانی سلطان قلی شاہ تھا۔ سلطان قلی شاہ بھی عادل شاہی سلطنت کے بانی یوسف خان عادل کی طرح ایران سے جان بچا کر دکن آیا اور اپنی اعلیٰ صلاحیتوں ، قابلیت ، وفاداری اور سخت کوشی کی </p>
                            <a href="post_6.html" class="link_color">مزید پڑھیں
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $(".download").click(function(){
                $.ajax({url: "<?= base_url().'book_down_count/'.$post->id ?>", success: function(result){
                        $("#div1").html(result);
                    }});
            });
        });
    </script>
    <?php $this->load->view('frontend/layout/footer') ?>