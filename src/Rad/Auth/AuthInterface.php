<?php

namespace Rad\Auth;

interface AuthInterface {

    public function getProviderAuthentication($provider);

    public function getUserProfile();
}
