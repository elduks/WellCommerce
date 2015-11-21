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

namespace WellCommerce\CatalogBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use WellCommerce\CatalogBundle\Entity\Producer;
use WellCommerce\CommonBundle\Helper\Sluggable;
use WellCommerce\CoreBundle\DataFixtures\AbstractDataFixture;

/**
 * Class LoadProducerData
 *
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 */
class LoadProducerData extends AbstractDataFixture
{
    public static $samples = ['LG', 'Samsung', 'Sony', 'Panasonic', 'Toshiba'];

    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $shop = $this->getReference('shop');

        foreach (self::$samples as $name) {
            $producer = new Producer();
            $producer->addShop($shop);
            $producer->translate('en')->setName($name);
            $producer->translate('en')->setSlug(Sluggable::makeSlug($name));
            $producer->mergeNewTranslations();
            $manager->persist($producer);
            $this->setReference('producer_' . $name, $producer);
        }

        $manager->flush();
    }
}