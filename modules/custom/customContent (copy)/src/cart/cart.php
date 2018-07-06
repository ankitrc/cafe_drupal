<?php
    namespace Drupal\customContent\cart;
    use Drupal\Core\Controller\ControllerBase;
    use Drupal\customContent\forms\conn;
    class cart extends ControllerBase{

        public function cart(){
            if(empty($_SESSION['cart'])){
                return 0;
            }
            $cart = [];
            $connection = conn::db_connect();
                
            foreach($_SESSION['cart'] as $key => $value){
                $temp = $_SESSION['cart'];
                $query = $connection->query("SELECT f.uri, nr.title, price.entity_id, price.field_price_value, t.name FROM node__field_price as price INNER JOIN node_field_revision as nr ON nr.nid = price.entity_id INNER JOIN  node__field_category as category ON nr.nid = category.entity_id INNER JOIN taxonomy_term_field_data as t ON category.field_category_target_id = t.tid INNER JOIN node__field_images as i ON i.entity_id = price.entity_id  INNER JOIN file_managed as f ON i.field_images_target_id = f.fid where price.entity_id = '$key' ; ");


                $y = [];
                while($row = $query->fetchAssoc()){
                    
                    $e = $row['entity_id'];
                    array_push($y,$row['title']);
                    array_push($y,file_create_url($row['uri']));
                    array_push($y,$row['field_price_value']);
                    array_push($y,$row['name']);
                    array_push($y,$_SESSION['cart'][$e]);
                    array_push($y,$e);
                    array_push($cart,$y);
                }
                
                
            }
            return $cart;
		}
        public function control(){

            if(empty($_SESSION['cart'])){
                drupal_set_message('empty cart');
            }
            // if(empty($cart)){
            //     drupal_set_message('wrong query');
            // }
            
            $cart = $this->cart();
            return[
                '#theme' => 'cart',
                // '#htmls' => $htmls,
				'#data' => $cart,
			];
        }
    }