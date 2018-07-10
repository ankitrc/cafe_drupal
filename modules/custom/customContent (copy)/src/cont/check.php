<?php
	namespace Drupal\customContent\cont;
	use Drupal\Core\Controller\ControllerBase;
	use \Symfony\Component\HttpFoundation\Response;
	use Drupal\customContent\forms\conn;
	class check extends ControllerBase{
		public function productName($entity_id){
				$connection = conn::db_connect();
				$query = $connection->query("SELECT nr.title FROM node_field_revision as nr WHERE nr.nid = $entity_id; ");
				$data = $query->fetchAssoc();
				return $data['title'];
		}
		public function control(){
			$data = '';
			if(isset($_POST['remove'])){
				// $data .= $_POST['remove'];
				unset($_SESSION['cart'][$_POST['remove']]);
				// drupal_set_message('removed from cart');
				$data .= 'removed from cart';
			}
			else{
				$data .= $this->productName($_POST['add']).' added to cart';
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
			// $data .= 'temporary';
			$build = array(
				'#type' => 'markup',
				'#markup' => $data,
			);
			return new Response(render($build));
		}

	}
