# PHP Resque Queue & Worker

We tried out the chrisboulton/php-resque package, which is the PHP port of [Resque](https://github.com/resque/resque), a Redis-backed Ruby library for creating background jobs, placing those jobs on one or more queues, and processing them later.

## Requirements

* PHP 5.3+
* Redis 2.2+
* Composer

Here is an article on how to install and use Redis on Ubuntu: <https://www.digitalocean.com/community/tutorials/how-to-install-and-use-redis>

## Usage

Documentation of the package: <https://github.com/chrisboulton/php-resque>

Make sure Redis is up and running on port 6379: `service redis_6379 status`

To start the worker, run this:
`VERBOSE=1 QUEUE=yo_queue php vendor/bin/resque`

For process controlling and monitoring, you can use [Supervisor](http://supervisord.org/) for example.

To monitor your workers health and job activities in realtime, you can use ResqueBoard which is an analytics software for PHP Resque: <https://github.com/wa0x6e/ResqueBoard>