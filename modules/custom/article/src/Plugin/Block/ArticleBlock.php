<?php
/**
 * @file
 * Contains \Drupal\article\Plugin\Block\XaiBlock.
 */
namespace Drupal\article\Plugin\Block;
use Drupal\Core\Block\BlockBase;
use Drupal\content\forms\frm;
/**
 * Provides a 'article' block.
 *
 * @Block(
 *   id = "article_block",
 *   admin_label = @Translation("Article block"),
 *   category = @Translation("Custom article block example")
 * )
 */
class ArticleBlock extends BlockBase {
  /**
   * {@inheritdoc}
   */

  public function build() {
    // return array(
    //   '#type' => 'markup',
    //   '#markup' => 'This block list the article.',
    // );
    return \Drupal::formBuilder()->getForm('Drupal\content\forms\frm');
    // return \Drupal::formBuilder()->getForm('Drupal\content\forms\frm');
  }
}
