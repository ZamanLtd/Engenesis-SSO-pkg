<?php

namespace ZamanTech\Sso\Http\Controllers;

use ZamanTech\Sso\Http\Requests\SsoWebhookRequest;

abstract class SsoWebhook
{
    public function updateUserInfo(SsoWebhookRequest $request)
    {
        $validated = $request->validated();
        $this->updateInfo($validated['user']);

        return 'OK';
    }

    abstract public function updateInfo($user);
}
