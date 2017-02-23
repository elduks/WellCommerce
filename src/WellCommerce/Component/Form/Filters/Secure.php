<?php
/*
 * WellCommerce Open-Source E-Commerce Platform
 *
 * This file is part of the WellCommerce package.
 *
 * (c) Adam Piotrowski <adam@wellcommerce.org>
 *
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 */

namespace WellCommerce\Component\Form\Filters;

/**
 * Class Secure
 *
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 */
class Secure extends AbstractFilter
{
    /**
     * {@inheritdoc}
     */
    public function filterValue($value)
    {
        return $value;
    }
}
