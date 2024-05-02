<?php
namespace Custom\NttBlogs\Model\ResourceModel\Post;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Custom\NttBlogs\Model\Post as PostModel;
use Custom\NttBlogs\Model\ResourceModel\Post as PostResourceModel;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(PostModel::class, PostResourceModel::class);
    }
}
