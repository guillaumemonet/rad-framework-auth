<?php

namespace Rad\Auth;

use Closure;

interface AuthInterface {

    public function getProviderAuthentication(string $provider);

    public function getUserProfile(string $provider, Closure $closure);
}
