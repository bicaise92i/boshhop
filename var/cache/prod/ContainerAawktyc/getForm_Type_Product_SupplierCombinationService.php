<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'form.type.product.supplier_combination' shared service.

return $this->services['form.type.product.supplier_combination'] = new \PrestaShopBundle\Form\Admin\Product\ProductSupplierCombination(${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.legacy.context']) ? $this->services['prestashop.adapter.legacy.context'] : ($this->services['prestashop.adapter.legacy.context'] = new \PrestaShop\PrestaShop\Adapter\LegacyContext())) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.data_provider.currency']) ? $this->services['prestashop.adapter.data_provider.currency'] : $this->load('getPrestashop_Adapter_DataProvider_CurrencyService.php')) && false ?: '_'});