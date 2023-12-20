<?php

interface Provider
{
    public function getAuthorizationUrl();
}

abstract class AbstractProvider
{
    abstract protected function getAuthorizationUrl();
}

class FacebookProvider extends AbstractProvider implements Provider
{
    protected function getAuthorizationUrl()
    {
        return '';
    }
}

?>


<!-- <?php

        interface Repository
        {
            public function save($data);
        }

        class MongoRepository implements Repository
        {
            public function save($data)
            {
            }
        }

        class FileRepository implements Repository
        {
            public function save($data)
            {
            }
        }

        ?> -->

<!-- <?php

        interface Logger
        {
            public function execute($message);
        }

        class LogToFile implements Logger
        {
            public function execute($message)
            {
                var_dump('Log the message to a file: ' . $message);
            }
        }

        class LogToDatabase implements Logger
        {
            public function execute($message)
            {
                var_dump('Log the message to a Database: ' . $message);
            }
        }

        class UsersController
        {
            protected $logger;

            public function __construct(Logger $logger)
            {
                $this->logger = $logger;
            }

            public function show()
            {
                $user = 'JohnDoe';

                // Log this info....
                $this->logger->execute($user);
            }
        }

        $controller = new UsersController(new LogToDatabase);
        $controller->show();

        ?> -->