<?php
//a
class User_model extends CI_model {

    public function search_post($query){
        
        
        $this->db->like('title', $query);
        $this->db->order_by('modified_at', 'DESC');
        $result = $this->db->get('posts')->result();
        if($result){
            return $result;
        }else{
            return false;
        }
    }

    public function search_book($query){
        
        
        $this->db->like('title', $query);
        $this->db->order_by('modified_at', 'DESC');
        $result = $this->db->get('book')->result();
        if($result){
            return $result;
        }else{
            return false;
        }
    }

    public function search_map($query){
        
        
        $this->db->like('title', $query);
        $this->db->order_by('modified_at', 'DESC');
        $result = $this->db->get('maps')->result();
        if($result){
            return $result;
        }else{
            return false;
        }
    }

    public function get_categorie_by_route_name($name)
    {
        $this->db->where('route_name', $name);
        $result = $this->db->get('categories')->row(1);

        if($result){
            return $result->id;
        }else{
            return false;
        }
    }

    public function get_book_categorie_by_route_name($name)
    {
       

        $this->db->where('route_name', $name);
        $result = $this->db->get('book_category')->result();
        $sql = "SELECT id  FROM book_category WHERE route_name = '$name'";
        $result1 = $this->db->query($sql)->row(1);
        $this->db->last_query();
        if($result1){
            
            
            return $result1->id;
        }else{
           
            return false;
        }
    }

    public function get_post_by_route_name($name)
    {
        $this->db->where('route_name', $name);
        $result = $this->db->get('posts')->row(1);

        if($result){
            return $result;
        }else{
            return false;
        }
    }

    public function get_book_by_route_name($name)
    {
        $this->db->where('route_name', $name);
        $result = $this->db->get('book')->row(1);

        if($result){
            return $result;
        }else{
            return false;
        }
    }

    public function array_2d_to_1d ($input_array) {
        $output_array = array();
    
        for ($i = 0; $i < count($input_array); $i++) {
          for ($j = 0; $j < count($input_array[$i]); $j++) {
            $output_array[] = $input_array[$i][$j];
          }
        }
    
        return $output_array;
    }

    public $categorie_list = array();
    public $first_exec = false;
    public function get_all_categories_by_categorie_id($id){
        $this->db->where('parent_id', $id);
        $results = $this->db->get('categories')->result();
        if($this->first_exec == false){
           
            $this->db->where('id', $id);
            $results1 = $this->db->get('categories')->result();
           // var_dump(  $results1);
            array_push($this->categorie_list , $results1);
           
            $this->first_exec = true;
        }
        if($results){
           
            array_push($this->categorie_list , $results);
    
            
            foreach($results as $result){
                $this->get_all_categories_by_categorie_id($result->id);
            }
            if($result){
                
                
                return $this->array_2d_to_1d($this->categorie_list);
            }
        }
        else{
            return $this->array_2d_to_1d($this->categorie_list);
        }
    }

    public $categorie_list45 = array();
    public $first_exec34 = false;
    public function get_all_categories_by_categorie_id_as($id){
        
        $this->db->where('parent_id', $id);
        $results = $this->db->get('categories')->result();
        if($this->first_exec34 == false){
           
            $this->db->where('id', $id);
            $results1 = $this->db->get('categories')->result();
           // var_dump(  $results1);
            array_push($this->categorie_list45 , $results1);
           
            $this->first_exec34 = true;
        }
        if($results){
           
            array_push($this->categorie_list45 , $results);
    
            
            foreach($results as $result){
                $this->get_all_categories_by_categorie_id_as($result->id);
            }
            if($result){
                
                
                return $this->array_2d_to_1d($this->categorie_list45);
            }
        }
        else{
            return $this->array_2d_to_1d($this->categorie_list45);
        }
    }

    public $categorie_list45667 = array();
    public $first_exec3459 = false;
    public function get_all_categories_by_categorie_id_asde($id){
        
        $this->db->where('parent_id', $id);
        $results = $this->db->get('categories')->result();
        if($this->first_exec3459 == false){
           
            $this->db->where('id', $id);
            $results1 = $this->db->get('categories')->result();
           // var_dump(  $results1);
            array_push($this->categorie_list45667 , $results1);
           
            $this->first_exec3459 = true;
        }
        if($results){
           
            array_push($this->categorie_list45667 , $results);
    
            
            foreach($results as $result){
                $this->get_all_categories_by_categorie_id_asde($result->id);
            }
            if($result){
                
                
                return $this->array_2d_to_1d($this->categorie_list45667);
            }
        }
        else{
            return $this->array_2d_to_1d($this->categorie_list45667);
        }
    }


    public $categorie_list_book = array();
    public $first_exec3 = false;
    public function get_all_book_categories_by_categorie_id($id){
        $this->db->where('parent_id', $id);
        $results = $this->db->get('book_category')->result();
        if($this->first_exec3 == false){
           
            $this->db->where('id', $id);
            $results1 = $this->db->get('book_category')->result();
           // var_dump(  $results1);
            array_push($this->categorie_list_book , $results1);
           
            $this->first_exec3 = true;
        }
        if($results){
           
            array_push($this->categorie_list_book , $results);
    
            
            foreach($results as $result){
                $this->get_all_book_categories_by_categorie_id($result->id);
            }
            if($result){
                
                
                return $this->array_2d_to_1d($this->categorie_list_book);
            }
        }
        else{
            return $this->array_2d_to_1d($this->categorie_list_book);
        }
    }

    public $post_list = array();

    public function get_post_by_categories_id($categories , $limit = 4, $start = 0){
       // var_dump($categories);
        // foreach($categories as $categorie){
            $categorie_id = array();
            foreach($categories as $categorie){
                array_push($categorie_id , $categorie->id);
            }

            $this->db->where_in('categorie_id', $categorie_id);
            $this->db->limit($limit, $start);
            $this->db->order_by('modified_at', 'DESC');
            $results = $this->db->get('posts')->result();
            // if($results)
            // array_push($this->post_list , $results);

        // }

        // if($this->post_list){
        if($results){

            return ($results);
        }else{
            return false;
        }

    }

    public function get_count_posts($categories){
        $categorie_id = array();
        foreach($categories as $categorie){
            array_push($categorie_id , $categorie->id);
        }

        $this->db->where_in('categorie_id', $categorie_id);
        
        $this->db->order_by('modified_at', 'DESC');
        $results = $this->db->get('posts')->result();
        // if($results)
        // array_push($this->post_list , $results);

    // }

    // if($this->post_list){
        if($results){

            return count($results);
        }else{
            return 0;
        }
    }

    public $post_list_2 = array();
    public function get_post_by_categories_id_as($categories){
        // var_dump($categories);
        $categorie_id = array();
        foreach($categories as $categorie){
            array_push($categorie_id , $categorie->id);
        }

        $this->db->where_in('categorie_id', $categorie_id);
        
        $this->db->order_by('modified_at', 'DESC');
        $results = $this->db->get('posts')->result();
        // if($results)
        // array_push($this->post_list , $results);

    // }

    // if($this->post_list){
        if($results){

            return count($results);
        }else{
            return 0;
        }
 
     }

     public $post_list_3 = array();
     public function get_post_by_categories_id_asd($categories){
         $categorie_id = array();
         foreach($categories as $categorie){
             array_push($categorie_id , $categorie->id);
         }
 
         $this->db->where_in('categorie_id', $categorie_id);
         
         $this->db->order_by('modified_at', 'DESC');
         $results = $this->db->get('posts')->result();
         // if($results)
         // array_push($this->post_list , $results);
 
     // }
 
     // if($this->post_list){
         if($results){
 
             return count($results);
         }else{
             return 0;
         }
      }
   
    public $post_list1 = array();
    public function get_books_by_categories_id($categories ,$limit = 4, $start = 0){
        
        $categorie_id13 = array();
        foreach($categories as $categorie){
            array_push($categorie_id13 , $categorie->id);
        }

        $this->db->where_in('categorie_id', $categorie_id13);
        $this->db->limit($limit, $start);
        $this->db->order_by('modified_at', 'DESC');
        $results = $this->db->get('book')->result();
        // if($results)
        // array_push($this->post_list , $results);

    // }

    // if($this->post_list){
        if($results){

            return ($results);
        }else{
            return 0;
        }
 
     }

    public $post_categorie_list = array();
    public $first_exec_post = false;
    public function get_parent_categories_by_categorie_id($id){
        $this->db->where('id', $id);
        $results = $this->db->get('categories')->result();
     
        if($results){
           
            array_push($this->post_categorie_list , $results);
    
            
            foreach($results as $result){
                $this->get_parent_categories_by_categorie_id($result->parent_id);
            }
            if($result){
                
                
                return $this->array_2d_to_1d($this->post_categorie_list);
            }
        }
        else{
            return $this->array_2d_to_1d($this->post_categorie_list);
        }
    }

    public $book_categorie_list = array();
    public $first_exec_book = false;
    public function get_parent_book_categories_by_categorie_id($id){
        $this->db->where('id', $id);
        $results = $this->db->get('book_category')->result();
     
        if($results){
           
            array_push($this->book_categorie_list , $results);
    
            
            foreach($results as $result){
                $this->get_parent_book_categories_by_categorie_id($result->parent_id);
            }
            if($result){
                
                
                return $this->array_2d_to_1d($this->book_categorie_list);
            }
        }
        else{
            return $this->array_2d_to_1d($this->book_categorie_list);
        }
    }


    public function recent_posts_by_categorie_priority($categorie_id ,$post_id){      
        $query_set_1 = $this->db->query("SELECT * FROM posts WHERE categorie_id = '$categorie_id' AND NOT id = '$post_id' ORDER BY modified_at LIMIT 3 ")->result();
        
        if(count($query_set_1) < 3){
            $num =  (3 - count($query_set_1));
            $query_set_2 =   $this->db->query("SELECT * FROM posts WHERE NOT categorie_id = '$categorie_id' AND NOT id = '$post_id' ORDER BY  modified_at ASC LIMIT $num" )->result();
           
            return (array_merge($query_set_1 , $query_set_2));
        }

        return $query_set_1;
   
    }

    
    public function recent_books_by_categorie_priority($categorie_id ,$post_id){      
        $query_set_1 = $this->db->query("SELECT * FROM book WHERE categorie_id = '$categorie_id' AND NOT id = '$post_id' ORDER BY RAND() LIMIT 3 ")->result();
        
        if(count($query_set_1) < 3){
            $query_set_2 =   $this->db->query("SELECT * FROM book WHERE NOT categorie_id = '$categorie_id' AND NOT id = '$post_id' ORDER BY RAND() , modified_at ASC LIMIT 3" )->result();
           
            return (array_merge($query_set_1 , $query_set_2));
        }

        return $query_set_1;
   
    }

    public function get_popular_categorie(){
      
        $result = $this->db->query("  SELECT
                                        categorie_id , image , route_name  ,  COUNT(*) AS CountOf
                                        FROM posts
                                        GROUP BY categorie_id
                                        HAVING COUNT(*)>=1")->result();

        
        $popular_categorie_list = array();
       for($i=0; $i<3; $i++){
           $id = $result[$i]->categorie_id;
           $obj = ( $this->db->query("SELECT category , route_name FROM categories WHERE id = '$id' ")->row(1));
           $obj->image = $result[$i]->image;
           //$obj->route_name = $result[$i]->route_name;

         
        $popular_categorie_list[$i] = $obj;
       }

       return $popular_categorie_list;

    }
    public function get_popular_book_categorie(){
      
        $result = $this->db->query("  SELECT
                                        categorie_id , image   ,  COUNT(*) AS CountOf
                                        FROM book
                                        GROUP BY categorie_id
                                        HAVING COUNT(*)>=1")->result();

        
        $popular_categorie_list = array();
       for($i=0; $i<3; $i++){
           $id = $result[$i]->categorie_id;
           $obj = ( $this->db->query("SELECT category , route_name FROM book_category WHERE id = '$id' ")->row(1));
           $obj->image = $result[$i]->image;
           //$obj->route_name = $result[$i]->route_name;

         
        $popular_categorie_list[$i] = $obj;
       }

       return $popular_categorie_list;

    }

    

    public function get_recent_posts(){
      if($result = $this->db->query("SELECT * FROM posts ORDER BY  modified_at ASC LIMIT 3" )->result())
      {
          return $result;
      }
      return false;
    }

    public function get_recent_books(){
        if($result = $this->db->query("SELECT * FROM book ORDER BY  modified_at ASC LIMIT 3" )->result())
        {
            return $result;
        }
        return false;
      }

    public function get_recent_maps(){
        if($result = $this->db->query("SELECT * FROM maps ORDER BY  modified_at ASC LIMIT 3" )->result())
        {
            return $result;
        }
        return false;
    }  

    public function get_all_maps(){
        if($result = $this->db->query("SELECT * FROM maps ORDER BY  modified_at ASC" )->result())
        {
            return $result;
        }
        return false;
    }

    public function get_map_by_route_name($route_name){
        $this->db->where('route_name', $route_name);
        $result = $this->db->get('maps')->row(1);

        if($result){
            return $result;
        }else{
            return false;
        }
    }

    public function post_comment($id , $user_id){
        $data = array(

            'name' => $this->input->post('name'),
            'user_id' => $user_id,
            'post_id' => $id,
            'parent_id' => ($this->input->post('parent_id') == '') ? 0 : $this->input->post('parent_id') ,
            'email' => $this->input->post('email'),
            'body' => $this->input->post('body'),
            'modified_at' => date('Y-m-d H:i:s', time()),
        );

        if($this->db->insert('post_comment' , $data)){
            return true;
        }else{
            return false;
        }
    }


    public function get_comments($id){
        $this->db->where('post_id', $id);
        $root_comments = $this->db->get('post_comment')->result();

        if($root_comments){
            foreach($root_comments as $root_comment){
                $this->db->where('parent_id', $root_comment->id);
            }
            $replies_comment = $this->db->get('post_comment')->result();
            if($replies_comment){
                return array_merge($root_comments , $replies_comment);
            }
            return $root_comments;
        }
        return false;
    }

}