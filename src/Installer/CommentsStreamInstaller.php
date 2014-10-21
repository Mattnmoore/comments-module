<?php namespace Anomaly\Streams\Module\Comments\Installer;

use Streams\Core\Stream\Installer\StreamInstaller;

class CommentsStreamInstaller extends StreamInstaller
{
    /**
     * The stream field assignments definitions.
     *
     * @var array
     */
    protected $assignments = array(
        'comment' => ['is_required' => true],
        'entry'   => ['is_required' => true],
    );
}
