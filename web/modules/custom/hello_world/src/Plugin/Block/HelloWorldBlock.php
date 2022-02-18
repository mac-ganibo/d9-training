<?php
namespace Drupal\hello_world\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides 'Hello world block'.
 * 
 * @Block(
 *   id = "hello_world_block",
 *   admin_label = @Translation("Hello world block"),
 *   category = @Translation("Hello world block"),  
 * )
 */
class HelloWorldBlock extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function build() {
    return [
      '#markup' => $this->t('Hello, World!'),
    ];
  }
}

