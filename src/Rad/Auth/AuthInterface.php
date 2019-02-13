<?php

namespace Rad\Auth;

interface AuthInterface {

    public function getProviderAuthentication(string $provider);

    public function getUserProfile(string $provider, Closure $closure);
}
