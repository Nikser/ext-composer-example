<?php

// Copyright 1999-2016. Parallels IP Holdings GmbH.
class IndexController extends pm_Controller_Action
{
    public function indexAction()
    {
        $this->view->pageTitle = $this->lmsg('controllers.index.title');
        $this->view->pageText = $this->lmsg('controllers.index.text');

        $this->view->form = new PleskExt\Composer\Form\Index(['context' => [
            'cancelLink' => pm_Context::getModulesListUrl(),
        ]]);

        if ($this->_request->isPost()) {
            $this->_redirect(pm_Context::getActionUrl('index', 'result'));
        }
    }

    public function resultAction()
    {
        $this->view->pageTitle = $this->lmsg('controllers.index.title');
        $this->view->pageText = $this->lmsg('controllers.index.text');

        $this->view->psr0 = \Composer_FirstClass::class;
        $this->view->psr4 = \PleskExt\Composer\SecondClass::class;
        $this->view->thirdPartyNamespace = \Zend\Memory\MemoryManager::class;
    }
}
