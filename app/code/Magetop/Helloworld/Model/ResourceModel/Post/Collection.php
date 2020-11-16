<?php
namespace Magetop\Helloworld\Model\ResourceModel\Post;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'post_id';
    protected $_eventPrefix = 'magetop_hello_post_collection';
    protected $_eventObject = 'post_collection';

    protected function _construct()
    {
        $this->_init('Magetop\Helloworld\Model\Post', 'Magetop\Helloworld\Model\ResourceModel\Post');
    }
}
