<?php namespace Anomaly\CommentsModule\Http\Controller\Admin;

use Anomaly\CommentsModule\Discussion\Table\DiscussionTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

/**
 * Class DiscussionsController
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\CommentsModule\Http\Controller\Admin
 */
class DiscussionsController extends AdminController
{

    /**
     * Return an index of discussions.
     *
     * @param DiscussionTableBuilder $table
     * @return \Illuminate\View\View|\Symfony\Component\HttpFoundation\Response
     */
    public function index(DiscussionTableBuilder $table)
    {
        return $table->render();
    }
}
