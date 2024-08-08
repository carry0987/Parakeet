<?php
namespace App\Controller;

class InstallController extends BaseController
{
    public function index()
    {
        $data = [
            'hello' => 'Install Page',
        ];

        $this->template->render(['header_common.html', 'install/view_install.html', 'footer_common.html'], $data);
    }
}
