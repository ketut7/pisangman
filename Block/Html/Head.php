<?php
/**
 * Kemana Core Modules
 * Copyright (C) 2018 PT. Kemana Teknologi Solusi.
 *
 * @author   Rizal Fauzie <rfridwan@kemana.com>
 * @since    1.0.0
 */

namespace Kemana\Core\Block\Html;

class Head extends \Magento\Backend\Block\Template
{
    /**
     * @var \Magento\Backend\Model\Auth\Session
     */
    protected $_authSession;

    /**
     * @var \Magento\Framework\App\Config\ScopeConfigInterface
     */
    protected $scopeConfig;

    /**
     * @param \Magento\Backend\Model\Auth\Session $authSession
     * @param \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
     * @param \Magento\Backend\Block\Template\Context $context
     * @param array $data
     */
    public function __construct(
        \Magento\Backend\Model\Auth\Session $authSession,
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig,
        \Magento\Backend\Block\Template\Context $context,
        array $data = []
    ) {
        $this->_authSession = $authSession;
        $this->scopeConfig = $scopeConfig;
        parent::__construct($context, $data);
    }

    /**
     * Preparing layout
     *
     * @return \Magento\Catalog\Block\Breadcrumbs
     */
    protected function _prepareLayout()
    {
        $admTitle = $this->scopeConfig->getValue('kemanacore/general/admin_title');
        $this->pageConfig->getTitle()->set($admTitle);
        return parent::_prepareLayout();
    }

    /**
     * Render block HTML
     *
     * @return string
     */
    protected function _toHtml()
    {
        $size = $this->scopeConfig->getValue('kemanacore/general/uisize');
        $htmlSize = '62.5%';
        $bodySize = '1.4rem';

        switch ($size) {
            case 'huge':
                $htmlSize = '65%';
                $bodySize = '1.4rem';
                break;
            case 'medium':
                $htmlSize = '60%';
                $bodySize = '1.2rem';
                break;
            case 'small':
                $htmlSize = '57.5%';
                $bodySize = '1.2rem';
                break;
            case 'xsmall':
                $htmlSize = '55%';
                $bodySize = '1.1rem';
                break;
            case 'large':
            default:
                $htmlSize = '62.5%';
                $bodySize = '1.4rem';
                break;
        }

        return '<style type="text/css" id="kemanacss">'.
        'html { font-size: '.$htmlSize.' !important; }' .
        'body { font-size: '.$bodySize.' !important; }' .
        '</style>';
    }
}
