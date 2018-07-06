<?php
	namespace Drupal\content\cont1;
	use Drupal\Core\Controller\ControllerBase;
	use Drupal\content\forms1\frm1;
	use Drupal\content\forms1\conn1;
	class display1 extends ControllerBase {
		public static $n = [];
		public function cart($val){
			$cart = [];
			// drupal_set_message($val.'eid');
			$connection = conn::db_connect();
			$query = $connection->query("SELECT f.uri, nr.title, price.entity_id, price.field_price_value, t.name FROM node__field_price as price INNER JOIN node_field_revision as nr ON nr.nid = price.entity_id INNER JOIN  node__field_category as category ON nr.nid = category.entity_id INNER JOIN taxonomy_term_field_data as t ON category.field_category_target_id = t.tid INNER JOIN node__field_images as i ON i.entity_id = price.entity_id  INNER JOIN file_managed as f ON i.field_images_target_id = f.fid where price.entity_id = '$val' ; ");
			$y = [];
			while($row = $query->fetchAssoc()){
				
				$e = $row['entity_id'];
				array_push($y,$row['title']);
				array_push($y,file_create_url($row['uri']));
				array_push($y,$row['field_price_value']);
				array_push($y,$row['name']);
				array_push($y,1);
				array_push($y,$e);
				// array_push($cart,$y);
			}
			if(!isset($_SESSION['cart'])){
				$_SESSION['cart']  = array($val => $y);
			}
			else{
				if(array_key_exists($val,$_SESSION['cart'])){
					// foreach($_SESSION['car'][$val] as $i){
					// 	drupal_set_message($i.'iiiii');
					// }
					$_SESSION['cart'][$val][4] += 1;
					// drupal_set_message($_SESSION['cart'][$val][5]);
				}
				else{
					$_SESSION['cart'][$val] = $y;
				}
			}
		
		}
		public function operation(){
			$connection = conn::db_connect();
			// $x = ['hell'];
			// if(isset($_POST['sub'])){
			$x = [];
			// $renderer = \Drupal::service('renderer');
			// $s = \Drupal::formBuilder()->getForm('Drupal\content\sub\submission');
			// $s1 = $renderer->render($s);
			$query = $connection->query("SELECT f.uri, nr.title, price.entity_id, price.field_price_value, t.name FROM node__field_price as price INNER JOIN node_field_revision as nr ON nr.nid = price.entity_id INNER JOIN  node__field_category as category ON nr.nid = category.entity_id INNER JOIN taxonomy_term_field_data as t ON category.field_category_target_id = t.tid INNER JOIN node__field_images as i ON i.entity_id = price.entity_id  INNER JOIN file_managed as f ON i.field_images_target_id = f.fid order by t.name; ");
			while($row = $query->fetchAssoc()){
				$y = [];
				$e = $row['entity_id'];
				// array_push($categ,$row['name']);
				// $s = \Drupal::formBuilder()->getForm('Drupal\content\sub\submission');
				// $s['actions']['submit']['#name'] = $e;
				// $s['actions']['submit']['#name'] = $e;
				// drupal_set_message($s['actions']['submit']['#name'].'hello');
				// $s1 = $renderer->render($s);
				// drupal_set_message($s1);
				array_push($y,$row['title']);
				array_push($y,file_create_url($row['uri']));
				array_push($y,$row['field_price_value']);
				array_push($y,$row['name']);
				array_push($y,$e);
				array_push($x,$y);
				// $n += 1;
				array_push(display::$n,$e);
				// drupal_set_message($e);
			}
			// drupal_set_message('okk');
			$_SESSION['n'] = display::$n;
			// foreach($_SESSION['n'] as $e){
			// 	drupal_set_message($e.'pk');
			// }
			
			// drupal_set_message($n.'msg');
			// }

			return $x;
		}
		public function control(){

			// $connection = \Drupal::database();
			$render_form = \Drupal::formBuilder()->getForm('Drupal\content\forms\frm');
			$renderer = \Drupal::service('renderer');
			$htmls = $renderer->render($render_form);
			// $x = $_SESSION['xx'];

			// if(empty(frm::$x)){
			// 	$x = $this->operation();
			// }
			// else{
			// 	drupal_set_message('okkk');
			// 	$x = $_SESSION['x'];
			// }
			foreach ($_SESSION['n'] as $value) {
				if(isset($_POST[$value])){
					// drupal_set_message($_POST[$value].'test');
					$this->cart($_POST[$value]);
				}
			}
			// unset($_SESSION['cart']);
			if(isset($_SESSION['xx'])){
				$x = $_SESSION['xx'];
				unset($_SESSION['xx']);
			}
			else{
			// drupal_set_message('yuppps');
				$x = $this->operation();
			}
			return [
				'#theme' => 'my_template',
				'#test_var' => $this->t('Test Value'),
				'#a' => $x,
				// '#categ' => $categ,
				'#htmls' => $htmls,
				// '#s' => $s1,
			];
		}
	}
