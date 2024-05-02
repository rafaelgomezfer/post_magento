<?php
namespace Custom\NttBlogs\Controller\Posts;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Custom\NttBlogs\Model\PostFactory;

class View extends Action
{
    protected $resultPageFactory;
    protected $postFactory;

    public function __construct(
        Context $context,
        PageFactory $resultPageFactory,
        PostFactory $postFactory
    ) {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
        $this->postFactory = $postFactory;
    }

    public function execute()
    {
        $postId = $this->getRequest()->getParam('post_id');
        $post = $this->postFactory->create()->load($postId);

        if (!$post->getId()) {
            $this->_redirect('*/*/');
            return;
        }

        $resultPage = $this->resultPageFactory->create();
        $resultPage->getLayout()->getBlock('posts.view')->setData('post_data', $post);
        return $resultPage;
    }
}
