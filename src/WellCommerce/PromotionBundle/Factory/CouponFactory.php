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

namespace WellCommerce\PromotionBundle\Factory;

use WellCommerce\CoreBundle\Factory\AbstractFactory;
use WellCommerce\PromotionBundle\Entity\Coupon;

/**
 * Class CouponFactory
 *
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 */
class CouponFactory extends AbstractFactory
{
    /**
     * @return \WellCommerce\PromotionBundle\Entity\CouponInterface
     */
    public function create()
    {
        $coupon = new Coupon();

        return $coupon;
    }
}