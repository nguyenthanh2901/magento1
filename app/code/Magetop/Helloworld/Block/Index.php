<?php
namespace Magetop\Helloworld\Block;

use Magento\Framework\View\Element\Template;

class Index extends Template
{
    private $postFactory;
    private $postRepository;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magetop\Helloworld\Model\PostFactory $postFactory,
        \Magetop\Helloworld\Model\PostRepository $postRepository
    ) {
        parent::__construct($context);
        $this->postFactory = $postFactory;
        $this->postRepository = $postRepository;
    }

    public function getPosts()
    {
        $collection = $this->postRepository->getList();
        return $collection;
    }
}
