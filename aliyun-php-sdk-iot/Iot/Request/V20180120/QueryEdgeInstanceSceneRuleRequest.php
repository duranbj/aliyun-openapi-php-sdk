<?php

namespace Iot\Request\V20180120;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of QueryEdgeInstanceSceneRule
 *
 * @method string getIotInstanceId()
 * @method string getPageSize()
 * @method string getCurrentPage()
 * @method string getInstanceId()
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class QueryEdgeInstanceSceneRuleRequest extends \RpcAcsRequest
{

    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Iot',
            '2018-01-20',
            'QueryEdgeInstanceSceneRule',
            'iot'
        );
    }

    /**
     * @param string $iotInstanceId
     *
     * @return $this
     */
    public function setIotInstanceId($iotInstanceId)
    {
        $this->requestParameters['IotInstanceId'] = $iotInstanceId;
        $this->queryParameters['IotInstanceId'] = $iotInstanceId;

        return $this;
    }

    /**
     * @param string $pageSize
     *
     * @return $this
     */
    public function setPageSize($pageSize)
    {
        $this->requestParameters['PageSize'] = $pageSize;
        $this->queryParameters['PageSize'] = $pageSize;

        return $this;
    }

    /**
     * @param string $currentPage
     *
     * @return $this
     */
    public function setCurrentPage($currentPage)
    {
        $this->requestParameters['CurrentPage'] = $currentPage;
        $this->queryParameters['CurrentPage'] = $currentPage;

        return $this;
    }

    /**
     * @param string $instanceId
     *
     * @return $this
     */
    public function setInstanceId($instanceId)
    {
        $this->requestParameters['InstanceId'] = $instanceId;
        $this->queryParameters['InstanceId'] = $instanceId;

        return $this;
    }

    /**
     * @param string $apiProduct
     *
     * @return $this
     */
    public function setApiProduct($apiProduct)
    {
        $this->requestParameters['ApiProduct'] = $apiProduct;
        $this->queryParameters['ApiProduct'] = $apiProduct;

        return $this;
    }

    /**
     * @param string $apiRevision
     *
     * @return $this
     */
    public function setApiRevision($apiRevision)
    {
        $this->requestParameters['ApiRevision'] = $apiRevision;
        $this->queryParameters['ApiRevision'] = $apiRevision;

        return $this;
    }
}
