<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/recaptchaenterprise/v1/recaptchaenterprise.proto

namespace Google\Cloud\RecaptchaEnterprise\V1\WafSettings;

use UnexpectedValueException;

/**
 * Supported WAF features. For more information, see
 * https://cloud.google.com/recaptcha/docs/usecase#comparison_of_features.
 *
 * Protobuf type <code>google.cloud.recaptchaenterprise.v1.WafSettings.WafFeature</code>
 */
class WafFeature
{
    /**
     * Undefined feature.
     *
     * Generated from protobuf enum <code>WAF_FEATURE_UNSPECIFIED = 0;</code>
     */
    const WAF_FEATURE_UNSPECIFIED = 0;
    /**
     * Redirects suspicious traffic to reCAPTCHA.
     *
     * Generated from protobuf enum <code>CHALLENGE_PAGE = 1;</code>
     */
    const CHALLENGE_PAGE = 1;
    /**
     * Use reCAPTCHA session-tokens to protect the whole user session on the
     * site's domain.
     *
     * Generated from protobuf enum <code>SESSION_TOKEN = 2;</code>
     */
    const SESSION_TOKEN = 2;
    /**
     * Use reCAPTCHA action-tokens to protect user actions.
     *
     * Generated from protobuf enum <code>ACTION_TOKEN = 3;</code>
     */
    const ACTION_TOKEN = 3;
    /**
     * Use reCAPTCHA WAF express protection to protect any content other than
     * web pages, like APIs and IoT devices.
     *
     * Generated from protobuf enum <code>EXPRESS = 5;</code>
     */
    const EXPRESS = 5;

    private static $valueToName = [
        self::WAF_FEATURE_UNSPECIFIED => 'WAF_FEATURE_UNSPECIFIED',
        self::CHALLENGE_PAGE => 'CHALLENGE_PAGE',
        self::SESSION_TOKEN => 'SESSION_TOKEN',
        self::ACTION_TOKEN => 'ACTION_TOKEN',
        self::EXPRESS => 'EXPRESS',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}


