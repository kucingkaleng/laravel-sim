<?php

namespace ARA\LaravelSim\Utils\Builder;
use ARA\LaravelSim\Utils\Getter;

class Layout {
  
  // Json layout file
  protected $layout;

  protected $rendered;
  protected $shared;

  function __construct($layout) {
    $this->layout = $layout;
  }
  
  /**
   * Render object layout
   */
  public function renderLayout () {
    // If child is array
    if (is_array($this->layout)) {
      foreach ($this->layout as $value) {
        $this->rendered[] = $this->objectValidate($value);
      }
    }

    // If child is object 
    else if (is_object($this->layout)) {
      $this->rendered[] = $this->objectValidate($this->layout);
    }

    // If child is element key
    else if (substr($this->layout, 0, 1) == "$") {
      $this->rendered[] = $this->componentValidate($this->layout);
    }

    else {
      $this->rendered[] = "<pre>Json format error.</pre>";
    }

    foreach ($this->rendered as $value) {
      echo $value;
    }
  }

  /**
   * Validate object layout
   */
  protected function objectValidate ($object) {
    switch ($object->key) {
      // Row
      case 'row':
        return $this->getView('layouts.row', ['data' => $object, 'shared' => $this->shared]);
        break;

      // Column
      case 'col':
        return $this->getView('layouts.column', ['data' => $object, 'shared' => $this->shared]);
        break;
      
      // Card
      case 'card':
        return $this->getView('components.cards.card', ['data' => $object, 'shared' => $this->shared]);
      default:
        # code...
        break;
    }
  }

  /**
   * Validate element type
   */
  protected function componentValidate ($key) {
    switch ($key) {
      case '$list':
        return $this->getView('components.tables.data-table', ['data' => $this->shared->data, 'dataHeader' => $this->shared->dataHeader]);
        break;
      default:
        # code...
        break;
    }
  }

  /**
   * Shared data
   */
  public function sharedData ($data) {
    $this->shared = $data;
    return $this;
  }
  
  protected function getView ($page, $data) {
    return view()->first(['ara.laravel-sim.'.$page, 'LaravelSim::'.$page], $data);
  }
}