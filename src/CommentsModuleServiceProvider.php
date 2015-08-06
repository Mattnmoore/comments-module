<?php namespace Anomaly\CommentsModule;

use Anomaly\CommentsModule\Comment\CommentRepository;
use Anomaly\CommentsModule\Comment\Contract\CommentRepositoryInterface;
use Anomaly\CommentsModule\Http\Controller\Admin\CommentsController;
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
     * The addon singletons.
     *
     * @var array
     */
    protected $singletons = [
        CommentRepositoryInterface::class => CommentRepository::class
    ];

    /**
     * The addon routes.
     *
     * @var array
     */
    protected $routes = [
        'admin/comments' => CommentsController::class
    ];

}
