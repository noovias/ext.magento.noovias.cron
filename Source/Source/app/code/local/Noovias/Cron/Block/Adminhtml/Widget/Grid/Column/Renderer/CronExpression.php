<?php
/**
 * Noovias_Cron_Block_Adminhtml_Widget_Grid_Column_Renderer_CronExpression
 *
 * NOTICE OF LICENSE
 *
 * Noovias_Cron is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Noovias_Cron is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Noovias_Cron. If not, see <http://www.gnu.org/licenses/>.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Noovias_Cron to newer
 * versions in the future. If you wish to customize Noovias_Cron for your
 * needs please refer to http://www.noovias.com for more information.
 *
 * @category    Noovias
 * @package        Noovias_Cron
 * @copyright   Copyright (c) 2012 <info@noovias.com> - noovias.com
 * @license     <http://www.gnu.org/licenses/>
 *                 GNU General Public License (GPL 3)
 * @link        http://www.noovias.com
 */

/**
 * @category       Noovias
 * @package        Noovias_Cron
 * @copyright      Copyright (c) 2012 <info@noovias.com> - noovias.com
 * @license        http://opensource.org/licenses/osl-3.0.php
 *                 Open Software License (OSL 3.0)
 * @author      noovias.com - Core Team <info@noovias.com>
 */
class Noovias_Cron_Block_Adminhtml_Widget_Grid_Column_Renderer_CronExpression
    extends Mage_Adminhtml_Block_Widget_Grid_Column_Renderer_Abstract
{
    /**
     * Renders grid column
     *
     * @param Varien_Object $row
     * @return string
     */
    public function _getValue(Varien_Object $row)
    {
        $return = '';
        $cronExpr = $row->getCronExpr();
        if ($cronExpr) {
            $style = 'font-weight:bold;';
            $return = '<span style="' . $style . '">' . $cronExpr . '</span>';
        }
        return $return;
    }
}