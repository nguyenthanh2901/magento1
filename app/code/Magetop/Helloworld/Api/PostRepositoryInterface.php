<?php
namespace Magetop\Helloworld\Api;

interface PostRepositoryInterface
{
    public function save(\Magetop\Helloworld\Api\Data\PostInterface $Post);

    public function getById($PostId);

    public function delete(\Magetop\Helloworld\Api\Data\PostInterface $Post);

    public function deleteById($PostId);
}
