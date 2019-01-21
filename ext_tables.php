<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'YJSLT.PortfolioYjslt',
            'Trainings',
            'catalogue de formation YJSLT'
        );

        $pluginSignature = str_replace('_', '', 'portfolio_yjslt') . '_trainings';
        $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:portfolio_yjslt/Configuration/FlexForms/flexform_trainings.xml');

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'YJSLT.PortfolioYjslt',
            'Profile',
            'CVteque'
        );

        $pluginSignature = str_replace('_', '', 'portfolio_yjslt') . '_profile';
        $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:portfolio_yjslt/Configuration/FlexForms/flexform_profile.xml');

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'YJSLT.PortfolioYjslt',
            'Project',
            'Projets'
        );

        $pluginSignature = str_replace('_', '', 'portfolio_yjslt') . '_project';
        $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:portfolio_yjslt/Configuration/FlexForms/flexform_project.xml');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('portfolio_yjslt', 'Configuration/TypoScript', 'PortfolioYJSLT');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_portfolioyjslt_domain_model_project', 'EXT:portfolio_yjslt/Resources/Private/Language/locallang_csh_tx_portfolioyjslt_domain_model_project.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_portfolioyjslt_domain_model_project');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_portfolioyjslt_domain_model_profil', 'EXT:portfolio_yjslt/Resources/Private/Language/locallang_csh_tx_portfolioyjslt_domain_model_profil.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_portfolioyjslt_domain_model_profil');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_portfolioyjslt_domain_model_education', 'EXT:portfolio_yjslt/Resources/Private/Language/locallang_csh_tx_portfolioyjslt_domain_model_education.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_portfolioyjslt_domain_model_education');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_portfolioyjslt_domain_model_job', 'EXT:portfolio_yjslt/Resources/Private/Language/locallang_csh_tx_portfolioyjslt_domain_model_job.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_portfolioyjslt_domain_model_job');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_portfolioyjslt_domain_model_skill', 'EXT:portfolio_yjslt/Resources/Private/Language/locallang_csh_tx_portfolioyjslt_domain_model_skill.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_portfolioyjslt_domain_model_skill');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_portfolioyjslt_domain_model_category', 'EXT:portfolio_yjslt/Resources/Private/Language/locallang_csh_tx_portfolioyjslt_domain_model_category.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_portfolioyjslt_domain_model_category');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_portfolioyjslt_domain_model_socialnetwork', 'EXT:portfolio_yjslt/Resources/Private/Language/locallang_csh_tx_portfolioyjslt_domain_model_socialnetwork.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_portfolioyjslt_domain_model_socialnetwork');

    }
);
