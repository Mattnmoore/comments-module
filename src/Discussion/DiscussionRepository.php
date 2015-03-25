<?php namespace Anomaly\CommentsModule\Discussion;

use Anomaly\CommentsModule\Discussion\Contract\DiscussionRepositoryInterface;

/**
 * Class DiscussionRepository
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\CommentsModule\Discussion
 */
class DiscussionRepository implements DiscussionRepositoryInterface
{

    /**
     * The discussion model.
     *
     * @var DiscussionModel
     */
    protected $model;

    /**
     * Create a new DiscussionRepository instance.
     *
     * @param DiscussionModel $model
     */
    public function __construct(DiscussionModel $model)
    {
        $this->model = $model;
    }
}
