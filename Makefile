COMPOSER?=/usr/local/bin/composer
CONSOLE= php vendor/bin/typo3cms

# Cache
cache-clear:
	$(CONSOLE) cache:flush

# Autoloader
autoload:
	$(COMPOSER) dumpautoload

# Installation
install: install-composer install-console cache-clear autoload

install-dev: install-composer install-console-dev cache-clear autoload

# Vendors
install-composer:
	$(COMPOSER) install

# TYPO3
install-console:
	$(CONSOLE) install:setup --site-setup-type=no

install-console-dev:
	$(CONSOLE) install:setup --database-user-name=t3dawin --database-user-password=t3dawin --database-host-name=mysql \
	    --database-port=3306 --database-socket '' --use-existing-database --database-name=t3dawin \
	    --site-setup-type=no

# Extensions
install-ext:
	$(CONSOLE) extension:activate bootstrap_package
	$(CONSOLE) extension:activate introduction
	$(CONSOLE) extension:activate extension_builder
	$(CONSOLE) extension:activate gridelements

# Configurations
install-config: config-cache config-dev

.PHONY: cache-clear autoload install install-composer install-console install-ext install-config config-cache config-dev
