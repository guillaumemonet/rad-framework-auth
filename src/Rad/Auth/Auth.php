<?php

namespace Rad\Auth;

use Rad\Service\Service;

/**
 * Description of Auth.
 * @author Guillaume Monet
 */
final class Auth extends Service {

    public static function addHandler(string $handlerType, $handler) {
        static::getInstance()->addServiceHandler($handlerType, $handler);
    }

    public static function getHandler(string $handlerType = null): AuthInterface {
        return static::getInstance()->getServiceHandler($handlerType);
    }

    protected function getServiceType(): string {
        return 'auth';
    }

}
