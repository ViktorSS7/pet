<?php


namespace API\Controller\Error;
use Smarty;

class Errors
{
    public function not_found(){
        $tpl = new Smarty();
        $tpl->assign('Report', array('status' => 404, 'text' => 'Route Not Found'));
        $tpl->display('API/Template/Error/error.tpl');
    }
}