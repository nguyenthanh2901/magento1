<?php
namespace Magetop\Helloworld\Block;

class Create extends \Magento\Framework\View\Element\Template
{
    private $postFactory;
    private $postRepository;
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magetop\Helloworld\Model\PostFactory $postFactory,
        \Magetop\Helloworld\Model\PostRepository $postRepository
    )
    {
        parent::__construct($context);
        $this->postFactory = $postFactory;
        $this->postRepository = $postRepository;
    }
}
