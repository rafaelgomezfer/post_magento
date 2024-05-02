<?php
namespace Custom\NttBlogs\Model;

use Magento\Framework\Model\AbstractModel;
use Custom\NttBlogs\Model\ResourceModel\Post as PostResourceModel;

class Post extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(PostResourceModel::class);
    }
}
