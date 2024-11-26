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
 * Rabbitmq路由关系列表成员
 *
 * @method integer getBindingId() 获取路由关系id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBindingId(integer $BindingId) 设置路由关系id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVirtualHost() 获取Vhost参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVirtualHost(string $VirtualHost) 设置Vhost参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSource() 获取源exchange名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSource(string $Source) 设置源exchange名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDestinationType() 获取目标类型,queue或exchange
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDestinationType(string $DestinationType) 设置目标类型,queue或exchange
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDestination() 获取目标资源名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDestination(string $Destination) 设置目标资源名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRoutingKey() 获取绑定key
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRoutingKey(string $RoutingKey) 设置绑定key
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSourceExchangeType() 获取源exchange类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceExchangeType(string $SourceExchangeType) 设置源exchange类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModifyTime() 获取修改时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModifyTime(string $ModifyTime) 设置修改时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class RabbitMQBindingListInfo extends AbstractModel
{
    /**
     * @var integer 路由关系id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BindingId;

    /**
     * @var string Vhost参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VirtualHost;

    /**
     * @var string 源exchange名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Source;

    /**
     * @var string 目标类型,queue或exchange
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DestinationType;

    /**
     * @var string 目标资源名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Destination;

    /**
     * @var string 绑定key
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RoutingKey;

    /**
     * @var string 源exchange类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceExchangeType;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 修改时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModifyTime;

    /**
     * @param integer $BindingId 路由关系id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VirtualHost Vhost参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Source 源exchange名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DestinationType 目标类型,queue或exchange
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Destination 目标资源名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RoutingKey 绑定key
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SourceExchangeType 源exchange类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModifyTime 修改时间
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("BindingId",$param) and $param["BindingId"] !== null) {
            $this->BindingId = $param["BindingId"];
        }

        if (array_key_exists("VirtualHost",$param) and $param["VirtualHost"] !== null) {
            $this->VirtualHost = $param["VirtualHost"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("DestinationType",$param) and $param["DestinationType"] !== null) {
            $this->DestinationType = $param["DestinationType"];
        }

        if (array_key_exists("Destination",$param) and $param["Destination"] !== null) {
            $this->Destination = $param["Destination"];
        }

        if (array_key_exists("RoutingKey",$param) and $param["RoutingKey"] !== null) {
            $this->RoutingKey = $param["RoutingKey"];
        }

        if (array_key_exists("SourceExchangeType",$param) and $param["SourceExchangeType"] !== null) {
            $this->SourceExchangeType = $param["SourceExchangeType"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }
    }
}