<?php

declare(strict_types = 1);

namespace Drupal\gql_api\Wrappers\Response;

use Drupal\Core\Entity\EntityInterface;
use Drupal\graphql\GraphQL\Response\Response;

/**
 * Type of response used when a listing is returned.
 */
class ListingResponse extends Response {

  /**
   * The listing to be served.
   *
   * @var \Drupal\Core\Entity\EntityInterface|null
   */
  protected $listing;

  /**
   * Sets the content.
   *
   * @param \Drupal\Core\Entity\EntityInterface|null $listing
   *   The listing to be served.
   */
  public function setListing(?EntityInterface $listing): void {
    $this->listing = $listing;
  }

  /**
   * Gets the listing to be served.
   *
   * @return \Drupal\Core\Entity\EntityInterface|null
   *   The listing to be served.
   */
  public function listing(): ?EntityInterface {
    return $this->listing;
  }

}
