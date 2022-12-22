<?php
namespace Mageget\TestApi\Api;
interface TestApiManagementInterface
{
    /**
     * get test Api data.
     *
     * @api
     *
     * @param int $id
     *
     * @return \Mageget\TestApi\Api\Data\TestApiInterface
     */
    public function getApiData();
}