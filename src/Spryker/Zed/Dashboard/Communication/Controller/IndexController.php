<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\Dashboard\Communication\Controller;

use Generated\Shared\DataBuilder\PaymentConfirmedBuilder;
use Generated\Shared\DataBuilder\PaymentMethodAddedBuilder;
use Spryker\Zed\Kernel\Communication\Controller\AbstractController;
use Spryker\Zed\MessageBroker\Business\MessageBrokerFacade;

/**
 * @method \Spryker\Zed\Dashboard\Communication\DashboardCommunicationFactory getFactory()
 */
class IndexController extends AbstractController
{
    /**
     * @return array
     */
    public function indexAction(): array
    {
        $t = (new PaymentMethodAddedBuilder())->build();
        $t->setName('Vasya' . uniqid());
        $t->setProviderName('Dacheugodno');
        $t->setPaymentAuthorizationEndpoint('http://');
        $mb = (new MessageBrokerFacade());
        $mb->sendMessage($t);
        dd(1);

        $plugins = $this->getFactory()->getDateFormatterService();

        $pluginContents = [];
        foreach ($plugins as $plugin) {
            $pluginContents[] = $plugin->render();
        }

        return [
            'pluginContents' => $pluginContents,
        ];
    }
}
