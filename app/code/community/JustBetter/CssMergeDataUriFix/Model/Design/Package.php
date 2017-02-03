<?php
trait JustBetter_CssMergeDataUriFix {

    public function beforeMergeCss($file, $contents)
    {
       $this->_setCallbackFileDir($file);

       $cssImport = '/@import\\s+([\'"])(.*?)[\'"]/';
       $contents = preg_replace_callback($cssImport, array($this, '_cssMergerImportCallback'), $contents);

       $cssUrl = '/url\\(\\s*(?![\\\'\\"]?data:)([^\\)\\s]+)\\s*\\)?/';
       $contents = preg_replace_callback($cssUrl, array($this, '_cssMergerUrlCallback'), $contents);

       return $contents;
    }
}

// JustBetter_CacheBuster module compatiblity
if (Mage::helper('core')->isModuleEnabled('JustBetter_CacheBuster')) {
	class JustBetter_CssMergeDataUriFix_Model_Design_Package extends JustBetter_CacheBuster_Model_Design_Package {
		use JustBetter_CssMergeDataUriFix;
	}
} else {
	class JustBetter_CssMergeDataUriFix_Model_Design_Package extends Mage_Core_Model_Design_Package {
		use JustBetter_CssMergeDataUriFix;
	}
}