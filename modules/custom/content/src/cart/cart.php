<?php
    namespace Drupal\content\cart1;
    use Drupal\Core\Controller\ControllerBase;
    class cart1 extends ControllerBase{
        public function control1(){
            
            if(empty($_SESSION['cart'])){
                drupal_set_message('empty cart');
            }
            return[
                '#theme' => 'cart',
                // '#htmls' => $htmls,
				'#data' => $_SESSION['cart'],
			];
        }
    }
