<?php
namespace AHT\HelloWorld\Block\Adminhtml\Subscription;

class Grid extends \Magento\Backend\Block\Widget\Grid\Extended
{
    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \Magento\Backend\Helper\Data $backendHelper,
        \AHT\HelloWorld\Model\ResourceModel\Subscription\Collection $subscriptionCollection,
        array $data = []
    ) {
        $this->_subscriptionCollection = $subscriptionCollection;
        parent::__construct($context, $backendHelper, $data);
        $this->setEmptyText(__('No Subscriptions Found'));
    }
    protected function _prepareCollection()
    {
        $this->setCollection($this->_subscriptionCollection);
        return parent::_prepareCollection();
    }
    
    protected function _prepareColumns()
    {
        $this->addColumn(
            'subscription_id',
            [
         'header' => __('ID'),
         'index' => 'subscription_id'
     ]
        );
        $this->addColumn(
            'firstname',
            [
         'header' => __('Firstname'),
         'index' => 'firstname'
     ]
        );
        $this->addColumn(
            'lastname',
            [
         'header' => __('Lastname'),
         'index' => 'lastname'
     ]
        );
        $this->addColumn(
            'email',
            [
         'header' => __('Email address'),
         'index' => 'email'
     ]
        );
        $this->addColumn(
            'status',
            [
         'header' => __('Status'),
         'index' => 'status',
         'frame_callback' => [$this, 'decorateStatus']
     ]
        );
        return $this;
    }
}
