<?php

namespace Ekkinox\KataBooks\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * @package Ekkinox\KataBooks\Command
 */
class CartSimulatorCommand extends Command
{
    const NAME = 'cart:simulate';

    /**
     * @inheritdoc
     */
    protected function configure()
    {
        $this
            ->setName(static::NAME)
            ->setDescription('Simulates shopping cart.')
            ->setHelp('This command allows you to simulate bookstore shopping cart.');
    }

    /**
     * @inheritdoc
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln(
            [
                'Bookstore shopping cart simulator',
                '=================================',
                ''
            ]
        );
    }
}