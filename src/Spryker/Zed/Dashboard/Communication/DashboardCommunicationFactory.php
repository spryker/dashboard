<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\Dashboard\Communication;

use Spryker\Zed\Dashboard\DashboardDependencyProvider;
use Spryker\Zed\Kernel\Communication\AbstractCommunicationFactory;

class DashboardCommunicationFactory extends AbstractCommunicationFactory
{
    /**
     * @return array<\Spryker\Shared\Dashboard\Dependency\Plugin\DashboardPluginInterface>
     */
    public function getDateFormatterService(): array
    {
        return $this->getProvidedDependency(DashboardDependencyProvider::PLUGIN_RENDER_DASHBOARDS);
    }
}
