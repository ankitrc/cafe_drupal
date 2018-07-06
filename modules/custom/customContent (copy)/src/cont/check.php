<?php
	namespace Drupal\customContent\cont;
	use Drupal\Core\Controller\ControllerBase;
	use \Symfony\Component\HttpFoundation\Response;
	class check extends ControllerBase{

		// public function cart($val){
		// 	$cart = [];
		// 	// drupal_set_message($val.'eid');
		// 	$connection = conn::db_connect();
		// 	$query = $connection->query("SELECT f.uri, nr.title, price.entity_id, price.field_price_value, t.name FROM node__field_price as price INNER JOIN node_field_revision as nr ON nr.nid = price.entity_id INNER JOIN  node__field_category as category ON nr.nid = category.entity_id INNER JOIN taxonomy_term_field_data as t ON category.field_category_target_id = t.tid INNER JOIN node__field_images as i ON i.entity_id = price.entity_id  INNER JOIN file_managed as f ON i.field_images_target_id = f.fid where price.entity_id = '$val' ; ");
		// 	$y = [];
		// 	while($row = $query->fetchAssoc()){
				
		// 		$e = $row['entity_id'];
		// 		array_push($y,$row['title']);
		// 		array_push($y,file_create_url($row['uri']));
		// 		array_push($y,$row['field_price_value']);
		// 		array_push($y,$row['name']);
		// 		array_push($y,1);
		// 		array_push($y,$e);
		// 		// array_push($cart,$y);
		// 	}
		// 	if(!isset($_SESSION['cart'])){
		// 		$_SESSION['cart']  = array($val => $y);
		// 	}
		// 	else{
		// 		if(array_key_exists($val,$_SESSION['cart'])){
		// 			// foreach($_SESSION['car'][$val] as $i){
		// 			// 	drupal_set_message($i.'iiiii');
		// 			// }
		// 			$_SESSION['cart'][$val][4] += 1;
		// 			// drupal_set_message($_SESSION['cart'][$val][5]);
		// 		}
		// 		else{
		// 			$_SESSION['cart'][$val] = $y;
		// 		}
		// 	}
		
		// }


	


		public function control(){
			$data = '';
			if(isset($_POST['remove'])){
				$data .= $_POST['remove'];
				unset($_SESSION['cart'][$_POST['remove']]);
			}
			else{
				if(empty($_SESSION['cart'])){
					$_SESSION['cart'] = array($_POST['add'] => 1);
				}
				else{
					if(array_key_exists($_POST['add'],$_SESSION['cart'])){
						$_SESSION['cart'][$_POST['add']] += 1;
					}
					else{
						$_SESSION['cart'][$_POST['add']] = 1;
					}
				}
			}
			$data .= 'temporary';
			$build = array(
				'#type' => 'markup',
				'#markup' => $data,
			);
			return new Response(render($build));
		}
		
	}