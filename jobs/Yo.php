<?php
/**
 * @author David Namenyi <dnamenyi@gmail.com>
 * Date: 2016.06.15.
 */

namespace Jobs;

class Yo extends AbstractJob {

    public function perform()
    {
        file_put_contents('output/yo.txt', $this->args['text']);
    }

}