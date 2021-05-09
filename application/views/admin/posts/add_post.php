
            <!-- <pre><?php //var_dump( $categorie) ?></pre> -->
            <?php $this->load->view('admin/layout/header') ?>
            <?php 
            //cj]hanged
                function generateTree($data, $parent = 0, $depth=0)
                    {
                        $tree = "<ul>\n";
                        for ($i=0, $ni=count($data); $i < $ni; $i++) {
                            if ($data[$i]['parent_id'] == $parent) {    
                                
                                $tree .= "<li>\n";
                                $tree .= "<input type='checkbox' name='categorie' value= '". $data[$i]['id']." ' ";
                                $tree .= "<label for='vehicle1'>";

                                $tree .= $data[$i]['category'];
                                $tree .= "</label><br>";

                                $tree .= "</option>";
                                $tree .= generateTree($data, $data[$i]['id'], $depth+1);
                                $tree .= "</li>\n";
                            }
                        }
                        $tree .= "</ul>\n";
                        return $tree;
                    } 
            ?>
            <!-- Topbar Start -->
            <?php $this->load->view('admin/layout/top_nav') ?>
            <!-- end Topbar -->

            <!-- ========== Left Sidebar Start ========== -->
            <?php $this->load->view('admin/layout/sidebar') ?>

            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">
                        <div class="card-box">
                            <h2 class=" mt-0 mb-3">Add new post</h2>
                            <?php  if(validation_errors()): ?>
                            <div class="alert alert-danger" role="alert">
                              <?php echo validation_errors(); ?>
                            </div>
                            <?php endif ?>
                            <?php  if($this->session->flashdata('error_message')): ?>
                            <div class="alert alert-danger">
                                <?= $this->session->flashdata('error_message'); ?>
                            </div>
                            <?php endif ?>
                            <?php  if($this->session->flashdata('success_message')): ?>
                            <div class="alert alert-success" role="alert">
                                <?= $this->session->flashdata('success_message'); ?>  
                            </div>
                            <?php endif ?>
                            <form action="save-post" method="POST"  enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" id="simpleinput" name="post_title" class="form-control" value="<?php echo set_value('post_title'); ?>" placeholder="عنوان">
                                </div>
                                <div class="form-group">
                                    <label for="title">Route Name</label>
                                    <input type="text" id="" name="route_name" required class="form-control w-25" value="<?php echo set_value('route_name'); ?>" placeholder="Route Name" >
                                </div>
                                <div class="form-group">
                                    <label for="post_categorie">Categorie</label>
                                    <div class="post_categorie_checkbox" id="">
                                        
                                    </div>

                                    <?php
                                      echo  generateTree($categore);
                                    
                                    ?>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-6">
                                            <label for="post_img" class="d-block">Featured Image</label>
                                            <input type='file' name="file_name" onchange="readURL(this);" />
                                            <img id="blah" src="#" alt="your image" width="300" height="200" />
                                        </div>
                                        <div class="col-6">
                                            <label for="post_img" class="d-block">Status</label>
                                            <select id="post_status" name="status" class="form-control w-25"style="
                                                background: #464040;
                                                color: white;
                                            ">
                                                <option value="0" selected>Un Active</option>
                                                <option value="1" >Active</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                                <div class="form-group">
                                    <label for="post_tag">Add Tags</label>
                                    <input type="text" value="" name="tags" value="<?php echo set_value('tags'); ?>" data-role="tagsinput" placeholder="Add tags" />
                                </div>
                                <div class="form-group">
                                    <label for="passWord2">Body</label>
                                    <textarea name="post_body" value="<?php echo set_value('post_body'); ?>">
                                       
                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="post_tag">Add Tags</label>
                                    <input type="text" value="" name="tags" value="<?php echo set_value('tags'); ?>" data-role="tagsinput" placeholder="Add tags" />
                                </div>

                                <div class="form-group text-right mb-0">
                                    <button class="btn btn-primary waves-effect waves-light mr-1" type="submit">
                                        Submit
                                    </button>
                                    <button type="reset" class="btn btn-secondary waves-effect waves-light">
                                        Cancel
                                    </button>
                                </div>
                            </form>
                        </div>
                        
                        
                    </div> <!-- container-fluid -->

                </div> <!-- content -->

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                               2020 - 2021 © History in Urdu <a href="">Rivozone</a> 
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-right footer-links d-none d-sm-block">
                                    <a href="javascript:void(0);">About Us</a>
                                    <a href="javascript:void(0);">Help</a>
                                    <a href="javascript:void(0);">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->
            <script type="text/javascript">
                
            </script>
            <script src="https://cdn.tiny.cloud/1/xe86jsstydxsysjdo473wyinbzuz1mziocelg4wajosqses0/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
            <?php $this->load->view('admin/layout/footer') ?>

        