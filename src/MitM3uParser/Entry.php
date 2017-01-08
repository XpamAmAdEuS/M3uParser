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
class Entry
{
    /**
     * @var string
     */
    private $name;
    /**
     * @var string
     */
    private $time;
    /**
     * @param string $name
     * @return Entry
     */

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
    /**
     * Tile file
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $time
     * @return Entry
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * File length
     *
     * @return string
     */
    public function getTime()
    {
        return $this->time;
    }

    public function setDay($day)
    {
        $this->day = $day;

        return $this;
    }
}
