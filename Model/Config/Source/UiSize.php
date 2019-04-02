<?php
/**
 * Kemana Core Modules
 * Copyright (C) 2018 PT. Kemana Teknologi Solusi.
 *
 * @author   Rizal Fauzie <rfridwan@kemana.com>
 * @since    1.0.0
 */

namespace Kemana\Core\Model\Config\Source;

class UiSize implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * {@inheritdoc}
     *
     * @codeCoverageIgnore
     */
    public function toOptionArray()
    {
        return [
            ['value' => 'huge', 'label' => __('Huge')],
            ['value' => 'large', 'label' => __('Large (Default)')],
            ['value' => 'medium', 'label' => __('Medium')],
            ['value' => 'small', 'label' => __('Small')],
            ['value' => 'xsmall', 'label' => __('Extra Small')]
        ];
    }
}
