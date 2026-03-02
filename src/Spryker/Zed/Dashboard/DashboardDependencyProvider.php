<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\Dashboard;

use Spryker\Zed\Kernel\AbstractBundleDependencyProvider;
use Spryker\Zed\Kernel\Container;

class DashboardDependencyProvider extends AbstractBundleDependencyProvider
{
    /**
     * @var string
     */
    public const PLUGIN_RENDER_DASHBOARDS = 'PLUGIN_RENDER_DASHBOARDS';

    public function provideCommunicationLayerDependencies(Container $container): Container
    {
        $container = parent::provideCommunicationLayerDependencies($container);
        $container = $this->addRenderDashboardPlugins($container);

        return $container;
    }

    protected function addRenderDashboardPlugins(Container $container): Container
    {
        $container->set(static::PLUGIN_RENDER_DASHBOARDS, function () {
            return $this->getDashboardPlugins();
        });

        return $container;
    }

    /**
     * @return array<\Spryker\Shared\Dashboard\Dependency\Plugin\DashboardPluginInterface>
     */
    protected function getDashboardPlugins(): array
    {
        return [];
    }
}
