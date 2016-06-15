<?php
/**
 * @author David Namenyi <dnamenyi@gmail.com>
 * Date: 2016.06.16.
 */

namespace Jobs;

abstract class AbstractJob {

    /** @var array */
    public $args;

    public function setUp()
    {
        // ... Set up environment for this job
    }

    public function perform()
    {
        // .. Run job
    }

    public function tearDown()
    {
        // ... Remove environment for this job
    }

}