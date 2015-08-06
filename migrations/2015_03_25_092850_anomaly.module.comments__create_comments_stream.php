<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

/**
 * Class AnomalyModuleCommentsCreateCommentsStream
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 */
class AnomalyModuleCommentsCreateCommentsStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug' => 'comments'
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'name'       => [
            'required' => true
        ],
        'email'      => [
            'required' => true
        ],
        'comment'    => [
            'required' => true
        ],
        'subject'    => [
            'required' => true
        ],
        'ip_address' => [
            'required' => true
        ],
        'approved',
        'user'
    ];

}
