<?php

declare(strict_types=1);

namespace MyVendor\MyExtension\Classes;

use TYPO3\CMS\Core\Resource\File;
use TYPO3\CMS\Core\Resource\StorageRepository;

final class MyClass
{
    private StorageRepository $storageRepository;

    public function __construct(StorageRepository $storageRepository)
    {
        $this->storageRepository = $storageRepository;
    }

    public function doSomething(): void
    {
        $storageUid = 17;
        $someFileIdentifier = 'templates/images/banner.jpg';

        $storage = $this->storageRepository->getStorageObject($storageUid);

        /** @var File $file */
        $file = $storage->getFile($someFileIdentifier);

        if ($file->delete()) {
            // ... file was deleted successfully
        } else {
            // ... an error occurred
        }

        // ... more logic
    }
}
