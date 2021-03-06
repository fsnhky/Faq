<?php

namespace Nans\Faq\Controller\Adminhtml\Category;

use Nans\Faq\Api\Repository\CategoryRepositoryInterface;
use Nans\Faq\Helper\AclNames;
use Nans\Faq\Controller\Adminhtml\AbstractDeleteAction;

class Delete extends AbstractDeleteAction
{
    /**
     * @return string
     */
    protected function _getACLName(): string
    {
        return AclNames::ACL_CATEGORY_DELETE;
    }

    /**
     * @return string
     */
    protected function _getRepositoryClass(): string
    {
        return CategoryRepositoryInterface::class;
    }
}