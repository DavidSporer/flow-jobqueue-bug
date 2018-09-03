<?php

namespace Demo\Dummy\Command;

/**
 * Created by PhpStorm.
 * User: davidsporer
 * Date: 03.09.18
 * Time: 11:14
 */

use Demo\Dummy\Service\DummyQueueService;
use Neos\Flow\Annotations as Flow;
use Neos\Flow\Cli\CommandController;

class DummyCommandController extends CommandController {

    /**
     * @var DummyQueueService
     * @Flow\Inject
     */
    protected $dummyQueueService;

    public function createCommand() {
        $this->dummyQueueService->createJobQueueEntry();
    }

}