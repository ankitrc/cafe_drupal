<?php
	namespace Drupal\customContent\cont;
	use Drupal\Core\Controller\ControllerBase;
	use Drupal\customContent\forms\frm;
	use Drupal\customContent\forms\conn;
	class display extends ControllerBase {
		
		public function operation(){
			$connection = conn::db_connect();
			$x = [];
			$query = $connection->query("SELECT f.uri, nr.title, price.entity_id, price.field_price_value, t.name FROM node__field_price as price INNER JOIN node_field_revision as nr ON nr.nid = price.entity_id INNER JOIN  node__field_category as category ON nr.nid = category.entity_id INNER JOIN taxonomy_term_field_data as t ON category.field_category_target_id = t.tid INNER JOIN node__field_images as i ON i.entity_id = price.entity_id  INNER JOIN file_managed as f ON i.field_images_target_id = f.fid order by t.name; ");
			while($row = $query->fetchAssoc()){
				$y = [];
				$e = $row['entity_id'];
				array_push($y,$row['title']);
				array_push($y,file_create_url($row['uri']));
				array_push($y,$row['field_price_value']);
				array_push($y,$row['name']);
				array_push($y,$e);
				array_push($x,$y);
			}
			return $x;
		}
		public function control(){
			// if(isset($_POST['data'])){
			// 	$this->cart($_POST['data']);
			// 	return;
			// }
			$render_form = \Drupal::formBuilder()->getForm('Drupal\customContent\forms\frm');
			$renderer = \Drupal::service('renderer');
			$htmls = $renderer->render($render_form);
			if(isset($_SESSION['xx'])){
				$x = $_SESSION['xx'];
				unset($_SESSION['xx']);
			}
			else{
				$x = $this->operation();
			}
			return [
				'#theme' => 'my_template',
				'#test_var' => $this->t('Test Value'),
				'#a' => $x,
				// '#categ' => $categ,
				'#htmls' => $htmls,

				// '#s' => $s1,

				// '#attached' => array(
				// 	'library' => array(
				// 	  'customContent/basics',
				// 	),
				//   ),
			];
		}
	}