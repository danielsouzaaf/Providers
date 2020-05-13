<?php

namespace SocialiteProviders\Suap;

use SocialiteProviders\Manager\SocialiteWasCalled;

class SuapExtendSocialite
{
    /**
     * Execute the provider.
     * @param SocialiteWasCalled $socialiteWasCalled
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('suap', __NAMESPACE__.'\Provider');
    }
}
