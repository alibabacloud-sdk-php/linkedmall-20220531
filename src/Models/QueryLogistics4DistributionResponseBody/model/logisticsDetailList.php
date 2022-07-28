<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20220531\Models\QueryLogistics4DistributionResponseBody\model;

use AlibabaCloud\Tea\Model;

class logisticsDetailList extends Model
{
    /**
     * @var string
     */
    public $ocurrTimeStr;

    /**
     * @var string
     */
    public $standerdDesc;
    protected $_name = [
        'ocurrTimeStr' => 'OcurrTimeStr',
        'standerdDesc' => 'StanderdDesc',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ocurrTimeStr) {
            $res['OcurrTimeStr'] = $this->ocurrTimeStr;
        }
        if (null !== $this->standerdDesc) {
            $res['StanderdDesc'] = $this->standerdDesc;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return logisticsDetailList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OcurrTimeStr'])) {
            $model->ocurrTimeStr = $map['OcurrTimeStr'];
        }
        if (isset($map['StanderdDesc'])) {
            $model->standerdDesc = $map['StanderdDesc'];
        }

        return $model;
    }
}
