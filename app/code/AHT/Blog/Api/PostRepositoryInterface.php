<?php

namespace AHT\Blog\Api;

use Magento\Framework\Api\SearchCriteriaInterface;

interface PostRepositoryInterface
{
    public function save(\AHT\Blog\Api\Data\PostInterface $Post);

    public function getById($PostId);
    
    public function delete(\AHT\Blog\Api\Data\PostInterface $Post);

    public function deleteById($PostId);
}
