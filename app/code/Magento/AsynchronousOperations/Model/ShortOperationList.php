<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\AsynchronousOperations\Model;

/**
 * List of bulk operations with short operation details and counter of operations.
 */
class ShortOperationList implements \Magento\AsynchronousOperations\Api\Data\ShortOperationListInterface
{
    /**
     * @var array
     */
    private $items;

    /**
     * @param array $items [optional]
     */
    public function __construct(array $items = [])
    {
        $this->items = $items;
    }

    /**
     * @inheritdoc
     */
    public function getItems()
    {
        return $this->items;
    }
}
