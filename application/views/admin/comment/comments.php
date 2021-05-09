

    <?php $this->load->view('admin/layout/header') ?>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
    <!-- Topbar Start -->
    <style>
        .p_t{
            font-size: 20px;
            font-family: jameel-noori-nastaleeq;
            color:black;
        }
    </style>
    <?php $this->load->view('admin/layout/top_nav') ?>
    <!-- end Topbar -->

    <!-- ========== Left Sidebar Start ========== -->
    <?php $this->load->view('admin/layout/sidebar') ?>

    <!-- Left Sidebar End -->

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                    <?php  if($this->session->flashdata('success_message')): ?>
                            <div class="alert alert-success" role="alert">
                                <?= $this->session->flashdata('success_message'); ?>  
                            </div>
                            <?php endif ?>
                            <h1>Comments</h1>
                        <table id="posts_table" class="display" style="width:100%;text-align:center;">
                            <thead>
                                <tr>
                                    <th style="width: 200px;">Name</th>
                                    <th style="width: 300px;">Post Name</th>

                                    <th style="width: 50px;">Email</th>
                                    <th style="width: 400px;">Comment</th>
                                    <th>Sataus</th>
                                    <th>Date Modified</th>
                                    <th style="width: 300px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($comments as $post): ?>
                                        <tr>
                                            <td class=""><?= $post->name ?></td>
                                            <td><?= $post->title  ?></td>

                                            <td><?= $post->email ?></td>
                                            <th><?= $post->body ?></th>
                                            <td><?= $post->status ?></td>
                                            <td><?= $post->modified_at ?></td>
                                            
                                            <td>
                                            <?php if( $post->status == 0){ ?>
                                                <a href="approve_comment/<?=  $post->id ?>" class="btn btn-success"  style="display: ;">Approve</a>
                                            <?php }elseif($post->status == 1){ ?>

                                                <a href="unapprove_comment/<?=  $post->id ?>" class="btn btn-success"  style="display: ;">Disapprove</a>
                                            <?php } ?>
                                            <a href="delete_comment/<?=  $post->id ?>" class="btn btn-danger" style="display: ;">Delete</a>

                                            </td>


                                        </tr>
                                 <?php endforeach; ?>

                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>                    
        </div>
    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.js" ></script> -->

    <?php $this->load->view('admin/layout/footer') ?>

