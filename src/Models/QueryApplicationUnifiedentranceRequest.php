<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\DAS\Models;

use AlibabaCloud\Tea\Model;

class QueryApplicationUnifiedentranceRequest extends Model
{
    // OAuth模式下的授权token
    /**
     * @var string
     */
    public $authToken;

    /**
     * @var string
     */
    public $productInstanceId;

    // 授权协议索引
    /**
     * @var string
     */
    public $fileIndex;

    // 整个需求的入参，map json
    /**
     * @var string
     */
    public $params;

    // 是否授权
    /**
     * @var bool
     */
    public $userAuthed;

    // 待获取数据类型对应的服务id
    /**
     * @var string
     */
    public $serviceId;
    protected $_name = [
        'authToken'         => 'auth_token',
        'productInstanceId' => 'product_instance_id',
        'fileIndex'         => 'file_index',
        'params'            => 'params',
        'userAuthed'        => 'user_authed',
        'serviceId'         => 'service_id',
    ];

    public function validate()
    {
        Model::validateRequired('params', $this->params, true);
        Model::validateRequired('serviceId', $this->serviceId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authToken) {
            $res['auth_token'] = $this->authToken;
        }
        if (null !== $this->productInstanceId) {
            $res['product_instance_id'] = $this->productInstanceId;
        }
        if (null !== $this->fileIndex) {
            $res['file_index'] = $this->fileIndex;
        }
        if (null !== $this->params) {
            $res['params'] = $this->params;
        }
        if (null !== $this->userAuthed) {
            $res['user_authed'] = $this->userAuthed;
        }
        if (null !== $this->serviceId) {
            $res['service_id'] = $this->serviceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryApplicationUnifiedentranceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['auth_token'])) {
            $model->authToken = $map['auth_token'];
        }
        if (isset($map['product_instance_id'])) {
            $model->productInstanceId = $map['product_instance_id'];
        }
        if (isset($map['file_index'])) {
            $model->fileIndex = $map['file_index'];
        }
        if (isset($map['params'])) {
            $model->params = $map['params'];
        }
        if (isset($map['user_authed'])) {
            $model->userAuthed = $map['user_authed'];
        }
        if (isset($map['service_id'])) {
            $model->serviceId = $map['service_id'];
        }

        return $model;
    }
}
