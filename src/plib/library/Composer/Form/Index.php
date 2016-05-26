<?php
// Copyright 1999-2016. Parallels IP Holdings GmbH.
namespace PleskExt\Composer\Form;


class Index extends \pm_Form_Simple
{
    protected $_isPost;
    protected $_cancelLink;

    /**
     * Setup form context.
     *
     * @param array $params
     */
    public function setContext(array $params = null)
    {
        $this->_cancelLink = isset($params['cancelLink']) ? $params['cancelLink'] : null;
    }

    /**
     * Form initialization.
     */
    public function init()
    {
        $this->addElement('note', 'description', [
            'value' => $this->lmsg('forms.index.description')
        ]);

        $this->addControlButtons([
            'cancelLink' => $this->_cancelLink,
        ]);
    }
}
