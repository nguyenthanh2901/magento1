<?php
namespace Magetop\Helloworld\Model;

use Magetop\Helloworld\Api\Data\PostInterface;

class Post extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface, PostInterface
{
    const CACHE_TAG = 'magetop_hello_post';

    protected $_cacheTag = 'magetop_hello_post';

    protected $_eventPrefix = 'magetop_hello_post';

    protected function _construct()
    {
        $this->_init('Magetop\Helloworld\Model\ResourceModel\Post');
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    public function getDefaultValues()
    {
        $values = [];

        return $values;
    }
}
