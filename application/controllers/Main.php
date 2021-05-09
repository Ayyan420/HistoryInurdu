<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

    public function __construct() {
        parent::__construct();
        date_default_timezone_set("Asia/Karachi");
        
        
        $this->load->model('User_model');
        $this->load->helper('text');
        $this->load->helper('cookie');
        $this->load->library("pagination");
    }


    public function index() {
        
        $data['css'] = 'style.css';
        $this->load->view('frontend/index', $data);
    }

    public function search_post(){
      
        $query = $this->input->get('search');
       
        $data['posts'] = $this->User_model->search_post($query);
        $data['recent_posts'] = $this->User_model->get_recent_posts();
        $data['popular_categories'] = $this->User_model->get_popular_categorie();
        $data['css'] = 'categories.css';

        $this->load->view('frontend/post/search' , $data);
    }

    public function search_book(){
        $query = $this->input->get('search');
       
        $data['posts'] = $this->User_model->search_book($query);
        $data['recent_posts'] = $this->User_model->get_recent_books();
        $data['popular_categories'] = $this->User_model->get_popular_book_categorie();
        $data['css'] = 'categories_books.css';


        $this->load->view('frontend/books/search' , $data);
    }

    public function search_map(){
        $query = $this->input->get('search');
       
        $data['maps'] = $this->User_model->search_map($query);
        $data['recent_maps'] = $this->User_model->get_recent_maps();
        $data['popular_categories'] = $this->User_model->get_popular_categorie();
        $data['css'] = 'map.css';

        $this->load->view('frontend/maps/search' , $data);
    }

    public function view_categorie($categorie_slug1 = NULL ,$categorie_slug2 = NULL ,$categorie_slug3 = NULL , $categorie_slug4 = NULL   ){
        $url_list[0] = $categorie_slug1;
        $url_list[1] = $categorie_slug2;
        $url_list[2] = $categorie_slug3;
        $url_list[3] = $categorie_slug4;

        $last_url = -1;
        for($i=0;$i<=2;$i++){
            if($url_list[$i] != NULL){
               
                $last_url = $i;
                
            }
        }
        $last_url1 = -1;
        for($i=0;$i<=3;$i++){
            if($url_list[$i] != NULL){
               
                $last_url1 = $i;
                
            }
        }
        $id  =   $this->User_model->get_categorie_by_route_name((((int)$url_list[$last_url]) == 0)? $url_list[$last_url] : $url_list[$last_url-1]);
    //    echo $id;
        $data['categories']= $this->User_model->get_all_categories_by_categorie_id($id);
        //pagination
            $config = array();
            $config["base_url"] = base_url() . "categorie/".(($categorie_slug1)?$categorie_slug1:"")."/".((is_numeric($categorie_slug2) != 1)?$categorie_slug2:"")."/".((is_numeric($categorie_slug3) != 1)?$categorie_slug3:"");
            $config["total_rows"] = $this->User_model->get_count_posts($data['categories']);
            $config["per_page"] = 9;
            $config['full_tag_open'] = '<ul class="pagination">';
            $config['full_tag_close'] = '</ul>';
            $config['first_link'] = false;
            $config['last_link'] = false;
            $config['first_tag_open'] = '<li class="page-item">';
            $config['first_tag_close'] = '</li>';
            $config['prev_link'] = '&laquo';
            $config['prev_tag_open'] = '<li class="prev page-item">';
            $config['prev_tag_close'] = '</li>';
            $config['next_link'] = '&raquo';
            $config['next_tag_open'] = '<li class="page-item">';
            $config['next_tag_close'] = '</li>';
            $config['last_tag_open'] = '<li class="page-item">';
            $config['last_tag_close'] = '</li>';
            $config['cur_tag_open'] = '<li class="active page-item"><a class="page-link" href="#">';
            $config['cur_tag_close'] = '</a></li>';
            $config['num_tag_open'] = '<li class="page-item">';
            $config['num_tag_close'] = '</li>';
            $config['anchor_class'] = "page-link";
            $this->pagination->initialize($config);

            $page = (is_numeric($this->uri->segment( $this->uri->total_segments()))) ? $this->uri->total_segments() :$this->uri->total_segments()+1  ;

            // echo $page;
            // echo '<br>ha';
            // echo  $this->uri->segment(3);
            // echo '<br>sa';
            $data["links"] = $this->pagination->create_links();
            $data['posts'] = $this->User_model->get_post_by_categories_id($data['categories'],$config["per_page"], $this->uri->segment( $page));

        //pagination end

        // $data['posts1'] = $this->User_model->get_post_by_categories_id( $data['categories']);
        $data['recent_posts'] = $this->User_model->get_recent_posts();
        $data['popular_categories'] = $this->User_model->get_popular_categorie();

        $data['css'] = 'categories.css';
        $this->load->view('frontend/post/categorie'  ,$data );
        
    }

    public function view_book_categorie($categorie_slug1 = NULL ,$categorie_slug2 = NULL ,$categorie_slug3 = NULL){
        $url_list[0] = $categorie_slug1;
        $url_list[1] = $categorie_slug2;
        $url_list[2] = $categorie_slug3;
        $last_url = -1;
        for($i=0;$i<=2;$i++){
            if($url_list[$i] != NULL){
               
                $last_url = $i;
                
            }
        }
        // echo $url_list[$last_url];

        $id  =   $this->User_model->get_book_categorie_by_route_name($url_list[$last_url]);
        
        $data['categories']= $this->User_model->get_all_book_categories_by_categorie_id($id);
        //pagination
        $config = array();
        $config["base_url"] = base_url() . "book/categorie/".(($categorie_slug1)?$categorie_slug1:"")."/".((is_numeric($categorie_slug2) != 1)?$categorie_slug2:"")."/".((is_numeric($categorie_slug3) != 1)?$categorie_slug3:"");
        $config["total_rows"] = $this->User_model->get_count_posts($data['categories']);
        $config["per_page"] = 9;
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev page-item">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active page-item"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';
        $config['anchor_class'] = "page-link";
        $this->pagination->initialize($config);

        $page = (is_numeric($this->uri->segment( $this->uri->total_segments()))) ? $this->uri->total_segments() :$this->uri->total_segments()+1  ;

        // echo $page;
        // echo '<br>ha';
        // echo  $this->uri->segment(3);
        // echo '<br>sa';
        $data["links"] = $this->pagination->create_links();
        

        $data['posts'] = $this->User_model->get_books_by_categories_id($data['categories'],$config["per_page"], $this->uri->segment( $page));

    //pagination end
       

        $data['recent_posts'] = $this->User_model->get_recent_books();
        $data['popular_categories'] = $this->User_model->get_popular_book_categorie();
        // print_r($data['categories']);
       
        $data['css'] = 'categories_books.css';
        $this->load->view('frontend/books/categorie'  ,$data );
    }

    public function view_posts($post_name){
        $post =  $this->User_model->get_post_by_route_name($post_name);
        $categorie = $this->User_model->get_parent_categories_by_categorie_id($post->categorie_id);
        $recent_posts = $this->User_model->recent_posts_by_categorie_priority($post->categorie_id , $post->id);
        $popular_categorie = $this->User_model->get_popular_categorie();
        $comments = $this->User_model->get_comments($post->id);
        
        //Counting Post View
        $post_id = $post->id;
            if(isset($_COOKIE['read_articles'])) {
                //grab the JSON encoded data from the cookie and decode into PHP Array
                $read_articles = json_decode($_COOKIE['read_articles'], true);
                if(isset($read_articles[$post_id]) AND $read_articles[$post_id] == 1) {
                    //this post has already been read
                } else {
                    $view = $post->views + 1;
                   $sql = "UPDATE posts
                            SET views = ' $view'
                            WHERE id='$post->id'  ";
                    $this->db->query($sql);
                    $read_articles[$post_id] = 1;
                    //echo $post->name;

                    //set the cookie again with the new article ID set to 1
                    setcookie("read_articles",json_encode($read_articles),time()+60*60*24);  

                }

            } else {

                //hasn't read an article in 24 hours?
                //increment the post view count
                $read_articles = Array(); 
                $read_articles[$post_id] = 1;
                    $sql = "UPDATE posts
                    SET views = views + 1
                    WHERE id='$post->id'  ";
                    $this->db->query($sql);
                setcookie("read_articles",json_encode($read_articles),time()+60*60*24);      

            }

         //Counting Post View end
            
        $data['css'] = 'post.css';
        $data['post'] = $post;
        $data['categorie'] = $categorie;
        $data['recent_posts'] = $recent_posts;
        $data['popular_categories'] = $popular_categorie;
        $data['comments'] = $comments;
        


        $this->load->view('frontend/post/post'  ,$data );

    }

    public function view_book($post_name){
        $post =  $this->User_model->get_book_by_route_name($post_name);
        $categorie = $this->User_model->get_parent_book_categories_by_categorie_id($post->categorie_id);
        $recent_posts = $this->User_model->recent_books_by_categorie_priority($post->categorie_id , $post->id);
        $popular_categorie = $this->User_model->get_popular_book_categorie();
        $comments = $this->User_model->get_comments($post->id);
        // print_r($comments);
        // die();

        // echo '<pre>';
        // var_dump($recent_posts);
        // echo '</pre>';

        $data['css'] = 'post_books.css';
        $data['post'] = $post;
        $data['categorie'] = $categorie;
        $data['recent_posts'] = $recent_posts;
        $data['popular_categories'] = $popular_categorie;
        $data['comments'] = $comments;
        
        //Counting book Post View
        $post_id = $post->id;
        if(isset($_COOKIE['book_view'])) {
            //grab the JSON encoded data from the cookie and decode into PHP Array
            $read_articles = json_decode($_COOKIE['book_view'], true);
            if(isset($read_articles[$post_id]) AND $read_articles[$post_id] == 1) {
                //this post has already been read
            } else {
                $view = $post->views + 1;
            $sql = "UPDATE book
                        SET views = ' $view'
                        WHERE id='$post->id'  ";
                $this->db->query($sql);
                $read_articles[$post_id] = 1;
               

                //set the cookie again with the new article ID set to 1
                setcookie("book_view",json_encode($read_articles),time()+60*60*24);  

            }

                } else {

                    //hasn't read an article in 24 hours?
                    //increment the post view count
                    $read_articles = Array(); 
                    $read_articles[$post_id] = 1;
                        $sql = "UPDATE book
                        SET views = views + 1
                        WHERE id='$post->id'  ";
                        $this->db->query($sql);
                    setcookie("book_view",json_encode($read_articles),time()+60*60*24);      

                }

        //Counting book Post View end

        $this->load->view('frontend/books/book'  ,$data );

    }

    public function post_comment($id){
        if(!$this->input->cookie('comment_user',true)){
            $digits = 11;
            $user_id = rand(pow(10, $digits-1), pow(10, $digits)-1);
        }else{
            $user_id = $this->input->cookie('comment_user');

        }
       $result = $this->User_model->post_comment($id , $user_id);
       if($result){
            if(!$this->input->cookie('comment_user',true)){
                $cookie = array(
                    'id' => $user_id,
                    'name'   => 'comment_user' ,
                    'value'  => $this->input->post('name'),
                    'expire' => '2147483647',
                );
                $this->input->set_cookie($cookie);
    
                $cookie = array(
                    'name'   => 'comment_email' ,
                    'value'  => $this->input->post('email'),
                    'expire' => '2147483647',
                );
                $cookie = array(
                    'name'   => 'id' ,
                    'value'  => $user_id,
                    'expire' => '2147483647',
                );

                $this->input->set_cookie($cookie);
            }
          
             redirect()->to($_SERVER['HTTP_REFERER']);
       }else{
           
             redirect()->to($_SERVER['HTTP_REFERER']);
       }
    }

    public function view_all_map(){
      $maps = $this->User_model->get_all_maps();
      $recent_maps = $this->User_model->get_recent_maps();
      $popular_categorie = $this->User_model->get_popular_categorie();

      $data['css'] = 'map.css';
      $data['maps'] = $maps;
      $data['recent_maps'] = $recent_maps;
      $data['popular_categories'] = $popular_categorie;
      
      


      $this->load->view('frontend/maps/categorie'  ,$data );

    }

    public function view_map($route_name){
        $maps = $this->User_model->get_all_maps();
        $post = $this->User_model->get_map_by_route_name($route_name);

        $recent_maps = $this->User_model->get_recent_maps();
        $popular_categorie = $this->User_model->get_popular_categorie();
  
        $data['css'] = 'post.css';
        $data['maps'] = $maps;
        $data['post'] = $post;

        $data['recent_maps'] = $recent_maps;
        $data['popular_categories'] = $popular_categorie;
        
        
  
  
        $this->load->view('frontend/maps/map'  ,$data );
  
      }

    
    public function view_blog(){

        $id  =   $this->User_model->get_categorie_by_route_name('history_of_islam');
        // echo $id;
        $data['categories1']= $this->User_model->get_all_categories_by_categorie_id($id);
        $data['posts1'] = $this->User_model->get_post_by_categories_id( $data['categories1']);

        $id1  =   $this->User_model->get_categorie_by_route_name('history_of_subcontinent');
       
         $data['categories2']= $this->User_model->get_all_categories_by_categorie_id_as($id1);
         
         $data['posts2'] = $this->User_model->get_post_by_categories_id_as( $data['categories2']);
      

         
        $id2  =   $this->User_model->get_categorie_by_route_name('history_of_world');
       
         $data['categories3']= $this->User_model->get_all_categories_by_categorie_id_asde($id2);
      
         $data['posts3'] = $this->User_model->get_post_by_categories_id_asd( $data['categories3']);
         $data['recent_posts'] = $this->User_model->get_recent_posts();
         $data['popular_categories'] = $this->User_model->get_popular_categorie();
        
         $data['css'] = 'blog.css';
         $this->load->view('frontend/blog' , $data);


   }

   public function cantact_us(){
       $this->load->view('frontend/contact-us');
   }
 
}