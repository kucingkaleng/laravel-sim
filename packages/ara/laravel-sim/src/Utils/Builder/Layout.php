<?php

namespace ARA\LaravelSim\Utils\Builder;

class Layout {
  
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
      $this->rendered[] = $this->elementValidate($this->layout);
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
    if ($object->key == "row") {
      return $this->execute('layouts.row', ['data' => $object, 'shared' => $this->shared]);
    }
    else if ($object->key == "col") {
      return $this->execute('layouts.column', ['data' => $object, 'shared' => $this->shared]);
    }
    else if ($object->key == "card") {
      return $this->execute('components.cards.card', ['data' => $object, 'shared' => $this->shared]);
    }
  }

  /**
   * Validate element type
   */
  protected function elementValidate ($key) {
    if ($key == '$list') {
      return $this->execute('components.tables.data-table', ['data' => $this->shared->data, 'dataHeader' => $this->shared->dataHeader]);
    }
  }

  /**
   * Shared data
   */
  public function sharedData ($data) {
    $this->shared = $data;
    return $this;
  }
  
  protected function execute ($page, $data)
  {
    return view('LaravelSim::'.$page, $data);
  }
}