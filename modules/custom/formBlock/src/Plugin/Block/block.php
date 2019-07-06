<?php
	namespace Drupal\formBlock\Plugin\Block;
	use Drupal\Core\Block\BlockBase;
	class block extends BlockBase {
		/**
		 * {@inheritdoc}
		 */
	  
		public function build() {
		  return array(
			'#type' => 'markup',
			'#markup' => 'This block list the article.',
		  );
		}
	  }