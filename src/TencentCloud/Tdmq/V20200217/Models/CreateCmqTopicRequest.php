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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCmqTopic请求参数结构体
 *
 * @method string getTopicName() 获取主题名字，在单个地域同一账号下唯一。主题名称是一个不超过64个字符的字符串，必须以字母为首字符，剩余部分可以包含字母、数字和横划线（-）。
 * @method void setTopicName(string $TopicName) 设置主题名字，在单个地域同一账号下唯一。主题名称是一个不超过64个字符的字符串，必须以字母为首字符，剩余部分可以包含字母、数字和横划线（-）。
 * @method integer getMaxMsgSize() 获取消息最大长度。取值范围 1024-65536 Byte（即1-64K），默认值 65536。
 * @method void setMaxMsgSize(integer $MaxMsgSize) 设置消息最大长度。取值范围 1024-65536 Byte（即1-64K），默认值 65536。
 * @method integer getFilterType() 获取用于指定主题的消息匹配策略。1：表示标签匹配策略；2：表示路由匹配策略，默认值为标签匹配策略。
 * @method void setFilterType(integer $FilterType) 设置用于指定主题的消息匹配策略。1：表示标签匹配策略；2：表示路由匹配策略，默认值为标签匹配策略。
 * @method integer getMsgRetentionSeconds() 获取消息保存时间。取值范围60 - 86400 s（即1分钟 - 1天），默认值86400。
 * @method void setMsgRetentionSeconds(integer $MsgRetentionSeconds) 设置消息保存时间。取值范围60 - 86400 s（即1分钟 - 1天），默认值86400。
 * @method boolean getTrace() 获取是否开启消息轨迹标识，true表示开启，false表示不开启，不填表示不开启。
 * @method void setTrace(boolean $Trace) 设置是否开启消息轨迹标识，true表示开启，false表示不开启，不填表示不开启。
 * @method array getTags() 获取标签数组
 * @method void setTags(array $Tags) 设置标签数组
 */
class CreateCmqTopicRequest extends AbstractModel
{
    /**
     * @var string 主题名字，在单个地域同一账号下唯一。主题名称是一个不超过64个字符的字符串，必须以字母为首字符，剩余部分可以包含字母、数字和横划线（-）。
     */
    public $TopicName;

    /**
     * @var integer 消息最大长度。取值范围 1024-65536 Byte（即1-64K），默认值 65536。
     */
    public $MaxMsgSize;

    /**
     * @var integer 用于指定主题的消息匹配策略。1：表示标签匹配策略；2：表示路由匹配策略，默认值为标签匹配策略。
     */
    public $FilterType;

    /**
     * @var integer 消息保存时间。取值范围60 - 86400 s（即1分钟 - 1天），默认值86400。
     */
    public $MsgRetentionSeconds;

    /**
     * @var boolean 是否开启消息轨迹标识，true表示开启，false表示不开启，不填表示不开启。
     */
    public $Trace;

    /**
     * @var array 标签数组
     */
    public $Tags;

    /**
     * @param string $TopicName 主题名字，在单个地域同一账号下唯一。主题名称是一个不超过64个字符的字符串，必须以字母为首字符，剩余部分可以包含字母、数字和横划线（-）。
     * @param integer $MaxMsgSize 消息最大长度。取值范围 1024-65536 Byte（即1-64K），默认值 65536。
     * @param integer $FilterType 用于指定主题的消息匹配策略。1：表示标签匹配策略；2：表示路由匹配策略，默认值为标签匹配策略。
     * @param integer $MsgRetentionSeconds 消息保存时间。取值范围60 - 86400 s（即1分钟 - 1天），默认值86400。
     * @param boolean $Trace 是否开启消息轨迹标识，true表示开启，false表示不开启，不填表示不开启。
     * @param array $Tags 标签数组
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
        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("MaxMsgSize",$param) and $param["MaxMsgSize"] !== null) {
            $this->MaxMsgSize = $param["MaxMsgSize"];
        }

        if (array_key_exists("FilterType",$param) and $param["FilterType"] !== null) {
            $this->FilterType = $param["FilterType"];
        }

        if (array_key_exists("MsgRetentionSeconds",$param) and $param["MsgRetentionSeconds"] !== null) {
            $this->MsgRetentionSeconds = $param["MsgRetentionSeconds"];
        }

        if (array_key_exists("Trace",$param) and $param["Trace"] !== null) {
            $this->Trace = $param["Trace"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
