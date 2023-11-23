<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest;

use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\source\sourceDTSParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\source\sourceKafkaParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\source\sourceMNSParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\source\sourceMQTTParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\source\sourceRabbitMQParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\source\sourceRocketMQParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\source\sourceSLSParameters;
use AlibabaCloud\Tea\Model;

class source extends Model
{
    /**
     * @description The parameters that are configured if you specify the event source as Data Transmission Service (DTS).
     *
     * @var sourceDTSParameters
     */
    public $sourceDTSParameters;

    /**
     * @description The parameters that are configured if you specify the event source as Message Queue for Apache Kafka.
     *
     * @var sourceKafkaParameters
     */
    public $sourceKafkaParameters;

    /**
     * @description The parameters that are configured if you specify the event source as Message Service (MNS).
     *
     * @var sourceMNSParameters
     */
    public $sourceMNSParameters;

    /**
     * @description The parameters that are configured if you specify the event source as Message Queue for MQTT.
     *
     * @var sourceMQTTParameters
     */
    public $sourceMQTTParameters;

    /**
     * @description The parameters that are configured if you specify the event source as Message Queue for RabbitMQ.
     *
     * @var sourceRabbitMQParameters
     */
    public $sourceRabbitMQParameters;

    /**
     * @description The parameters that are configured if you specify the event source as Message Queue for Apache RocketMQ.
     *
     * @var sourceRocketMQParameters
     */
    public $sourceRocketMQParameters;

    /**
     * @description The parameters that are configured if you specify the event source as Simple Log Service.
     *
     * @var sourceSLSParameters
     */
    public $sourceSLSParameters;
    protected $_name = [
        'sourceDTSParameters'      => 'SourceDTSParameters',
        'sourceKafkaParameters'    => 'SourceKafkaParameters',
        'sourceMNSParameters'      => 'SourceMNSParameters',
        'sourceMQTTParameters'     => 'SourceMQTTParameters',
        'sourceRabbitMQParameters' => 'SourceRabbitMQParameters',
        'sourceRocketMQParameters' => 'SourceRocketMQParameters',
        'sourceSLSParameters'      => 'SourceSLSParameters',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceDTSParameters) {
            $res['SourceDTSParameters'] = null !== $this->sourceDTSParameters ? $this->sourceDTSParameters->toMap() : null;
        }
        if (null !== $this->sourceKafkaParameters) {
            $res['SourceKafkaParameters'] = null !== $this->sourceKafkaParameters ? $this->sourceKafkaParameters->toMap() : null;
        }
        if (null !== $this->sourceMNSParameters) {
            $res['SourceMNSParameters'] = null !== $this->sourceMNSParameters ? $this->sourceMNSParameters->toMap() : null;
        }
        if (null !== $this->sourceMQTTParameters) {
            $res['SourceMQTTParameters'] = null !== $this->sourceMQTTParameters ? $this->sourceMQTTParameters->toMap() : null;
        }
        if (null !== $this->sourceRabbitMQParameters) {
            $res['SourceRabbitMQParameters'] = null !== $this->sourceRabbitMQParameters ? $this->sourceRabbitMQParameters->toMap() : null;
        }
        if (null !== $this->sourceRocketMQParameters) {
            $res['SourceRocketMQParameters'] = null !== $this->sourceRocketMQParameters ? $this->sourceRocketMQParameters->toMap() : null;
        }
        if (null !== $this->sourceSLSParameters) {
            $res['SourceSLSParameters'] = null !== $this->sourceSLSParameters ? $this->sourceSLSParameters->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return source
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceDTSParameters'])) {
            $model->sourceDTSParameters = sourceDTSParameters::fromMap($map['SourceDTSParameters']);
        }
        if (isset($map['SourceKafkaParameters'])) {
            $model->sourceKafkaParameters = sourceKafkaParameters::fromMap($map['SourceKafkaParameters']);
        }
        if (isset($map['SourceMNSParameters'])) {
            $model->sourceMNSParameters = sourceMNSParameters::fromMap($map['SourceMNSParameters']);
        }
        if (isset($map['SourceMQTTParameters'])) {
            $model->sourceMQTTParameters = sourceMQTTParameters::fromMap($map['SourceMQTTParameters']);
        }
        if (isset($map['SourceRabbitMQParameters'])) {
            $model->sourceRabbitMQParameters = sourceRabbitMQParameters::fromMap($map['SourceRabbitMQParameters']);
        }
        if (isset($map['SourceRocketMQParameters'])) {
            $model->sourceRocketMQParameters = sourceRocketMQParameters::fromMap($map['SourceRocketMQParameters']);
        }
        if (isset($map['SourceSLSParameters'])) {
            $model->sourceSLSParameters = sourceSLSParameters::fromMap($map['SourceSLSParameters']);
        }

        return $model;
    }
}
