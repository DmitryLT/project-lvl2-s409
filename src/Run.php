<?php

namespace Generate\Differences\Run;
use function Generate\Differences\Options\showOptions;
use function Generate\Differences\GetDiff\getDiff;
use Docopt;

const OPTIONS = <<<DOC
Generate diff

Usage:
    gendiff (-h|--help)
    gendiff [--format <fmt>] <firstFile> <secondFile>

Options:
    -h --help           Show this screen
    --format <fmt>      Report format [default: pretty]

DOC;

function run()
{
    $response = Docopt::handle(OPTIONS);

    $firstFile = $response->args["<firstFile>"];
    $secondFile = $response->args["<secondFile>"];

    echo getDiff($firstFile, $secondFile);
}