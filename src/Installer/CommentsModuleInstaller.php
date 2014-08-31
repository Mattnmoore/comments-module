<?php namespace Streams\Addon\Module\Comments\Installer;

use Streams\Core\Addon\Installer\ModuleInstallerAbstractAbstract;

class CommentsModuleInstaller extends ModuleInstallerAbstractAbstract
{
    /**
     * Streams to install.
     *
     * @var array
     */
    protected $streams = [
        'comments',
    ];

    /**
     * The stream fields definitions.
     *
     * @var array
     */
    protected $fields = [
        'comment' => [
            'type' => 'textarea',
        ],
        'entry'   => [
            'type' => 'polymorphic',
        ],
    ];
}
