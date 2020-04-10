<?php

namespace SocialiteProviders\Wechat;

use SocialiteProviders\Manager\SocialiteWasCalled;

class WechatExtendSocialite
{
    /**
     * Register the provider.
     *
     * @param \SocialiteProviders\Manager\SocialiteWasCalled $socialiteWasCalled
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite(
            'wechat', __NAMESPACE__.'\Provider'
        );
    }
}
