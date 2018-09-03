<?php

namespace Demo\Dummy\Service;

/**
 * Created by PhpStorm.
 * User: davidsporer
 * Date: 03.09.18
 * Time: 11:15
 */

use Flowpack\JobQueue\Common\Annotations as Job;
use Neos\Flow\Annotations as Flow;
use Neos\Flow\Log\SystemLoggerInterface;

class DummyQueueService {


    /**
     * @Flow\Inject
     * @var SystemLoggerInterface
     */
    protected $systemLogger;

    /**
     * Creates a job queue entry
     * @Job\Defer(queueName="dummy")
     */
    public function createJobQueueEntry() {
        $this->systemLogger->log('I am logged in a queue.');
    }

}