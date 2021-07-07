# Shopware 6 sample plugin for adding a customer middle name

## Usage
- Before installing this module, setup a new Custom Field for the Customer entity, called `custom_customer_middlename`. Without it, this plugin does not work.
- Run the following commands to install this plugin:

```bash
composer require foo/bar
bin/console plugin:refresh
bin/console plugin:install --activate SwagTrainingCustomerMiddleName
```
