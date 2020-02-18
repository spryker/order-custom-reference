<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\OrderCustomReference;

use Spryker\Zed\Kernel\AbstractBundleConfig;

class OrderCustomReferenceConfig extends AbstractBundleConfig
{
    /**
     * @return string[]
     */
    public function getOrderCustomReferenceQuoteFieldsAllowedForSaving(): array
    {
        return [];
    }
}
