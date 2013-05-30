<?php
/**
 * @author  brooke.bryan
 */

namespace Bundl\Debugger;

use Cubex\Bundle\Bundle;
use Cubex\Events\EventManager;
use Cubex\Events\IEvent;

class DebuggerBundle extends Bundle
{
  public function init($initialiser = null)
  {
    EventManager::listen(
      EventManager::CUBEX_QUERY,
      function (IEvent $e)
      {
        var_dump($e->getStr("query"));
      }
    );
  }
}
