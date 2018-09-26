<?php
/**
 * This file is part of PHPWord - A pure PHP library for reading and writing
 * word processing documents.
 *
 * PHPWord is free software distributed under the terms of the GNU Lesser
 * General Public License version 3 as published by the Free Software Foundation.
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code. For the full list of
 * contributors, visit https://github.com/PHPOffice/PHPWord/contributors.
 *
 * @see         https://github.com/PHPOffice/PHPWord
 * @copyright   2010-2018 PHPWord contributors
 * @license     http://www.gnu.org/licenses/lgpl.txt LGPL version 3
 */

namespace WH\PhpWord\Writer\RTF\Style;

/**
 * RTF indentation style writer
 *
 * @since 0.11.0
 */
class Indentation extends AbstractStyle
{
    /**
     * Write style
     *
     * @return string
     */
    public function write()
    {
        $style = $this->getStyle();
        if (!$style instanceof \WH\PhpWord\Style\Indentation) {
            return '';
        }

        $content = '\fi' . $style->getFirstLine();
        $content .= '\li' . $style->getLeft();
        $content .= '\ri' . $style->getRight();

        return $content . ' ';
    }
}
