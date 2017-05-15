<?php namespace Edutalk\Base\Http\Controllers;

class SystemCommandController extends BaseAdminController
{
    protected $module = 'edutalk-core';

    /**
     * Call command composer dump-autoload
     * @return \Illuminate\Http\RedirectResponse
     */
    public function getCallDumpAutoload()
    {
        modules_management()->refreshComposerAutoload();
        flash_messages()
            ->addMessages('Composer autoload refreshed', 'success')
            ->showMessagesOnSession();

        return redirect()->back();
    }
}
