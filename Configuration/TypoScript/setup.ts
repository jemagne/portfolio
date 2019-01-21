
plugin.tx_portfolioyjslt_trainings {
    view {
        templateRootPaths.0 = EXT:portfolio_yjslt/Resources/Private/Templates/
        templateRootPaths.1 = {$plugin.tx_portfolioyjslt_trainings.view.templateRootPath}
        partialRootPaths.0 = EXT:portfolio_yjslt/Resources/Private/Partials/
        partialRootPaths.1 = {$plugin.tx_portfolioyjslt_trainings.view.partialRootPath}
        layoutRootPaths.0 = EXT:portfolio_yjslt/Resources/Private/Layouts/
        layoutRootPaths.1 = {$plugin.tx_portfolioyjslt_trainings.view.layoutRootPath}
    }
    persistence {
        storagePid = {$plugin.tx_portfolioyjslt_trainings.persistence.storagePid}
        #recursive = 1
    }
    features {
        #skipDefaultArguments = 1
        # if set to 1, the enable fields are ignored in BE context
        ignoreAllEnableFieldsInBe = 0
        # Should be on by default, but can be disabled if all action in the plugin are uncached
        requireCHashArgumentForActionArguments = 1
    }
    mvc {
        #callDefaultActionIfActionCantBeResolved = 1
    }
}

plugin.tx_portfolioyjslt_profile {
    view {
        templateRootPaths.0 = EXT:portfolio_yjslt/Resources/Private/Templates/
        templateRootPaths.1 = {$plugin.tx_portfolioyjslt_profile.view.templateRootPath}
        partialRootPaths.0 = EXT:portfolio_yjslt/Resources/Private/Partials/
        partialRootPaths.1 = {$plugin.tx_portfolioyjslt_profile.view.partialRootPath}
        layoutRootPaths.0 = EXT:portfolio_yjslt/Resources/Private/Layouts/
        layoutRootPaths.1 = {$plugin.tx_portfolioyjslt_profile.view.layoutRootPath}
    }
    persistence {
        storagePid = {$plugin.tx_portfolioyjslt_profile.persistence.storagePid}
        #recursive = 1
    }
    features {
        #skipDefaultArguments = 1
        # if set to 1, the enable fields are ignored in BE context
        ignoreAllEnableFieldsInBe = 0
        # Should be on by default, but can be disabled if all action in the plugin are uncached
        requireCHashArgumentForActionArguments = 1
    }
    mvc {
        #callDefaultActionIfActionCantBeResolved = 1
    }
}

plugin.tx_portfolioyjslt_project {
    view {
        templateRootPaths.0 = EXT:portfolio_yjslt/Resources/Private/Templates/
        templateRootPaths.1 = {$plugin.tx_portfolioyjslt_project.view.templateRootPath}
        partialRootPaths.0 = EXT:portfolio_yjslt/Resources/Private/Partials/
        partialRootPaths.1 = {$plugin.tx_portfolioyjslt_project.view.partialRootPath}
        layoutRootPaths.0 = EXT:portfolio_yjslt/Resources/Private/Layouts/
        layoutRootPaths.1 = {$plugin.tx_portfolioyjslt_project.view.layoutRootPath}
    }
    persistence {
        storagePid = {$plugin.tx_portfolioyjslt_project.persistence.storagePid}
        #recursive = 1
    }
    features {
        #skipDefaultArguments = 1
        # if set to 1, the enable fields are ignored in BE context
        ignoreAllEnableFieldsInBe = 0
        # Should be on by default, but can be disabled if all action in the plugin are uncached
        requireCHashArgumentForActionArguments = 1
    }
    mvc {
        #callDefaultActionIfActionCantBeResolved = 1
    }
}

# these classes are only used in auto-generated templates
plugin.tx_portfolioyjslt._CSS_DEFAULT_STYLE (
    textarea.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    input.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    .tx-portfolio-yjslt table {
        border-collapse:separate;
        border-spacing:10px;
    }

    .tx-portfolio-yjslt table th {
        font-weight:bold;
    }

    .tx-portfolio-yjslt table td {
        vertical-align:top;
    }

    .typo3-messages .message-error {
        color:red;
    }

    .typo3-messages .message-ok {
        color:green;
    }
)
