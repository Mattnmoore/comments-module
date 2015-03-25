<?php namespace Anomaly\CommentsModule\Comment;

use Anomaly\CommentsModule\Comment\Contract\CommentInterface;
use Anomaly\Streams\Platform\Model\Comments\CommentsCommentsEntryModel;

/**
 * Class CommentModel
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\CommentsModule\Comment
 */
class CommentModel extends CommentsCommentsEntryModel implements CommentInterface
{

}
