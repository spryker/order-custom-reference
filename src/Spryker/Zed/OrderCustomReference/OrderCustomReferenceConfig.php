<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\OrderCustomReference;

use Spryker\Zed\Kernel\AbstractBundleConfig;

/**
 * @method \Spryker\Shared\OrderCustomReference\OrderCustomReferenceConfig getSharedConfig()
 */
class OrderCustomReferenceConfig extends AbstractBundleConfig
{
    /**
     * Specification:
     * - Returns the maximum permissible length of the order custom reference value.
     *
     * @api
     *
     * @return int
     */
    public function getOrderCustomReferenceMaxLength(): int
    {
        return $this->getSharedConfig()->getOrderCustomReferenceMaxLength();
    }
}
