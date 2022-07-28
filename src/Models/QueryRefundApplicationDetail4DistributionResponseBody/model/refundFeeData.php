<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20220531\Models\QueryRefundApplicationDetail4DistributionResponseBody\model;

use AlibabaCloud\Tea\Model;

class refundFeeData extends Model
{
    /**
     * @var int
     */
    public $maxRefundFee;

    /**
     * @var int
     */
    public $minRefundFee;
    protected $_name = [
        'maxRefundFee' => 'MaxRefundFee',
        'minRefundFee' => 'MinRefundFee',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxRefundFee) {
            $res['MaxRefundFee'] = $this->maxRefundFee;
        }
        if (null !== $this->minRefundFee) {
            $res['MinRefundFee'] = $this->minRefundFee;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return refundFeeData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxRefundFee'])) {
            $model->maxRefundFee = $map['MaxRefundFee'];
        }
        if (isset($map['MinRefundFee'])) {
            $model->minRefundFee = $map['MinRefundFee'];
        }

        return $model;
    }
}
