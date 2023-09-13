<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListApiDestinationsResponseBody\data;

use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListApiDestinationsResponseBody\data\apiDestinations\httpApiParameters;
use AlibabaCloud\Tea\Model;

class apiDestinations extends Model
{
    /**
     * @description The name of the API destination.
     *
     * @example api-destination-2
     *
     * @var string
     */
    public $apiDestinationName;

    /**
     * @description The connection name.
     *
     * @example connection-name
     *
     * @var string
     */
    public $connectionName;

    /**
     * @description The description of the connection.
     *
     * @example demo
     *
     * @var string
     */
    public $description;

    /**
     * @description The time when the API destination was created.
     *
     * @example 1665223213000
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @description The request parameters that are configured for the API destination.
     *
     * @var httpApiParameters
     */
    public $httpApiParameters;
    protected $_name = [
        'apiDestinationName' => 'ApiDestinationName',
        'connectionName'     => 'ConnectionName',
        'description'        => 'Description',
        'gmtCreate'          => 'GmtCreate',
        'httpApiParameters'  => 'HttpApiParameters',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiDestinationName) {
            $res['ApiDestinationName'] = $this->apiDestinationName;
        }
        if (null !== $this->connectionName) {
            $res['ConnectionName'] = $this->connectionName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->httpApiParameters) {
            $res['HttpApiParameters'] = null !== $this->httpApiParameters ? $this->httpApiParameters->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return apiDestinations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiDestinationName'])) {
            $model->apiDestinationName = $map['ApiDestinationName'];
        }
        if (isset($map['ConnectionName'])) {
            $model->connectionName = $map['ConnectionName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['HttpApiParameters'])) {
            $model->httpApiParameters = httpApiParameters::fromMap($map['HttpApiParameters']);
        }

        return $model;
    }
}
