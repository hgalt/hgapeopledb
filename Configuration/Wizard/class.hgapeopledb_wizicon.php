class hgapeopledb_wizicon {

        /**
         * Processing the wizard items array
         *
         * @param array $wizardItems The wizard items
         * @return array Modified array with wizard items
         */
        function proc($wizardItems)     {
                $wizardItems['plugins_hgapeopledb'] = array(
                        'icon' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('examples') . 'Resources/Public/Images/PiErrorWizard.png',
                        'title' => $GLOBALS['LANG']->sL('wizard_title'),
                        'description' => $GLOBALS['LANG']->sL('wizard_description'),
                        'params' => '&defVals[tt_content][CType]=list&&defVals[tt_content][list_type]=hgapeopledb_hgapeopledb'
                );

                return $wizardItems;
        }
}