<?php namespace Anomaly\CommentsModule\Http\Controller\Admin;

use Anomaly\CommentsModule\Comment\Table\CommentTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

/**
 * Class CommentsController
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\CommentsModule\Http\Controller\Admin
 */
class CommentsController extends AdminController
{

    /**
     * Return an index of comments.
     *
     * @param CommentTableBuilder $table
     * @return \Illuminate\View\View|\Symfony\Component\HttpFoundation\Response
     */
    public function index(CommentTableBuilder $table)
    {
        return $table->render();
    }
}
