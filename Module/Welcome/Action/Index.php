<?php
namespace X\Module\Welcome\Action;
use X\Service\XAction\Handler\WebPageAction;
class Index extends WebPageAction {
    /**
     * {@inheritDoc}
     * @see \X\Service\XAction\Util\Action::runAction()
     */
    protected function runAction() {
        $this->title = 'Welcome To Diabolo !';
        $this->layout = 'FullWidth';
        
        $this->addParticle('Index');
        $this->display();
    }
}
