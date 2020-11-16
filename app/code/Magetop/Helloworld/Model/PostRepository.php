<?php
namespace Magetop\Helloworld\Model;

use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\NoSuchEntityException;
use Magetop\Helloworld\Api\Data;
use Magetop\Helloworld\Api\PostRepositoryInterface;
use Magetop\Helloworld\Model\ResourceModel\Post as ResourcePost;
use Magetop\Helloworld\Model\ResourceModel\Post\CollectionFactory as PostCollectionFactory;

class PostRepository implements PostRepositoryInterface
{
    private $collectionProcessor;

    public function __construct(
        ResourcePost $resource,
        postFactory $postFactory,
        Data\PostInterfaceFactory $datapostFactory,
        PostCollectionFactory $PostCollectionFactory
    ) {
        $this->resource = $resource;
        $this->postFactory = $postFactory;
        $this->PostCollectionFactory = $PostCollectionFactory;
    }

    public function save(\Magetop\Helloworld\Api\Data\PostInterface $Post)
    {
        try {
            $this->resource->save($Post);
        } catch (\Exception $exception) {
            throw new CouldNotSaveException(
                __('Could not save the Post: %1', $exception->getMessage()),
                $exception
            );
        }
        return $Post;
    }

    public function getById($PostId)
    {
        $Post = $this->postFactory->create();
        $Post->load($PostId);
        if (!$Post->getId()) {
            throw new NoSuchEntityException(__('The CMS Post with the "%1" ID doesn\'t exist.', $PostId));
        }
        return $Post;
    }

    public function getList()
    {
        $collection = $this->PostCollectionFactory->create();
        return $collection;
    }

    public function delete(\Magetop\Helloworld\Api\Data\PostInterface $Post)
    {
        try {
            $this->resource->delete($Post);
        } catch (\Exception $exception) {
            throw new CouldNotDeleteException(__(
                'Could not delete the Post: %1',
                $exception->getMessage()
            ));
        }
        return true;
    }

    public function deleteById($PostId)
    {
        // var_dump($this->getById($PostId)); die;
        return $this->delete($this->getById($PostId)); 
    }
}
