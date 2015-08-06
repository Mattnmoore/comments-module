<?php namespace Anomaly\CommentsModule\Comment\Table\Action;

use Anomaly\CommentsModule\Comment\Contract\CommentRepositoryInterface;
use Illuminate\Contracts\Bus\SelfHandling;

/**
 * Class Approve
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\CommentsModule\Comment\Table\Action
 */
class Approve implements SelfHandling
{

    /**
     * Handle the action.
     *
     * @param CommentRepositoryInterface $repository
     * @param                            $selected
     */
    public function handle(CommentRepositoryInterface $repository, $selected)
    {
        foreach ($selected as $id) {

            $comment = $repository->find($id);

            $comment->approved = true;

            $repository->save($comment);
        }
    }
}
