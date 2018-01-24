<?php

namespace Nans\Faq\Api\Repository;

use Nans\Faq\Api\Data\QuestionInterface;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Exception\NoSuchEntityException;

interface QuestionRepositoryInterface
{
    /**
     * @param QuestionInterface $question
     *
     * @return QuestionInterface
     * @throws CouldNotSaveException
     */
    public function save(QuestionInterface $question): QuestionInterface;

    /**
     * @param int $id
     *
     * @return QuestionInterface
     * @throws NoSuchEntityException
     */
    public function getById(int $id): QuestionInterface;

    /**
     * @param QuestionInterface $question
     *
     * @return void
     * @throws CouldNotDeleteException
     * @throws NoSuchEntityException
     */
    public function delete(QuestionInterface $question);

    /**
     * @param int $id
     *
     * @return void
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws CouldNotDeleteException
     */
    public function deleteById(int $id);
}