<?php namespace Anomaly\CommentsModule;

use Anomaly\Streams\Platform\Addon\Module\Module;

/**
 * Class CommentsModule
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\CommentsModule
 */
class CommentsModule extends Module
{

    /**
     * The module icon.
     *
     * @var string
     */
    protected $icon = 'comments';

    /**
     * The addon sections.
     *
     * @var array
     */
    protected $sections = [
        'comments',
        'discussions'
    ];

}
