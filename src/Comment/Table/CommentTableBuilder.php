<?php namespace Anomaly\CommentsModule\Comment\Table;

use Anomaly\CommentsModule\Comment\Table\Action\Approve;
use Anomaly\Streams\Platform\Ui\Table\TableBuilder;

/**
 * Class CommentTableBuilder
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\CommentsModule\Comment\Table
 */
class CommentTableBuilder extends TableBuilder
{

    /**
     * The table filters.
     *
     * @var array
     */
    protected $filters = [
        'name',
        'email',
        'comment',
        'approved'
    ];

    /**
     * The table columns.
     *
     * @var array
     */
    protected $columns = [
        'name',
        'email',
        'comment',
        'entry.approved.icon'
    ];

    /**
     * The table actions.
     *
     * @var array
     */
    protected $actions = [
        'delete',
        'approve' => [
            'button'  => 'green',
            'text'    => 'Approve',
            'handler' => Approve::class
        ]
    ];

}
