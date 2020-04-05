<?php

namespace ARA\LaravelSim\Utils;

class BuildMe {

  protected $context;
  protected $type;
  protected $view;

  /**
   * Shared data
   */
  protected $data;
  protected $dataHeader;

  /**
   * Layouts
   */
  protected $layout;


  /**
   * Class Constructor
   */
  function __construct ($what = 'page') {
    $this->context = $what;
  }

  /**
   * Set page type to login page
   */
  function loginPage ($version = 'v1') {
    $this->type = 'login';
    return $this;
  }

  /**
   * Set page type to list page
   */
  function listPage () {
    $this->type = 'list';
    return $this;
  }

  /**
   * Shared Data Management
   */

  /**
   * Generate data to render
   * @param mixed $data
   * @param array $dataHeader
   */
  function dataToRender ($data, $dataHeader = null) {
    $this->data = $data;

    if ($dataHeader) {
      $this->dataHeader = $dataHeader;
    }

    return $this;
  }

  /**
   * Renderer
   */

  /**
   * Get template view
   */
  function getTemplate () {
    switch ($this->type) {
      case 'login':
        $this->view = 'login';
        break;
      case 'list':
        $this->view = 'templates.list';
        break;
      default:
        $this->view = 'templates.list';
    }

    return $this;
  }

  public function useLayout (array $layout) {
    $this->layout = $layout;
    return $this;
  }

  public function buildNow () {
    $viewNamespace = 'LaravelSim';

    $this->getTemplate();

    // Static page
    if (empty($this->data)) {
      return view($viewNamespace.'::'.$this->view);
    }

    // Dynamic page
    $data = [
      'shared' => (object) [
        'data' => $this->data,
        'dataHeader' => $this->dataHeader,
        'layout' => $this->layout,
        'sidebar' => $this->getSidebarItems()
      ]
    ];

    return view($viewNamespace.'::'.$this->view, $data);
  }

  private function getSidebarItems () {
    $menus = json_decode(file_get_contents(__DIR__.'/Dummy/menu.json'));
    return $menus;
  }

  public function sidebar ($items) {
    return Getter::getView('components.sidebar', ['items' => $items]);
  }

  public function sidebarItems ($item) {
    return Getter::getView('components.sidebarItems', ['item' => $item]);
  }

}