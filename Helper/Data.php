<?php

/**
 * @copyright Copyright (c) 2016 www.magebuzz.com
 */

namespace Magebuzz\Christmasdecoration\Helper;

use Magento\Framework\App\Filesystem\DirectoryList;

/**
 * Catalog data helper
 * @SuppressWarnings(PHPMD.TooManyFields)
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class Data extends \Magento\Framework\App\Helper\AbstractHelper {

    protected $_blockFactory;
    protected $_storeManager;
    protected $_fileSystem;

    public function __construct(
    \Magento\Framework\App\Helper\Context $context, \Magento\Framework\View\Element\BlockFactory $blockFactory, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\Filesystem $fileSystem
    ) {
        $this->_blockFactory = $blockFactory;
        $this->_storeManager = $storeManager;
        $this->_fileSystem = $fileSystem;
        parent::__construct($context);
    }

    public function getViewImageUrl($path) {
        $viewImgUrl = $this->_blockFactory->createBlock('Magento\Backend\Block\Widget\Form\Generic')->getViewFileUrl('Magebuzz_Christmasdecoration::' . $path);
        if ($viewImgUrl) {
            return $viewImgUrl;
        }
        return '';
    }

    public function getUploadImageUrl($imageName, $dir) {
        $path = $this->_fileSystem->getDirectoryRead(
                        DirectoryList::MEDIA
                )->getAbsolutePath($dir);
        if (file_exists($path . $imageName)) {
            $path = $this->_storeManager->getStore()->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_MEDIA);
            return $path . $dir . $imageName;
        } else {
            return '';
        }
    }

}
