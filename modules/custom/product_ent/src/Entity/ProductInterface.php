<?php

namespace Drupal\product_ent\Entity;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\RevisionLogInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface for defining Product entities.
 *
 * @ingroup product_ent
 */
interface ProductInterface extends ContentEntityInterface, RevisionLogInterface, EntityChangedInterface, EntityOwnerInterface {

  // Add get/set methods for your configuration properties here.

  /**
   * Gets the Product name.
   *
   * @return string
   *   Name of the Product.
   */
  public function getName();

  /**
   * Sets the Product name.
   *
   * @param string $name
   *   The Product name.
   *
   * @return \Drupal\product_ent\Entity\ProductInterface
   *   The called Product entity.
   */
  public function setName($name);

  /**
   * Gets the Product creation timestamp.
   *
   * @return int
   *   Creation timestamp of the Product.
   */
  public function getCreatedTime();

  /**
   * Sets the Product creation timestamp.
   *
   * @param int $timestamp
   *   The Product creation timestamp.
   *
   * @return \Drupal\product_ent\Entity\ProductInterface
   *   The called Product entity.
   */
  public function setCreatedTime($timestamp);

  /**
   * Returns the Product published status indicator.
   *
   * Unpublished Product are only visible to restricted users.
   *
   * @return bool
   *   TRUE if the Product is published.
   */
  public function isPublished();

  /**
   * Sets the published status of a Product.
   *
   * @param bool $published
   *   TRUE to set this Product to published, FALSE to set it to unpublished.
   *
   * @return \Drupal\product_ent\Entity\ProductInterface
   *   The called Product entity.
   */
  public function setPublished($published);

  /**
   * Gets the Product revision creation timestamp.
   *
   * @return int
   *   The UNIX timestamp of when this revision was created.
   */
  public function getRevisionCreationTime();

  /**
   * Sets the Product revision creation timestamp.
   *
   * @param int $timestamp
   *   The UNIX timestamp of when this revision was created.
   *
   * @return \Drupal\product_ent\Entity\ProductInterface
   *   The called Product entity.
   */
  public function setRevisionCreationTime($timestamp);

  /**
   * Gets the Product revision author.
   *
   * @return \Drupal\user\UserInterface
   *   The user entity for the revision author.
   */
  public function getRevisionUser();

  /**
   * Sets the Product revision author.
   *
   * @param int $uid
   *   The user ID of the revision author.
   *
   * @return \Drupal\product_ent\Entity\ProductInterface
   *   The called Product entity.
   */
  public function setRevisionUserId($uid);

}
