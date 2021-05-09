<?php   
$data['css'] = $css;
$this->load->view('frontend/layout/header' ,$data);
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
                <h1> <?= $categorie[0]->category?></h1>
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
                    
                    <section class="right_bar2">
                        <div class="recipes_items_sidebar">
                            <div class="sidebar_recent_post">
                                <div class="heading_sidebar_2"><span>تازہ ترین پوسٹ
                                    </span></div>
                                    <?php for($i=0; $i<3;$i++): ?>   
                                        <?php if($recent_posts[$i]->status == 1): ?> 
                                        <a href="<?= base_url() ?>/posts/<?= $recent_posts[$i]->route_name ?>">
                                            <div class="sidebar-items">
                                                <div class="left_recent_sidebar"><a href="<?= base_url() ?>/posts/<?= $recent_posts[$i]->route_name ?>"><img src="<?= base_url('uploads/admin') ?>/<?= $recent_posts[$i]->image ?>" alt=""></a></div>
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
                                        <?php endif; ?>
                                        <?php endfor ?>
                            </div>
                        </div>
                    </section>
                    <section class="right_bar3 stick" id="sidebar">
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
    <section class="recent_bottom_posts">
        <div class="container">
            <h1 class="text-center">حالیہ پوسٹس
            </h1>
            <div class="row justify-content-md-center">
                <?php foreach($recent_posts as $recent_post): ?>  
                    <?php if($recent_post->status == 1): ?>                     
                        <div class="col-sm-4 d-flex justify-content-center">
                            <div class="recipes_items_main">
                                <div class="recipes_items">
                                    <figure class="snip1543">
                                        <img src="<?= base_url('uploads/admin/').$recent_post->image ?>" />
                                        <figcaption>
                                            <!-- <h3>jhjمنگول سلطنت</h3>
                                        <p>مزید پڑھنے کے لئے کلک کریں</p> -->
                                        </figcaption>
                                        <a href="<?= base_url() ?>/posts/<?= $recent_post->route_name ?>">
                                        </a>
                                    </figure>
                                </div>
                                <div class="recipes_items">
                                    <h6><?= $recent_post->title?> </h6>
                                    <p><?php $str = word_limiter($recent_post->body , 40);
                                                echo   strip_tags( $str) ; ?></p>
                                    <a href="<?= base_url() ?>/posts/<?= $recent_post->route_name ?>" class="link_color">
                                        مزید پڑھیں
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endif ?>
                <?php endforeach ?>
                
            </div>
        </div>
    </section>
    <section class="section_comments">
        <div class="container">
            <div class="row justify-content-md-center heading_comment">
                <h1 class="text-center">تبصرہ کریں
                </h1>
                <?php
                  $comment = $this->input->cookie('comment',true)
                ?>
            </div>
            <div class="row  justify-content-md-center">
                <div class="col-12">
                    <div class="comments">
                    <div class="comment-box add-comment">
                            <?php if($this->input->cookie('comment_user',true)){ ?>
                                <div class="comment-box add-comment ">
                                    <span class="commenter-pic">
                                    <img src="<?= base_url('assets/frontend/images/') ?>profile-picture.webp" class="img-fluid">

                                    </span>
                                    <span class="commenter-name">
                                        <a ><?= $this->input->cookie('comment_user',true) ?> </a></span>
                                    </span>
                                    <div class="commenter-name">
                                        <form class="form-contact comment_form" action="<?=  base_url() ?>/post/post_comment/<?= $post->id ?>" id="commentForm" method="POST">

                                            <input type="text" placeholder="Add a public reply" name="name" value="<?= $this->input->cookie('comment_user',true) ?>" style="display:none">
                                            <input type="text" placeholder="Add comment" name="email" value="<?= $this->input->cookie('comment_email',true) ?>" style="display:none">

                                            <input type="text" placeholder="Add comment" name="body" required>
                                            <button type="submit" class="btn btn-default">Post</button>
                                            <button type="cancel" class="btn btn-default reply-popup">Cancel</button>
                                        </form>
                                    </div>
                                </div>
                            <?php }else{ ?>
                            
                            <form class="form-contact comment_form" action="<?=  base_url() ?>/post/post_comment/<?= $post->id ?>" id="commentForm" method="POST">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input class="form-control" name="name" id="name" type="text" placeholder="Name" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input class="form-control" name="email" id="email" type="email" placeholder="Email" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="body" id="comment" cols="30" rows="9" required placeholder="Write a comment"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-default">Post
                                    </button>
                                    <button type="cancel" class="btn btn-default">Cancel</button>
                                </div>
                            </form>
                            <?php } ?>
                        </div>
                        
                    <div class="col-sm-11">
                    <?php if($comments) { ?>
                    <?php  foreach($comments as $comment): ?>

                        <div class="comment-box">
                           
                                <?php if( $comment->parent_id == 0 && $comment->status == 1){ ?>
                                    <span class="commenter-pic">
                                        <img src="<?= base_url('assets/frontend/images/') ?>profile-picture.webp" class="img-fluid">
                                    </span>
                                    <span class="commenter-name">
                                        <a ><?=  $comment->name ?></a> <span class="comment-time"> </span>
                                    </span>
                                    <p class="comment-txt more"><?= $comment->body ?></p>
                                    <div class="comment-meta">
                                        <button class="comment-like">Delete
                                        </button>
                                        <button class="comment-reply ml-2 reply-popup">Reply</button>
                                    </div>
                                    <div class="comment-box add-comment reply-box">
                                                <span class="commenter-pic" style="margin: 10px 0 10px 0">
                                                    <img src="<?= base_url('assets/frontend/images/') ?>profile-picture.webp" class="img-fluid">
                                                </span>
                                                <span class="commenter-name">
                                                    <form action="<?=  base_url() ?>/post/post_comment/<?= $post->id ?>" method="post">
                                                    <input type="text" name="parent_id" value="<?= $comment->id ?>" id="" style="display:none">
                                                    <input type="text" placeholder="Add Name" name="name" value="<?= $this->input->cookie('comment_user',true) ?>" style="display:none">
                                                    <input type="text" placeholder="Add Name" name="name" value="<?= $this->input->cookie('comment_user',true) ?>" style="display:none">
                                                    <input type="text" placeholder="Add Email" name="email" value="<?= $this->input->cookie('comment_email',true) ?>" style="display:none">

                                                    <input type="text" placeholder="Add a public reply" name="body" required>
                                            
                                                    <button type="submit" class="btn btn-default">Relpy</button>

                                                    <button type="cancel" class="btn btn-default reply-popup">Cancel</button>
                                                    </form>
                                                </span>
                                            </div>
                                <?php }?>
                         

                                   
                           

                                <?php foreach($comments as $comment1): ?>
                                    <?php if( $comment1->parent_id == $comment->id && $comment1->status == 1){ ?>
                                        <div class="comment-box replied">
                                            <span class="commenter-pic">
                                                <img src="<?= base_url('assets/frontend/images/') ?>profile-picture.webp" class="img-fluid">
                                            </span>
                                            <span class="commenter-name">
                                                <a ><?= $comment1->name ?></a> <span class="comment-time"> </span>
                                            </span>
                                            <p class="comment-txt more"><?= $comment1->body ?></p>
                                        </div>
                                <?php } ?>
                                <?php endforeach; ?>
                            
                            
                        
                        </div>
                    <?php endforeach; ?>
                    <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
     <div class="progress-wrap">
        <svg height="100%" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:1.41421;" version="1.1" viewBox="0 0 100 126" width="100%" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:serif="http://www.serif.com/" xmlns:xlink="http://www.w3.org/1999/xlink">
            <clipPath id="_clip1">
                <rect height="125" width="100" x="0" y="0.04" />
            </clipPath>
            <g clip-path="url(#_clip1)">
                <path d="M100,42.077c0,-16.313 -13.224,-29.537 -29.537,-29.537c-12.909,0 -28.017,0 -40.926,0c-16.313,0 -29.537,13.224 -29.537,29.537c0,12.909 0,28.017 0,40.926c0,16.313 13.224,29.537 29.537,29.537c12.909,0 28.017,0 40.926,0c16.313,0 29.537,-13.224 29.537,-29.537c0,-12.909 0,-28.017 0,-40.926Z" style="fill:#3f3f43;" />
                <path d="M71.8,78.24l5.5,-5.8l-27.3,-25.6l-27.3,25.6l5.5,5.8l21.8,-20.4l21.8,20.4Z" style="fill:#fff;fill-opacity:0.5;fill-rule:nonzero;" />
            </g>
        </svg>
    </div>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ionicons/5.5.0/esm/ionicons.min.js" integrity="sha512-YR5ochxRyT+6+k+Gevpn46Jrzq698AmDkKR5xcQRLRtiWDUhvOdeZyIXSOw1V5orFrOVNg2DSJtiqoZU7fNRPQ==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js" integrity="sha512-XKa9Hemdy1Ui3KSGgJdgMyYlUg1gM+QhL6cnlyTe2qzMCYm4nAZ1PsVerQzTTXzonUR+dmswHqgJPuwCq1MaAg==" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js" integrity="sha512-9CWGXFSJ+/X0LWzSRCZFsOPhSfm6jbnL+Mpqo0o8Ke2SYr8rCTqb4/wGm+9n13HtDE1NQpAEOrMecDZw4FXQGg==" crossorigin="anonymous"></script>
    <script src="<?= base_url('assets/frontend') ?>/Js/index.js"></script>
    <script src="<?= base_url('assets/frontend') ?>/Js/stickySidebar.js"></script>
    <script type="text/javascript" src="<?= base_url('assets/frontend') ?>/Js/App.js"></script>
</body>

</html>