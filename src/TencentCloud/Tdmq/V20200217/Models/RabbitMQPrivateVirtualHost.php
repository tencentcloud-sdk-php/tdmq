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
 * RabbitMQ专享版虚拟机
 *
 * @method string getVirtualHostName() 获取虚拟主机的名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVirtualHostName(string $VirtualHostName) 设置虚拟主机的名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取虚拟主机的描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置虚拟主机的描述
注意：此字段可能返回 null，表示取不到有效值。
 */
class RabbitMQPrivateVirtualHost extends AbstractModel
{
    /**
     * @var string 虚拟主机的名字
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VirtualHostName;

    /**
     * @var string 虚拟主机的描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @param string $VirtualHostName 虚拟主机的名字
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 虚拟主机的描述
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
        if (array_key_exists("VirtualHostName",$param) and $param["VirtualHostName"] !== null) {
            $this->VirtualHostName = $param["VirtualHostName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
