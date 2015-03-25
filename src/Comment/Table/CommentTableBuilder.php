<?php namespace Anomaly\CommentsModule\Comment\Table;

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
     * The table columns.
     *
     * @var array
     */
    protected $columns = [
        'discussion',
        'comment'
    ];

    /**
     * The table actions.
     *
     * @var array
     */
    protected $actions = [
        'delete',
        'approve' => [
            'button' => 'green',
            'text'   => 'Approve'
        ]
    ];

}
