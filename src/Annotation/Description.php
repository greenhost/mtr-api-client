<?php

namespace Metaregistrar\Api\Client\Annotation;

/**
 * Description is a custom attribute with a required value parameter
 */
#[\Attribute(\Attribute::TARGET_METHOD | \Attribute::TARGET_PROPERTY)]
final class Description
{
    /**
     * @param string $value
     */
    public function __construct(public string $value)
    {
    }
}
