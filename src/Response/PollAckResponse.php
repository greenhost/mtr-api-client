<?php

namespace Metaregistrar\Api\Client\Response;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\Type;
use Metaregistrar\Api\Client\Annotation\Description;
use Metaregistrar\Api\Client\Annotation\MustBeFilled;

/**
 * Class HostInfoResponse
 * @package Metaregistrar\Api\Client\Response
 */
#[ExclusionPolicy('all')]
class PollAckResponse extends AbstractResponse implements ResponseInterface
{
    /**
     * @var integer
     */
    #[Type('integer')]
    #[SerializedName('totalWaiting')]
    #[Expose]
    #[MustBeFilled('yes')]
    #[Description('count of total waiting poll messages')]
    protected $totalWaiting;
    /**
     * @var integer
     */
    #[Type('integer')]
    #[SerializedName('totalAffected')]
    #[Expose]
    #[MustBeFilled('yes')]
    #[Description('Total amount of acked poll messages')]
    protected $totalAffected;
    /**
     * @return integer
     */
    public function getTotalWaiting()
    {
        return $this->totalWaiting;
    }

    /**
     * @param integer $totalWaiting
     * @return PollResponse
     */
    public function setTotalWaiting(int $totalWaiting): PollAckResponse
    {
        $this->totalWaiting = $totalWaiting;
        return $this;
    }

    /**
     * @return integer
     */
    public function getTotalAffected()
    {
        return $this->totalAffected;
    }

    /**
     * @param integer $totalAffected
     * @return PollAckResponse
     */
    public function setTotalAffected(int $totalAffected): PollAckResponse
    {
        $this->totalAffected = $totalAffected;
        return $this;
    }
}
