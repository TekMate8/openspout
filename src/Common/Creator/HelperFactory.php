<?php

namespace OpenSpout\Common\Creator;

use OpenSpout\Common\Helper\EncodingHelper;
use OpenSpout\Common\Helper\FileSystemHelper;
use OpenSpout\Common\Helper\GlobalFunctionsHelper;
use OpenSpout\Common\Helper\StringHelper;

/**
 * Class HelperFactory
 * Factory to create helpers
 */
class HelperFactory
{
    /**
     * @return GlobalFunctionsHelper
     */
    public function createGlobalFunctionsHelper()
    {
        return new GlobalFunctionsHelper();
    }

    /**
     * @param string $baseFolderPath The path of the base folder where all the I/O can occur
     * @return FileSystemHelper
     */
    public function createFileSystemHelper($baseFolderPath)
    {
        return new FileSystemHelper($baseFolderPath);
    }

    /**
     * @param GlobalFunctionsHelper $globalFunctionsHelper
     * @return EncodingHelper
     */
    public function createEncodingHelper(GlobalFunctionsHelper $globalFunctionsHelper)
    {
        return new EncodingHelper($globalFunctionsHelper);
    }

    /**
     * @return StringHelper
     */
    public function createStringHelper()
    {
        return new StringHelper();
    }
}