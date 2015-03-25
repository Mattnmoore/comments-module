<?php namespace Anomaly\CommentsModule;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;

/**
 * Class CommentsModuleServiceProvider
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\CommentsModule
 */
class CommentsModuleServiceProvider extends AddonServiceProvider
{

    /**
     * The addon routes.
     *
     * @var array
     */
    protected $routes = [
        'admin/comments'             => 'Anomaly\CommentsModule\Http\Controller\Admin\CommentsController@index',
        'admin/comments/discussions' => 'Anomaly\CommentsModule\Http\Controller\Admin\DiscussionsController@index'
    ];

}
