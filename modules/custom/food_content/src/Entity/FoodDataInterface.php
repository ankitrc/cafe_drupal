<?php

namespace Drupal\food_content\Entity;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\RevisionLogInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface for defining Food data entities.
 *
 * @ingroup food_content
 */
interface FoodDataInterface extends ContentEntityInterface, RevisionLogInterface, EntityChangedInterface, EntityOwnerInterface {

  // Add get/set methods for your configuration properties here.

  /**
   * Gets the Food data name.
   *
   * @return string
   *   Name of the Food data.
   */
  public function getName();

  /**
   * Sets the Food data name.
   *
   * @param string $name
   *   The Food data name.
   *
   * @return \Drupal\food_content\Entity\FoodDataInterface
   *   The called Food data entity.
   */
  public function setName($name);

  /**
   * Gets the Food data creation timestamp.
   *
   * @return int
   *   Creation timestamp of the Food data.
   */
  public function getCreatedTime();

  /**
   * Sets the Food data creation timestamp.
   *
   * @param int $timestamp
   *   The Food data creation timestamp.
   *
   * @return \Drupal\food_content\Entity\FoodDataInterface
   *   The called Food data entity.
   */
  public function setCreatedTime($timestamp);

  /**
   * Returns the Food data published status indicator.
   *
   * Unpublished Food data are only visible to restricted users.
   *
   * @return bool
   *   TRUE if the Food data is published.
   */
  public function isPublished();

  /**
   * Sets the published status of a Food data.
   *
   * @param bool $published
   *   TRUE to set this Food data to published, FALSE to set it to unpublished.
   *
   * @return \Drupal\food_content\Entity\FoodDataInterface
   *   The called Food data entity.
   */
  public function setPublished($published);

  /**
   * Gets the Food data revision creation timestamp.
   *
   * @return int
   *   The UNIX timestamp of when this revision was created.
   */
  public function getRevisionCreationTime();

  /**
   * Sets the Food data revision creation timestamp.
   *
   * @param int $timestamp
   *   The UNIX timestamp of when this revision was created.
   *
   * @return \Drupal\food_content\Entity\FoodDataInterface
   *   The called Food data entity.
   */
  public function setRevisionCreationTime($timestamp);

  /**
   * Gets the Food data revision author.
   *
   * @return \Drupal\user\UserInterface
   *   The user entity for the revision author.
   */
  public function getRevisionUser();

  /**
   * Sets the Food data revision author.
   *
   * @param int $uid
   *   The user ID of the revision author.
   *
   * @return \Drupal\food_content\Entity\FoodDataInterface
   *   The called Food data entity.
   */
  public function setRevisionUserId($uid);

}
