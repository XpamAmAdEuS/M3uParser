<?php
/**
 *
 * This software is distributed under the GNU GPL v3.0 license.
 *
 * @author    XpamAmAdEuS
 * @copyright 2017 http://muzikaito.hr
 * @license   http://www.gnu.org/licenses/gpl-3.0.txt
 * @link      https://github.com/XpamAmAdEuS/MitM3uParser
 *
 */

namespace MitM3uParser;

class MitM3uParser
{
    public function parseFile($file)
    {
        $str = @file_get_contents($file);
        if (false === $str) {
            throw new Exception('Can\'t read file.');
        }

        return $this->parse($str);
    }

    public function parse($str)
    {
        $data = array();
        $lines = explode("\n", $str);

        while (list(, $line) = each($lines)) {

            $entry = $this->parseLine($line, $lines);
            if (null === $entry) {
                continue;
            }

            $data[] = $entry;
        }

        return $data;
    }

    protected function parseLine($lineStr, array $linesStr)
    {
        $entry = new Entry();
        $lineStr = trim($lineStr);
        if (strtoupper(substr($lineStr, 0, 11)) === '#BARIX-4,,,') {
            return null;
        }
        if (strtoupper(substr($lineStr, 0, 4)) > '#./{') {
            return null;
        }
        if (strtoupper(substr($lineStr, 0, 4)) === '') {
            return null;
        }
        if (strtoupper(substr($lineStr, 0, 4)) === '#./{') {
            $timeStr = substr($lineStr, 4, 8);
            $title = substr($lineStr, 17, strrpos($lineStr, '.') -17);
            $entry->setName($title);
            $entry->setTime($timeStr);
            $day = substr($lineStr, 11, 2);
            $entry->setDay($day);
            $starttime = substr($lineStr, 14, 8);
            $entry->setStarttime($starttime);
            $endtime = substr($lineStr, 23, 8);
            $entry->setEndtime($endtime);
            $volume = substr($lineStr, 34, strrpos($lineStr, ',') -36);
            $entry->setVolume($volume);

        }
        return $entry;
    }


}