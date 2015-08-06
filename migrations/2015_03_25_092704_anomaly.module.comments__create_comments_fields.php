<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

/**
 * Class AnomalyModuleCommentsCreateCommentsFields
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 */
class AnomalyModuleCommentsCreateCommentsFields extends Migration
{

    /**
     * The addon fields.
     *
     * @var array
     */
    protected $fields = [
        'user'       => 'anomaly.field_type.user',
        'name'       => 'anomaly.field_type.text',
        'email'      => 'anomaly.field_type.email',
        'comment'    => 'anomaly.field_type.textarea',
        'approved'   => 'anomaly.field_type.boolean',
        'subject'    => 'anomaly.field_type.polymorphic',
        'ip_address' => 'anomaly.field_type.text'
    ];

}
