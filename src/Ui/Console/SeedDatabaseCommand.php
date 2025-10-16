<?php

declare(strict_types=1);

namespace App\Ui\Console;

use App\Infrastructure\Persistence\DataFixtures\DatabaseSeeder;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(name: 'app:seed', description: 'Seed the database with demo data for the RealWorld API')]
final class SeedDatabaseCommand extends Command
{
    public function __construct(private readonly DatabaseSeeder $seeder)
    {
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $this->seeder->seed();
        $output->writeln('<info>Demo data seeded successfully.</info>');

        return Command::SUCCESS;
    }
}
