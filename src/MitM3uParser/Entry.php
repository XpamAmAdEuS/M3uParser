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
     * @var string
     */

    private $day;
    /**
     * @var string
     */

    private $starttime;
    /**
     * @var string
     */

    private $endtime;
    /**
     * @var string
     */

    private $volume;

    public function setDay($day)
    {
        $this->day = $day;

        return $this;
    }
    /**
     * Tile file
     *
     * @return string|null
     */
    public function getDay()
    {
        return $this->day;
    }

    public function setStarttime($starttime)
    {
        $this->starttime = $starttime;

        return $this;
    }
    /**
     * Tile file
     *
     * @return string|null
     */
    public function getStarttime()
    {
        return $this->starttime;
    }

    public function setEndtime($endtime)
    {
        $this->endtime = $endtime;

        return $this;
    }
    /**
     * Tile file
     *
     * @return string|null
     */
    public function getEndtime()
    {
        return $this->endtime;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
    /**
     *  File name
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

    /**
     * @param string $volume
     * @return Entry
     */
    public function setVolume($volume)
    {
        $this->volume = $volume;

        return $this;
    }

    /**
     * File volume
     *
     * @return string
     */
    public function getVolume()
    {
        return $this->volume;
    }

}
