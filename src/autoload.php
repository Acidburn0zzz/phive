<?php
// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart
// this is an autogenerated file - do not edit
spl_autoload_register(
    function($class) {
        static $classes = null;
        if ($classes === null) {
            $classes = array(
                'theseer\\phive\\cli' => '/CLI.php',
                'theseer\\phive\\clicommandoptions' => '/CLICommandOptions.php',
                'theseer\\phive\\clicommandoptionsexception' => '/CLICommandOptionsException.php',
                'theseer\\phive\\clirequest' => '/CLIRequest.php',
                'theseer\\phive\\commandinterface' => '/commands/CommandInterface.php',
                'theseer\\phive\\commandlocator' => '/commands/CommandLocator.php',
                'theseer\\phive\\commandlocatorexception' => '/commands/CommandLocatorException.php',
                'theseer\\phive\\factory' => '/Factory.php',
                'theseer\\phive\\helpcommand' => '/commands/help/HelpCommand.php',
                'theseer\\phive\\installcommand' => '/commands/install/InstallCommand.php',
                'theseer\\phive\\installcommandconfig' => '/commands/install/InstallCommandConfig.php',
                'theseer\\phive\\installworker' => '/commands/install/InstallService.php',
                'theseer\\phive\\phardownloader' => '/commands/install/PharDownloader.php',
                'theseer\\phive\\pharfile' => '/commands/install/PharFile.php',
                'theseer\\phive\\pharioclient' => '/commands/install/PharIoClient.php',
                'theseer\\phive\\version' => '/commands/version/Version.php',
                'theseer\\phive\\versioncommand' => '/commands/version/VersionCommand.php'
            );
        }
        $cn = strtolower($class);
        if (isset($classes[$cn])) {
            require __DIR__ . $classes[$cn];
        }
    }
);
// @codeCoverageIgnoreEnd
