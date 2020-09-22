<?php

declare(strict_types=1);

/**
 * @copyright   Copyright 2020, CitrusFramework. All Rights Reserved.
 * @author      take64 <take64@citrus.tk>
 * @license     http://www.citrus.tk/
 */

namespace Citrus\Controller;

use Citrus\Formmap;

/**
 * コントローラー共通処理
 */
abstract class SmartyController
{
    /** @var Formmap */
    protected $formmap;



    /**
     * Formmap取得
     *
     * @return Formmap
     */
    protected function callFormmap(): Formmap
    {
        $this->formmap = ($this->formmap ?: Formmap::sharedInstance());
        return $this->formmap;
    }
}
