<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetConnectionResponseBody\data\connections\authParameters\OAuthParameters\OAuthHttpParameters;

use AlibabaCloud\Tea\Model;

class headerParameters extends Model
{
    /**
     * @description Indicates whether authentication is enabled.
     *
     * @example false
     *
     * @var string
     */
    public $isValueSecret;

    /**
     * @description The key of the request header.
     *
     * @example keyDemo
     *
     * @var string
     */
    public $key;

    /**
     * @description The value of the request header.
     *
     * @example keyDemo
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'isValueSecret' => 'IsValueSecret',
        'key'           => 'Key',
        'value'         => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isValueSecret) {
            $res['IsValueSecret'] = $this->isValueSecret;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return headerParameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsValueSecret'])) {
            $model->isValueSecret = $map['IsValueSecret'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
