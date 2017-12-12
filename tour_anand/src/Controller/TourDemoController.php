<?php

namespace Drupal\tour_anand\Controller;

use Drupal\Component\Serialization\Json;
use Drupal\Core\Block\BlockBase;
use Drupal\Core\Entity\EntityRepositoryInterface;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Link;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Drupal\Core\Url;
use Drupal\file\Entity\File;
use Drupal\node\Entity\Node;
use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\tour_anand\Utility\DescriptionTemplateTrait;

/**
 * Controller routines for tour example routes.
 *
 * This is where our tour page is defined.
 *
 * @ingroup tour_example
 */
class TourDemoController extends ControllerBase  {
  use DescriptionTemplateTrait;
  /**
   * {@inheritdoc}
   */
  protected function getModuleName() {
    return 'tour_anand';
  }
  


}
