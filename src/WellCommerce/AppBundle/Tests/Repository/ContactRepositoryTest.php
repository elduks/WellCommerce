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

namespace WellCommerce\AppBundle\Tests\Repository;

use WellCommerce\AppBundle\Test\Repository\AbstractRepositoryTestCase;

/**
 * Class ContactRepositoryTest
 *
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 */
class ContactRepositoryTest extends AbstractRepositoryTestCase
{
    protected function get()
    {
        return $this->container->get('contact.repository');
    }
}