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
     * The navigation group.
     *
     * @var string
     */
    protected $navigation = 'streams::navigation.data';

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
