<?php
namespace Mageget\TestApi\Model;
/**
 * Marketplace Product Model.
 *
 * @method \Mageget\Marketplace\Model\ResourceModel\Product _getResource()
 * @method \Mageget\Marketplace\Model\ResourceModel\Product getResource()
 */
class TestApi  implements \Mageget\TestApi\Api\Data\TestApiInterface
{
    /**
     * Get ID.
     *
     * @return int
     */
    public function getId()
    {
        return 10;
    }
    /**
     * Set ID.
     *
     * @param int $id
     *
     * @return \Mageget\Marketplace\Api\Data\ProductInterface
     */
    public function setId($id)
    {
    }
    /**
     * Get title.
     *
     * @return string|null
     */
    public function getTitle()
    {
        return 'this is test title';
    }
    /**
     * Set title.
     *
     * @param string $title
     *
     * @return \Mageget\Marketplace\Api\Data\ProductInterface
     */
    public function setTitle($title)
    {
    }
    /**
     * Get desc.
     *
     * @return string|null
     */
    public function getDescription()
    {
        return 'this is test api description';
    }
    /**
     * Set Desc.
     *
     * @param string $desc
     *
     * @return \Mageget\Marketplace\Api\Data\ProductInterface
     */
    public function setDescription($desc)
    {
    }
}