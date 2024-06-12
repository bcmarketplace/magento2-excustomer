#  BCMarketplace_Excustomer  

**Extension Name**: BCMarketplace     
**Module Name**: BCMarketplace_Excustomer  
**Author**: Raphael Baako


## Description ##
This module enables customers to log in from any location on the storefront without being redirected to the login page and subsequently to the 'My Account' page. It ensures customers remain on their current page, which is particularly beneficial if they are redirected to a listing page or promotional content. This seamless experience helps improve conversion rates.

###### Known Issues:   
NA

### Compatiblity ### 
- Magento community version 2.4.2 and later
- Magento enterprise version 2.4.2 and later

## Installation steps

1. Get the module via composer
   ```
   composer config repositories.magento2-excustomer git https://github.com/rlbaako/magento2-excustomer.git 
   composer require rlbaako/magento2-excustomer
   ```

   or via git
   ```
   git clone https://github.com/rlbaako/magento2-excustomer.git app/code/BCMarketplace/Excustomer
   ```

2. Enable module

```
bin/magento module:enable BCMarketplace_Excustomer
bin/magento setup:upgrade
```
