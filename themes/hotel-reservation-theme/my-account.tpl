{*
* 2007-2015 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2015 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

{capture name=path}{l s='Mi cuenta'}{/capture}

<h1 class="page-heading">{l s='Mi cuenta'}</h1>
{if isset($account_created)}
	<p class="alert alert-success">
		{l s='Tu cuenta ha sido creada.'}
	</p>
{/if}
<p class="info-account">{l s='Bienvenido a tu cuenta, aca puedes ver tu información y reservaciones.'}</p>
<div class="row addresses-lists">
	<div class="col-xs-12 col-sm-6 col-lg-4">
		<ul class="myaccount-link-list">
            {if $has_customer_an_address}
            <li><a href="{$link->getPageLink('address', true)|escape:'html':'UTF-8'}" title="{l s='Add my first address'}"><i class="icon-building"></i><span>{l s='Agregar Información'}</span></a></li>
            {/if}
            <li><a href="{$link->getPageLink('history', true)|escape:'html':'UTF-8'}" title="{l s='Orders'}"><i class="icon-list-ol"></i><span>{l s='Historial de reservaciones'}</span></a></li>
            <li><a href="{$link->getPageLink('addresses', true)|escape:'html':'UTF-8'}" title="{l s='Addresses'}"><i class="icon-building"></i><span>{l s='Mis datos'}</span></a></li>
            <li><a href="{$link->getPageLink('identity', true)|escape:'html':'UTF-8'}" title="{l s='Information'}"><i class="icon-user"></i><span>{l s='Mi información personal'}</span></a></li>
        </ul>
	</div>
</div>

{hook h='displayCustomerAccountAfterTabs'}

<ul class="footer_links clearfix">
<li><a class="btn btn-default button button-small" href="{$base_dir}" title="{l s='Inicio'}"><span><i class="icon-chevron-left"></i> {l s='Inicio'}</span></a></li>
</ul>
