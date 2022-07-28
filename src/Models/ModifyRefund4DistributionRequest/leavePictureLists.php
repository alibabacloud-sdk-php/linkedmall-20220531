<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20220531\Models\ModifyRefund4DistributionRequest;

use AlibabaCloud\Tea\Model;

class leavePictureLists extends Model
{
    /**
     * @var string
     */
    public $desc;

    /**
     * @var string
     */
    public $picture;
    protected $_name = [
        'desc'    => 'Desc',
        'picture' => 'Picture',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }
        if (null !== $this->picture) {
            $res['Picture'] = $this->picture;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return leavePictureLists
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }
        if (isset($map['Picture'])) {
            $model->picture = $map['Picture'];
        }

        return $model;
    }
}
