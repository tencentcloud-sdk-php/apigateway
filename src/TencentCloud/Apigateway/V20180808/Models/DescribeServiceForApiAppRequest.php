<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeServiceForApiApp请求参数结构体
 *
 * @method string getServiceId() 获取待查询的服务唯一 ID。
 * @method void setServiceId(string $ServiceId) 设置待查询的服务唯一 ID。
 * @method string getApiRegion() 获取服务所属的地域
 * @method void setApiRegion(string $ApiRegion) 设置服务所属的地域
 */
class DescribeServiceForApiAppRequest extends AbstractModel
{
    /**
     * @var string 待查询的服务唯一 ID。
     */
    public $ServiceId;

    /**
     * @var string 服务所属的地域
     */
    public $ApiRegion;

    /**
     * @param string $ServiceId 待查询的服务唯一 ID。
     * @param string $ApiRegion 服务所属的地域
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("ApiRegion",$param) and $param["ApiRegion"] !== null) {
            $this->ApiRegion = $param["ApiRegion"];
        }
    }
}
