<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20220531\Models;

use AlibabaCloud\Tea\Model;

class QueryDistributionTradeStatusRequest extends Model
{
    /**
     * @var string
     */
    public $distributionSupplierId;

    /**
     * @var string
     */
    public $distributionTradeId;

    /**
     * @var string
     */
    public $distributorId;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'distributionSupplierId' => 'DistributionSupplierId',
        'distributionTradeId'    => 'DistributionTradeId',
        'distributorId'          => 'DistributorId',
        'tenantId'               => 'TenantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->distributionSupplierId) {
            $res['DistributionSupplierId'] = $this->distributionSupplierId;
        }
        if (null !== $this->distributionTradeId) {
            $res['DistributionTradeId'] = $this->distributionTradeId;
        }
        if (null !== $this->distributorId) {
            $res['DistributorId'] = $this->distributorId;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryDistributionTradeStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DistributionSupplierId'])) {
            $model->distributionSupplierId = $map['DistributionSupplierId'];
        }
        if (isset($map['DistributionTradeId'])) {
            $model->distributionTradeId = $map['DistributionTradeId'];
        }
        if (isset($map['DistributorId'])) {
            $model->distributorId = $map['DistributorId'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
