<?php
namespace Magetop\Helloworld\Block;

class Edit extends \Magento\Framework\View\Element\Template
{
	private $postFactory;
	private $postRepository;
	private $_coreRegistry;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, 
        \Magetop\Helloworld\Model\PostFactory $postFactory, 
        \Magetop\Helloworld\Model\PostRepository $postRepository, 
		\Magento\Framework\Registry $coreRegistry)

	{
		$this->postFactory = $postFactory;
		$this->postRepository = $postRepository;
        $this->_coreRegistry = $coreRegistry;
        
        parent::__construct($context);
	}

	// public function getBlogInfo()
	// {
	// 	return __('AHT Blog module');
    // }
    
	public function getPost()
	{
        
        $post_id = $this->_coreRegistry->registry('post_id');
		$post = $this->postRepository->getById($post_id);
		return $post;
    }
    
	public function execute()
	{
		return $this->_pageFactory->create();
	}
}