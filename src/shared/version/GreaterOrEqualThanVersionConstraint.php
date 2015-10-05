<?php
namespace PharIo\Phive {

    class GreaterOrEqualThanVersionConstraint implements VersionConstraintInterface
    {
        /**
         * @var Version
         */
        private $minimalVersion;

        /**
         * @param Version $minimalVersion
         */
        public function __construct(Version $minimalVersion) {
            $this->minimalVersion = $minimalVersion;
        }

        /**
         * @param Version $version
         *
         * @return bool
         */
        public function matches(Version $version) {
            return $version->getVersionString() == $this->minimalVersion->getVersionString() || $version->isGreaterThan($this->minimalVersion);
        }

    }

}

