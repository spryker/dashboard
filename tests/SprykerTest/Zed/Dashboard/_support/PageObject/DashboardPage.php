<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerTest\Zed\Dashboard\PageObject;

class DashboardPage
{
    /**
     * @var string
     */
    public const URL = '/dashboard';

    /**
     * @var string
     */
    public const TITLE = 'Dashboard';

    public const string SELECTOR_QUICK_ACTION_VIEW_ORDERS = 'a[data-qa="quick-actions-view-orders"][href$="sales"]';

    public const string SELECTOR_QUICK_ACTION_ADD_PRODUCTS = 'a[data-qa="quick-actions-add-products"][href$="product-management/add"]';

    public const string SELECTOR_QUICK_ACTION_GO_TO_CATALOG = 'a[data-qa="quick-actions-go-to-catalog"][href$="product-management"]';

    public const string SELECTOR_QUICK_ACTION_CHECK_RETURNS = 'a[data-qa="quick-actions-check-returns"][href$="merchant-sales-return-merchant-user-gui"]';
}
