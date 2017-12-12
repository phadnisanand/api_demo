<?php

namespace Drupal\modal_example\Controller;

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

/**
 * Handles page returns for tour tip.  
 */
class ModalExampleController extends ControllerBase  {

     public function showdemo() { 
	        $build = array();
	        $build['no_data'] = [
		        '#type' => 'markup',
		        '#markup' => '<img alt="" class="image-style-large" src="http://localhost:8888/drupal8/sites/default/files/styles/large/public/2017-12/images.jpg" typeof="foaf:Image" />',
		    ];
     	 	return $build;
     }

     public function modalContent()
     {
	        $build['no_data'] = [
		        '#type' => 'markup',
		        '#markup' => '<a class="use-ajax" data-dialog-options="{&quot;width&quot;:300,&quot;height&quot;:300}" data-dialog-type="modal" href="/drupal8/modal-demo">demo model content.</a>',
		    ];
	        return $build;  	   
     }

     public function showcustomdemo()
     {
     		
     		return [
		      '#type' => 'link',
		      '#title' => $this->t('Some text'),
		      '#url' => Url::fromRoute('modal-demo-example_content', [], ['query' => $this->getDestinationArray()]),
		      '#options' => ['attributes' => [
		        'class' => ['use-ajax'],
		        'data-dialog-type' => 'modal',
		        'data-dialog-options' => Json::encode([
		          'width' => 700,
		        ]),
		      ]],
		      '#attached' => ['library' => ['core/drupal.dialog.ajax']],
		    ];
     }
    
}
