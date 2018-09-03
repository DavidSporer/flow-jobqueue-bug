------------------
Job Queue Bug in Flow 4.3.9, 5.0.7 and 5.1.1
------------------

This is a short dummy project to reproduce a bug that exists since Flow 4.3.9, 5.0.7 and 5.1.1.
It prevents job queue entries from being executed.

To reproduce the bug, follow these steps:

1) Clone the repository and set up the usual Flow stuff (database, run doctrine:migrate and for this project ./flow queue:setup dummy)
2) There's a dummy command controller that adds an entry to a job queue called "dummy". If it's successfully executed, this entry writes to the System Log. (./flow dummy:create)
3) If you run the dummy job queue with one of the mentioned Flow versions (./flow job:work dummy), the job queue entry will stay in status reserved and won't be processed. If the job queue is run as a service, the status will changed to failed.
