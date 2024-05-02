<?php
namespace Custom\NttBlogs\Block;

use Magento\Framework\View\Element\Template;
use Custom\NttBlogs\Model\PostFactory;

class Index extends Template
{
    protected $postFactory;

    public function __construct(
        Template\Context $context,
        PostFactory $postFactory,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->postFactory = $postFactory;
    }

    public function getPosts()
    {
        return $this->postFactory->create()->getCollection();
    }
}
