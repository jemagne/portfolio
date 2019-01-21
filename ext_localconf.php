<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'YJSLT.PortfolioYjslt',
            'Trainings',
            [
                'Training' => 'list, show'
            ],
            // non-cacheable actions
            [
                'Training' => 'search'
            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'YJSLT.PortfolioYjslt',
            'Profile',
            [
                'Profile' => 'list, show'
            ],
            // non-cacheable actions
            [
                'Project' => '',
                'Profil' => '',
                'Education' => '',
                'Skill' => ''
            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'YJSLT.PortfolioYjslt',
            'Project',
            [
                'Project' => 'list, show, hightlight, skills'
            ],
            // non-cacheable actions
            [
                'Projet' => 'search'
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    trainings {
                        iconIdentifier = portfolio_yjslt-plugin-trainings
                        title = LLL:EXT:portfolio_yjslt/Resources/Private/Language/locallang_db.xlf:tx_portfolio_yjslt_trainings.name
                        description = LLL:EXT:portfolio_yjslt/Resources/Private/Language/locallang_db.xlf:tx_portfolio_yjslt_trainings.description
                        tt_content_defValues {
                            CType = list
                            list_type = portfolioyjslt_trainings
                        }
                    }
                    profile {
                        iconIdentifier = portfolio_yjslt-plugin-profile
                        title = LLL:EXT:portfolio_yjslt/Resources/Private/Language/locallang_db.xlf:tx_portfolio_yjslt_profile.name
                        description = LLL:EXT:portfolio_yjslt/Resources/Private/Language/locallang_db.xlf:tx_portfolio_yjslt_profile.description
                        tt_content_defValues {
                            CType = list
                            list_type = portfolioyjslt_profile
                        }
                    }
                    project {
                        iconIdentifier = portfolio_yjslt-plugin-project
                        title = LLL:EXT:portfolio_yjslt/Resources/Private/Language/locallang_db.xlf:tx_portfolio_yjslt_project.name
                        description = LLL:EXT:portfolio_yjslt/Resources/Private/Language/locallang_db.xlf:tx_portfolio_yjslt_project.description
                        tt_content_defValues {
                            CType = list
                            list_type = portfolioyjslt_project
                        }
                    }
                }
                show = *
            }
       }'
    );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'portfolio_yjslt-plugin-trainings',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:portfolio_yjslt/Resources/Public/Icons/user_plugin_trainings.svg']
			);
		
			$iconRegistry->registerIcon(
				'portfolio_yjslt-plugin-profile',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:portfolio_yjslt/Resources/Public/Icons/user_plugin_profile.svg']
			);
		
			$iconRegistry->registerIcon(
				'portfolio_yjslt-plugin-project',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:portfolio_yjslt/Resources/Public/Icons/user_plugin_project.svg']
			);
		
    }
);
