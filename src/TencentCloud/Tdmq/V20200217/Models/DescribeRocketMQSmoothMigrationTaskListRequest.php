<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRocketMQSmoothMigrationTaskList请求参数结构体
 *
 * @method integer getOffset() 获取查询起始偏移量
 * @method void setOffset(integer $Offset) 设置查询起始偏移量
 * @method integer getLimit() 获取查询最大数量
 * @method void setLimit(integer $Limit) 设置查询最大数量
 * @method array getFilters() 获取查询过滤器，
支持的字段如下
TaskStatus, 支持多选
ConnectionType，支持多选
ClusterId，精确搜索
TaskName，支持模糊搜索
 * @method void setFilters(array $Filters) 设置查询过滤器，
支持的字段如下
TaskStatus, 支持多选
ConnectionType，支持多选
ClusterId，精确搜索
TaskName，支持模糊搜索
 */
class DescribeRocketMQSmoothMigrationTaskListRequest extends AbstractModel
{
    /**
     * @var integer 查询起始偏移量
     */
    public $Offset;

    /**
     * @var integer 查询最大数量
     */
    public $Limit;

    /**
     * @var array 查询过滤器，
支持的字段如下
TaskStatus, 支持多选
ConnectionType，支持多选
ClusterId，精确搜索
TaskName，支持模糊搜索
     */
    public $Filters;

    /**
     * @param integer $Offset 查询起始偏移量
     * @param integer $Limit 查询最大数量
     * @param array $Filters 查询过滤器，
支持的字段如下
TaskStatus, 支持多选
ConnectionType，支持多选
ClusterId，精确搜索
TaskName，支持模糊搜索
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
