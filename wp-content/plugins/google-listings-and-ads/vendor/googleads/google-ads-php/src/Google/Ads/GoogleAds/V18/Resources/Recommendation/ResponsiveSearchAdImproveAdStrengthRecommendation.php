<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v18/resources/recommendation.proto

namespace Google\Ads\GoogleAds\V18\Resources\Recommendation;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The responsive search ad improve ad strength recommendation.
 *
 * Generated from protobuf message <code>google.ads.googleads.v18.resources.Recommendation.ResponsiveSearchAdImproveAdStrengthRecommendation</code>
 */
class ResponsiveSearchAdImproveAdStrengthRecommendation extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The current ad to be updated.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v18.resources.Ad current_ad = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $current_ad = null;
    /**
     * Output only. The updated ad.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v18.resources.Ad recommended_ad = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $recommended_ad = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Ads\GoogleAds\V18\Resources\Ad $current_ad
     *           Output only. The current ad to be updated.
     *     @type \Google\Ads\GoogleAds\V18\Resources\Ad $recommended_ad
     *           Output only. The updated ad.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V18\Resources\Recommendation::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The current ad to be updated.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v18.resources.Ad current_ad = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Ads\GoogleAds\V18\Resources\Ad|null
     */
    public function getCurrentAd()
    {
        return $this->current_ad;
    }

    public function hasCurrentAd()
    {
        return isset($this->current_ad);
    }

    public function clearCurrentAd()
    {
        unset($this->current_ad);
    }

    /**
     * Output only. The current ad to be updated.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v18.resources.Ad current_ad = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Ads\GoogleAds\V18\Resources\Ad $var
     * @return $this
     */
    public function setCurrentAd($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V18\Resources\Ad::class);
        $this->current_ad = $var;

        return $this;
    }

    /**
     * Output only. The updated ad.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v18.resources.Ad recommended_ad = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Ads\GoogleAds\V18\Resources\Ad|null
     */
    public function getRecommendedAd()
    {
        return $this->recommended_ad;
    }

    public function hasRecommendedAd()
    {
        return isset($this->recommended_ad);
    }

    public function clearRecommendedAd()
    {
        unset($this->recommended_ad);
    }

    /**
     * Output only. The updated ad.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v18.resources.Ad recommended_ad = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Ads\GoogleAds\V18\Resources\Ad $var
     * @return $this
     */
    public function setRecommendedAd($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V18\Resources\Ad::class);
        $this->recommended_ad = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ResponsiveSearchAdImproveAdStrengthRecommendation::class, \Google\Ads\GoogleAds\V18\Resources\Recommendation_ResponsiveSearchAdImproveAdStrengthRecommendation::class);

