<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20220531\Models\InitApplyRefund4DistributionResponseBody;

use AlibabaCloud\SDK\Linkedmall\V20220531\Models\InitApplyRefund4DistributionResponseBody\model\maxRefundFeeData;
use AlibabaCloud\SDK\Linkedmall\V20220531\Models\InitApplyRefund4DistributionResponseBody\model\refundReasonList;
use AlibabaCloud\Tea\Model;

class model_ extends Model
{
    /**
     * @var int
     */
    public $bizClaimType;

    /**
     * @var bool
     */
    public $mainOrderRefund;

    /**
     * @var maxRefundFeeData
     */
    public $maxRefundFeeData;

    /**
     * @var refundReasonList[]
     */
    public $refundReasonList;

    /**
     * @var string
     */
    public $subDistributionOrderId;
    protected $_name = [
        'bizClaimType'           => 'BizClaimType',
        'mainOrderRefund'        => 'MainOrderRefund',
        'maxRefundFeeData'       => 'MaxRefundFeeData',
        'refundReasonList'       => 'RefundReasonList',
        'subDistributionOrderId' => 'SubDistributionOrderId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizClaimType) {
            $res['BizClaimType'] = $this->bizClaimType;
        }
        if (null !== $this->mainOrderRefund) {
            $res['MainOrderRefund'] = $this->mainOrderRefund;
        }
        if (null !== $this->maxRefundFeeData) {
            $res['MaxRefundFeeData'] = null !== $this->maxRefundFeeData ? $this->maxRefundFeeData->toMap() : null;
        }
        if (null !== $this->refundReasonList) {
            $res['RefundReasonList'] = [];
            if (null !== $this->refundReasonList && \is_array($this->refundReasonList)) {
                $n = 0;
                foreach ($this->refundReasonList as $item) {
                    $res['RefundReasonList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->subDistributionOrderId) {
            $res['SubDistributionOrderId'] = $this->subDistributionOrderId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return model_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizClaimType'])) {
            $model->bizClaimType = $map['BizClaimType'];
        }
        if (isset($map['MainOrderRefund'])) {
            $model->mainOrderRefund = $map['MainOrderRefund'];
        }
        if (isset($map['MaxRefundFeeData'])) {
            $model->maxRefundFeeData = maxRefundFeeData::fromMap($map['MaxRefundFeeData']);
        }
        if (isset($map['RefundReasonList'])) {
            if (!empty($map['RefundReasonList'])) {
                $model->refundReasonList = [];
                $n                       = 0;
                foreach ($map['RefundReasonList'] as $item) {
                    $model->refundReasonList[$n++] = null !== $item ? refundReasonList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SubDistributionOrderId'])) {
            $model->subDistributionOrderId = $map['SubDistributionOrderId'];
        }

        return $model;
    }
}
