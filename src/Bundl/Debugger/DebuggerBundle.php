<?php
/**
 * @author  brooke.bryan
 */

namespace Bundl\Debugger;

use Cubex\Bundle\Bundle;
use Cubex\Events\EventManager;
use Cubex\Events\IEvent;
use Cubex\Log\Log;

class DebuggerBundle extends Bundle
{
  public function init($initialiser = null)
  {
    EventManager::listen(
      EventManager::CUBEX_QUERY,
      function (IEvent $e)
      {
        if(CUBEX_CLI)
        {
          Log::debug("Query: " . $e->getStr("query"));
        }
        else
        {
          var_dump($e->getStr("query"));
        }
      }
    );
  }
}
