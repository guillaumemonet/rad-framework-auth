<?php

namespace Rad\Auth;

use Closure;
use Hybridauth\Hybridauth;
use Rad\Config\Config;

class HybridAuthHandler implements AuthInterface {

    private $hybridauth = null;

    public function __construct() {
        $config = Config::getServiceConfig('auth', 'hybrid');
        $this->hybridauth = new Hybridauth($config);
    }

    /**
     * @param string $provider
     */
    public function getProviderAuthentication(string $provider) {
        $adapter = $this->hybridauth->authenticate($provider);
        $user_profile = $adapter->getUserProfile();
    }

    public function getUserProfile(string $provider, Closure $closure) {
        $adapter = $this->hybridauth->authenticate($provider);
        $accessToken = $adapter->getAccessToken();
        $userProfile = $adapter->getUserProfile();
        call_user_func_array($closure, [$accessToken, $userProfile]);
    }

}
