<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Zend\Db\Sql\Platform\Sqlite;

use Zend\Db\Sql\Platform\AbstractPlatform;

class Sqlite extends AbstractPlatform
{
    public function __construct()
    {
        $this->setTypeDecorator('Zend\Db\Sql\Select', new SelectDecorator());
    }
}
