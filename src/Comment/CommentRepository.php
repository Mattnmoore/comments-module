<?php namespace Anomaly\CommentsModule\Comment;

use Anomaly\CommentsModule\Comment\Contract\CommentRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

/**
 * Class CommentRepository
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\CommentsModule\Comment
 */
class CommentRepository extends EntryRepository implements CommentRepositoryInterface
{

    /**
     * The comment model.
     *
     * @var CommentModel
     */
    protected $model;

    /**
     * Create a new CommentRepository instance.
     *
     * @param CommentModel $model
     */
    public function __construct(CommentModel $model)
    {
        $this->model = $model;
    }
}
