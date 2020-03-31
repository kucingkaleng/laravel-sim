<?php

namespace ARA\LaravelSim\Modules\Lobby\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use ARA\LaravelSim\Utils\BuildMe;
use ARA\LaravelSim\Utils\Dummy;

class LobbyController extends Controller
{
  function __construct () {
    $this->Dummy = new Dummy;
  }

  public function index () {
    return 'Hello World';
  }

  public function signin () {
    $BuildMe = new BuildMe('page');
    $BuildMe->loginPage('v1');
    return $BuildMe->buildNow();
  }

  public function list () {
    $layout = $this->Dummy->layout;

    $BuildMe = new BuildMe('page');
    $BuildMe->listPage();
    $BuildMe->dataToRender($this->Dummy->getArray()->data, $this->Dummy->getArray()->dataHeader);
    
    $BuildMe->useLayout($layout);
    
    return $BuildMe->buildNow();
  }
}
