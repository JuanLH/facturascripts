<?php
/**
 * This file is part of FacturaScripts
 * Copyright (C) 2017-2020 Carlos Garcia Gomez <carlos@facturascripts.com>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */
namespace FacturaScripts\Test\Core\Base;

use FacturaScripts\Core\Base\Cache;
use PHPUnit\Framework\TestCase;

/**
 * Description of CacheTest
 *
 * @author Carlos Carlos Garcia Gomez <carlos@facturascripts.com>
 * @covers \FacturaScripts\Core\Base\Cache
 */
class CacheTest extends TestCase
{

    /**
     * @var Cache
     */
    protected $object;

    protected function setUp()
    {
        $this->object = new Cache();
        $this->object->clear();
    }

    /**
     * @covers \FacturaScripts\Core\Base\Cache::get
     */
    public function testGet()
    {
        $this->object->set('TEST', 1234);
        $data = $this->object->get('TEST');
        $this->assertEquals(1234, $data);
        $this->assertSame(1234, $data);
        $this->assertNotSame('1234', $data);
        $this->assertNotNull($data);
        $this->assertNotFalse($data);
    }

    /**
     * @covers \FacturaScripts\Core\Base\Cache::delete
     */
    public function testDelete()
    {
        $this->object->set('TEST', 1234);
        $this->object->delete('TEST');
        $this->assertEmpty($this->object->get('TEST'));
    }

    /**
     * @covers \FacturaScripts\Core\Base\Cache::clear
     */
    public function testClear()
    {
        $this->object->set('TEST_1', 12345);
        $this->object->clear();
        $this->assertEmpty($this->object->get('TEST_1'));
        $this->assertNull($this->object->get('TEST_1'));
    }
}
