<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20220531\Models\QueryLogistics4DistributionResponseBody;

use AlibabaCloud\SDK\Linkedmall\V20220531\Models\QueryLogistics4DistributionResponseBody\model\goods;
use AlibabaCloud\SDK\Linkedmall\V20220531\Models\QueryLogistics4DistributionResponseBody\model\logisticsDetailList;
use AlibabaCloud\Tea\Model;

class model_ extends Model
{
    /**
     * @var string
     */
    public $dataProvider;

    /**
     * @var string
     */
    public $dataProviderTitle;

    /**
     * @var goods[]
     */
    public $goods;

    /**
     * @var string
     */
    public $logisticsCompanyCode;

    /**
     * @var string
     */
    public $logisticsCompanyName;

    /**
     * @var logisticsDetailList[]
     */
    public $logisticsDetailList;

    /**
     * @var string
     */
    public $mailNo;
    protected $_name = [
        'dataProvider'         => 'DataProvider',
        'dataProviderTitle'    => 'DataProviderTitle',
        'goods'                => 'Goods',
        'logisticsCompanyCode' => 'LogisticsCompanyCode',
        'logisticsCompanyName' => 'LogisticsCompanyName',
        'logisticsDetailList'  => 'LogisticsDetailList',
        'mailNo'               => 'MailNo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataProvider) {
            $res['DataProvider'] = $this->dataProvider;
        }
        if (null !== $this->dataProviderTitle) {
            $res['DataProviderTitle'] = $this->dataProviderTitle;
        }
        if (null !== $this->goods) {
            $res['Goods'] = [];
            if (null !== $this->goods && \is_array($this->goods)) {
                $n = 0;
                foreach ($this->goods as $item) {
                    $res['Goods'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->logisticsCompanyCode) {
            $res['LogisticsCompanyCode'] = $this->logisticsCompanyCode;
        }
        if (null !== $this->logisticsCompanyName) {
            $res['LogisticsCompanyName'] = $this->logisticsCompanyName;
        }
        if (null !== $this->logisticsDetailList) {
            $res['LogisticsDetailList'] = [];
            if (null !== $this->logisticsDetailList && \is_array($this->logisticsDetailList)) {
                $n = 0;
                foreach ($this->logisticsDetailList as $item) {
                    $res['LogisticsDetailList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->mailNo) {
            $res['MailNo'] = $this->mailNo;
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
        if (isset($map['DataProvider'])) {
            $model->dataProvider = $map['DataProvider'];
        }
        if (isset($map['DataProviderTitle'])) {
            $model->dataProviderTitle = $map['DataProviderTitle'];
        }
        if (isset($map['Goods'])) {
            if (!empty($map['Goods'])) {
                $model->goods = [];
                $n            = 0;
                foreach ($map['Goods'] as $item) {
                    $model->goods[$n++] = null !== $item ? goods::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['LogisticsCompanyCode'])) {
            $model->logisticsCompanyCode = $map['LogisticsCompanyCode'];
        }
        if (isset($map['LogisticsCompanyName'])) {
            $model->logisticsCompanyName = $map['LogisticsCompanyName'];
        }
        if (isset($map['LogisticsDetailList'])) {
            if (!empty($map['LogisticsDetailList'])) {
                $model->logisticsDetailList = [];
                $n                          = 0;
                foreach ($map['LogisticsDetailList'] as $item) {
                    $model->logisticsDetailList[$n++] = null !== $item ? logisticsDetailList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MailNo'])) {
            $model->mailNo = $map['MailNo'];
        }

        return $model;
    }
}
