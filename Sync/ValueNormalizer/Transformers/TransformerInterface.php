<?php

declare(strict_types=1);

/*
 * @copyright   2018 Mautic Inc. All rights reserved
 * @author      Mautic, Inc.
 *
 * @link        https://www.mautic.com
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

namespace MauticPlugin\MauticVtigerCrmBundle\Sync\ValueNormalizer\Transformers;

use MauticPlugin\IntegrationsBundle\Sync\DAO\Sync\Order\FieldDAO;

interface TransformerInterface
{
    const PICKLIST_TYPE       = 'picklist';
    const REFERENCE_TYPE      = 'reference';
    const DNC_TYPE            = 'dnc';
    const CURRENCY_TYPE       = 'currency';
    const INTEGER_TYPE        = 'integer';
    const MULTI_PICKLIST_TYPE = 'multipicklist';
    const SKYPE_TYPE          = 'skype';
    const TIME_TYPE           = 'time';
    const URL_TYPE            = 'url';
    const AUTOGENERATED_TYPE  = 'autogenerated';

    public function transform($type, FieldDAO $value);
}
