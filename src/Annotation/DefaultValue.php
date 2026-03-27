<?php

namespace Metaregistrar\Api\Client\Annotation;

/**
 * DefaultValue is a custom attribute with a required value parameter
 */
#[\Attribute(\Attribute::TARGET_METHOD | \Attribute::TARGET_PROPERTY)]
final class DefaultValue
{
    /**
     * @param string $value
     */
    public function __construct(public string $value)
    {
    }
}
