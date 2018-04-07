<?php
namespace Kanboard\Plugin\TaskMoveAnotherProjectColumn;

use Kanboard\Core\Plugin\Base;
use Kanboard\Plugin\TaskMoveAnotherProjectColumn\Action\TaskMoveAnotherProjectColumn;

class Plugin extends Base
{
    public function initialize()
    {
        $this->actionManager->register(new TaskMoveAnotherProjectColumn($this->container));
    }
    public function getPluginName()
    {
        return 'TaskMoveAnotherProjectColumn';
    }

    public function getPluginDescription()
    {
        return t('Move task to a column in another Project');
    }

    public function getPluginAuthor()
    {
        return 'Daniel Winters';
    }

    public function getPluginVersion()
    {
        return '0.0.1';
    }

    public function getPluginHomepage()
    {
        return 'https://github.com/dwinters42/kanboard-TaskMoveAnotherProjectColumn';
    }

    public function getCompatibleVersion()
    {
        return '>=1.0.44';
    }
}
