<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/recaptchaenterprise/v1/recaptchaenterprise.proto

namespace Google\Cloud\RecaptchaEnterprise\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A membership in a group of related accounts.
 *
 * Generated from protobuf message <code>google.cloud.recaptchaenterprise.v1.RelatedAccountGroupMembership</code>
 */
class RelatedAccountGroupMembership extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Identifier. The resource name for this membership in the format
     * `projects/{project}/relatedaccountgroups/{relatedaccountgroup}/memberships/{membership}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER, (.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $name = '';
    /**
     * The unique stable account identifier of the member. The identifier
     * corresponds to an `account_id` provided in a previous `CreateAssessment` or
     * `AnnotateAssessment` call.
     *
     * Generated from protobuf field <code>string account_id = 4;</code>
     */
    protected $account_id = '';
    /**
     * Deprecated: use `account_id` instead.
     * The unique stable hashed account identifier of the member. The identifier
     * corresponds to a `hashed_account_id` provided in a previous
     * `CreateAssessment` or `AnnotateAssessment` call.
     *
     * Generated from protobuf field <code>bytes hashed_account_id = 2 [deprecated = true];</code>
     * @deprecated
     */
    protected $hashed_account_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. Identifier. The resource name for this membership in the format
     *           `projects/{project}/relatedaccountgroups/{relatedaccountgroup}/memberships/{membership}`.
     *     @type string $account_id
     *           The unique stable account identifier of the member. The identifier
     *           corresponds to an `account_id` provided in a previous `CreateAssessment` or
     *           `AnnotateAssessment` call.
     *     @type string $hashed_account_id
     *           Deprecated: use `account_id` instead.
     *           The unique stable hashed account identifier of the member. The identifier
     *           corresponds to a `hashed_account_id` provided in a previous
     *           `CreateAssessment` or `AnnotateAssessment` call.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Recaptchaenterprise\V1\Recaptchaenterprise::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Identifier. The resource name for this membership in the format
     * `projects/{project}/relatedaccountgroups/{relatedaccountgroup}/memberships/{membership}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER, (.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Identifier. The resource name for this membership in the format
     * `projects/{project}/relatedaccountgroups/{relatedaccountgroup}/memberships/{membership}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER, (.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * The unique stable account identifier of the member. The identifier
     * corresponds to an `account_id` provided in a previous `CreateAssessment` or
     * `AnnotateAssessment` call.
     *
     * Generated from protobuf field <code>string account_id = 4;</code>
     * @return string
     */
    public function getAccountId()
    {
        return $this->account_id;
    }

    /**
     * The unique stable account identifier of the member. The identifier
     * corresponds to an `account_id` provided in a previous `CreateAssessment` or
     * `AnnotateAssessment` call.
     *
     * Generated from protobuf field <code>string account_id = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setAccountId($var)
    {
        GPBUtil::checkString($var, True);
        $this->account_id = $var;

        return $this;
    }

    /**
     * Deprecated: use `account_id` instead.
     * The unique stable hashed account identifier of the member. The identifier
     * corresponds to a `hashed_account_id` provided in a previous
     * `CreateAssessment` or `AnnotateAssessment` call.
     *
     * Generated from protobuf field <code>bytes hashed_account_id = 2 [deprecated = true];</code>
     * @return string
     * @deprecated
     */
    public function getHashedAccountId()
    {
        if ($this->hashed_account_id !== '') {
            @trigger_error('hashed_account_id is deprecated.', E_USER_DEPRECATED);
        }
        return $this->hashed_account_id;
    }

    /**
     * Deprecated: use `account_id` instead.
     * The unique stable hashed account identifier of the member. The identifier
     * corresponds to a `hashed_account_id` provided in a previous
     * `CreateAssessment` or `AnnotateAssessment` call.
     *
     * Generated from protobuf field <code>bytes hashed_account_id = 2 [deprecated = true];</code>
     * @param string $var
     * @return $this
     * @deprecated
     */
    public function setHashedAccountId($var)
    {
        @trigger_error('hashed_account_id is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkString($var, False);
        $this->hashed_account_id = $var;

        return $this;
    }

}

