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
 * DescribePluginsByApi请求参数结构体
 *
 * @method string getApiId() 获取要查询的API ID。
 * @method void setApiId(string $ApiId) 设置要查询的API ID。
 * @method string getServiceId() 获取要查询的服务ID。
 * @method void setServiceId(string $ServiceId) 设置要查询的服务ID。
 * @method string getEnvironmentName() 获取环境信息。
 * @method void setEnvironmentName(string $EnvironmentName) 设置环境信息。
 * @method integer getLimit() 获取返回数量，默认为 20，最大值为 100。
 * @method void setLimit(integer $Limit) 设置返回数量，默认为 20，最大值为 100。
 * @method integer getOffset() 获取偏移量，默认为 0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认为 0。
 */
class DescribePluginsByApiRequest extends AbstractModel
{
    /**
     * @var string 要查询的API ID。
     */
    public $ApiId;

    /**
     * @var string 要查询的服务ID。
     */
    public $ServiceId;

    /**
     * @var string 环境信息。
     */
    public $EnvironmentName;

    /**
     * @var integer 返回数量，默认为 20，最大值为 100。
     */
    public $Limit;

    /**
     * @var integer 偏移量，默认为 0。
     */
    public $Offset;

    /**
     * @param string $ApiId 要查询的API ID。
     * @param string $ServiceId 要查询的服务ID。
     * @param string $EnvironmentName 环境信息。
     * @param integer $Limit 返回数量，默认为 20，最大值为 100。
     * @param integer $Offset 偏移量，默认为 0。
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
        if (array_key_exists("ApiId",$param) and $param["ApiId"] !== null) {
            $this->ApiId = $param["ApiId"];
        }

        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("EnvironmentName",$param) and $param["EnvironmentName"] !== null) {
            $this->EnvironmentName = $param["EnvironmentName"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
