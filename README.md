The module integrates a Magento 2 based webstore with the **[Zoho Books](https://www.zoho.eu/books)** accounting software.  
See also my Magento 2 extensions for [Zoho CRM](https://github.com/mage2pro/zoho-crm) and [Zoho Inventory](https://github.com/mage2pro/zoho-inventory).  
The module is **free** and **open source**.
The extension is not released yet.  
The extension will be released when I will want so.   

## How to install
[Hire me in Upwork](https://www.upwork.com/fl/mage2pro), and I will: 
- install and configure the module properly on your website
- answer your questions
- solve compatiblity problems with third-party checkout, shipping, marketing modules
- implement new features you need 

### 2. Self-installation
```
bin/magento maintenance:enable
rm -f composer.lock
composer clear-cache
composer require mage2pro/zoho-books:*
bin/magento setup:upgrade
bin/magento cache:enable
rm -rf var/di var/generation generated/code
bin/magento setup:di:compile
rm -rf pub/static/*
bin/magento setup:static-content:deploy -f en_US <additional locales>
bin/magento maintenance:disable
```

## How to update
```
bin/magento maintenance:enable
composer remove mage2pro/zoho-books
rm -f composer.lock
composer clear-cache
composer require mage2pro/zoho-books:*
bin/magento setup:upgrade
bin/magento cache:enable
rm -rf var/di var/generation generated/code
bin/magento setup:di:compile
rm -rf pub/static/*
bin/magento setup:static-content:deploy -f en_US <additional locales>
bin/magento maintenance:disable
```