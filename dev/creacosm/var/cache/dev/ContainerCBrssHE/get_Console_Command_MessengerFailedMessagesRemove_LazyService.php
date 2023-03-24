<?php

namespace ContainerCBrssHE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Console_Command_MessengerFailedMessagesRemove_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.console.command.messenger_failed_messages_remove.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/LazyCommand.php';

        return $container->privates['.console.command.messenger_failed_messages_remove.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('messenger:failed:remove', [], 'Remove given messages from the failure transport', false, #[\Closure(name: 'console.command.messenger_failed_messages_remove', class: 'Symfony\\Component\\Messenger\\Command\\FailedMessagesRemoveCommand')] function () use ($container): \Symfony\Component\Messenger\Command\FailedMessagesRemoveCommand {
            return ($container->privates['console.command.messenger_failed_messages_remove'] ?? $container->load('getConsole_Command_MessengerFailedMessagesRemoveService'));
        });
    }
}
