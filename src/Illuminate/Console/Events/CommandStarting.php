<?php

namespace Illuminate\Console\Events;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CommandStarting
{
    /**
     * The command name.
     *
     * @var string
     */
    public $command;

    /**
     * The console input.
     *
     * @var \Symfony\Component\Console\Input\InputInterface|null
     */
    public $input;

    /**
     * The command output.
     *
     * @var \Symfony\Component\Console\Output\OutputInterface|null
     */
    protected $output;

    /**
     * Create a new event instance.
     *
     * @param  string  $command
     * @param  \Symfony\Component\Console\Input\InputInterface  $input
     * @param  \Symfony\Component\Console\Output\OutputInterface  $output
     * @param  int  $exitCode
     */
    public function __construct($command, InputInterface $input, OutputInterface $output)
    {
        $this->command = $command;
        $this->input = $input;
        $this->output = $output;
    }
}