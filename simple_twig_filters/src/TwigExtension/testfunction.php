<?php
namespace Drupal\simple_twig_filters\TwigExtension;
class testfunction extends \Twig_Extension {    
 
  /**
   * Generates a list of all Twig filters that this extension defines.
   */
  public function getFilters() {
    return [
      new \Twig_SimpleFilter('test1', array($this, 'testfunction1')),
    ];
  }
 
  /**
   * Gets a unique identifier for this Twig extension.
   */
  public function getName() {
    return 'simple_twig_filters.twig_extension';
  }
  
  /**
   * Replaces all numbers from the string.
   */
   
  public static function testdunction1($value) {
   $value = 'test function2'.$value;  
    return $value;
  }
}
/* use it in twig themes {{ 'some value' | test1 }} */
