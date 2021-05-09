<?php   
$data['css'] = $css;
$this->load->view('frontend/layout/header_map' ,$data);
//    echo '<pre>';
//         var_dump($popular_categories);
//         echo '</pre>';
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
            <div class="bg_img"><img src="<?= base_url('assets/frontend') ?>/Images/IMG-20210312-WA0003.jpg" alt=""></div>
            <div class="center_text_posts">
                <h1> Maps</h1>
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
                               
                                
                            </div>
                            <h1> <?= $post->title ?></h1>
                            <div class="icons_count" style="display:none">
                                <i class="fas fa-eye"><?= $post->views ?></i>
                                <i class="fas fa-comments"><?= $post->num_comment ?></i>
                            </div>
                        </div>
                        <div class="image_post">
                            <img src="<?= base_url('uploads/admin') ?>/<?= $post->image ?>" alt="">
                        </div>
                        <div class="row">
                            <div class="desp_post">
                                <?= $post->body ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /*** sidebar column *** / -->
                <div class="col-sm-4 d-flex justify-content-center col_sidebar">
                    
                    <section class="right_bar1">
                        <div class="recipes_items_sidebar">
                        <div class="sidebar_recent_post">
                                <div class="heading_sidebar_2"><span>تازہ ترین نقشہ
                                    </span>
                                </div>
                                <?php foreach($recent_maps as $recent_map): ?>
                                <a href="<?= base_url() ?>/maps/<?= $recent_map->route_name ?>">
                                    <div class="sidebar-items">
                                        <div class="left_recent_sidebar"><a href="<?= base_url() ?>/maps/<?= $recent_map->route_name ?>"><img src="<?= base_url('uploads/admin/').$recent_map->image ?>" alt=""></a></div>
                                        <div class="right_recent_sidebar">
                                            <h2><?= $recent_map->title ?></h2><small style="font-family:"><?php
                                                            $timestamp1 = strtotime($recent_map->modified_at);
                                                            $month1 = date('m', $timestamp1);
                                                            $year1 = date('Y', $timestamp1);
                                                            echo get_month_name($month1);
                                                            echo $year1;


                                                     ?> </small>
                                        </div>
                                    </div>
                                </a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </section>
                    <section class="right_bar3">
                        <div class="recipes_items_sidebar ">
                            <div class="sidebar_recent_post">
                                <div class="heading_sidebar_22"><span>مشہور زمرے</span></div>
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
                    <!-- <section class="right_bar3 ">
                        <div class="recipes_items_sidebar ">
                            <div class="sidebar_recent_post">
                                <div class="heading_sidebar_22"><span>اسلامی مقبول پوسٹس</span></div>
                                <a href="Categories_books.html">
                                    <div class="sidebar-items">
                                        <div class="left_recent_sidebar"><img src="../Assets/Images/IMG-20210312-WA0003.jpg" alt=""></div>
                                        <div class="right_recent_sidebar">
                                            <h2>نسل انسانی کی تاریخ</h2><small>مارچ 2021</small>
                                        </div>
                                    </div>
                                </a>
                                <a href="Categories_books.html">
                                    <div class="sidebar-items">
                                        <div class="left_recent_sidebar"><img src="../Assets/Images/IMG-20210312-WA0001.jpg" alt=""></div>
                                        <div class="right_recent_sidebar">
                                            <h2>سات سو سال بعد </h2><small>مارچ 2021</small>
                                        </div>
                                    </div>
                                </a>
                                <a href="Categories_books.html">
                                    <div class="sidebar-items">
                                        <div class="left_recent_sidebar"><img src="../Assets/Images/IMG-20210312-WA0003.jpg" alt=""></div>
                                        <div class="right_recent_sidebar">
                                            <h2>یہودیت</h2><small>مارچ 2021</small>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </section> -->
                </div>
            </div>
        </div>
    </section>
    <section class="section_end_sidebar">
    </section>
    
    <footer>
        <div class="container-fluid">
            <div class="center_footer">
                <div class="left_footer">
                    <ul>
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>
                <div class="right_footer">
                    <ul>
                        <li><a href="../index.html">Copyright 2021 - All Rights Reserved
                            </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.textcomplete/1.8.5/jquery.textcomplete.js" integrity="sha512-QQzMH0Owf0yosqiKWIuainU924mQSLXGRicMIQwikdKdJPlkjezlXT+ukYvjDsPu/k53Hf53wOYi7w6RjzHMtQ==" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js" integrity="sha512-XKa9Hemdy1Ui3KSGgJdgMyYlUg1gM+QhL6cnlyTe2qzMCYm4nAZ1PsVerQzTTXzonUR+dmswHqgJPuwCq1MaAg==" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../Assets/Js/comments-data.js"></script>
    <script type="text/javascript" src="../Assets/Js/jquery-comments.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js" integrity="sha512-XKa9Hemdy1Ui3KSGgJdgMyYlUg1gM+QhL6cnlyTe2qzMCYm4nAZ1PsVerQzTTXzonUR+dmswHqgJPuwCq1MaAg==" crossorigin="anonymous"></script>
    <script type="text/javascript" src="<?= base_url('assets/frontend') ?>/Js/App.js"></script>
    <script type="text/javascript" src="<?= base_url('assets/frontend') ?>/Js/index.js"></script><script type="text/javascript" src="<?= base_url('assets/frontend') ?>/Js/stickySidebar.js"></script>
</body>

</html>