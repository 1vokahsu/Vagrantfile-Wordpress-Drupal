# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|
  config.vm.box = "spox/ubuntu-arm"
  config.vm.network "forwarded_port", guest: 81, host: 8081
  config.vm.network "forwarded_port", guest: 82, host: 8082
  config.vm.box = "spox/ubuntu-arm"
  config.vm.box_version = "1.0.0"
  config.vm.provider :vmware_desktop do |vmware|
    vmware.gui = true
    vmware.cpus = 2
    vmware.vmx["ethernet0.virtualdev"] = "vmxnet3"
    vmware.ssh_info_public = true
    vmware.linked_clone = false
  end 
  config.vm.provision "shell", inline: <<-SHELL
    # Installation apache, database and other programmes
    sudo apt install -y software-properties-common
    sudo add-apt-repository -y ppa:ondrej/php
    sudo apt-get -y update
    sudo apt -y upgrade
    sudo apt install -y apache2 mysql-server 
   
    # Setting up PHP
    sudo apt install -y php8.1 libapache2-mod-php8.1
    sudo a2enmod rewrite
    sudo apt install -y php8.1-fpm php-curl php8.1-gd php8.1-mbstring php8.1-xml php8.1-xmlrpc php-soap php-intl php-zip php8.1-mysql php-uploadprogress
    sudo a2enconf php8.1-fpm
    sudo service apache2 restart

    # Creating database for Wordpress
    sudo mysql -e "create database wordpress_db;"
    sudo mysql -e "create user wordpress_user@localhost identified by 'qwerty1234';"
    sudo mysql -e "grant all on wordpress_db.* to wordpress_user@localhost;"

    # Creating database for Drupal
    sudo mysql -e "create database drupal_db;"
    sudo mysql -e "create user drupal_user@localhost identified by '1234qwert';"
    sudo mysql -e "grant all on drupal_db.* to drupal_user@localhost;"

    # Downloading and installation Wordpress
    wget --no-show-progress https://wordpress.org/wordpress-6.1.1.tar.gz
    sudo tar -xf wordpress-6.1.1.tar.gz -C /var/www/
    sudo chown -R root: /var/www/wordpress/

    # Setting up Wordpress
    sudo cp /vagrant/001-wordpress.conf /etc/apache2/sites-available/
    sudo ln -s /etc/apache2/sites-available/001-wordpress.conf /etc/apache2/sites-enabled/
    sudo rm /etc/apache2/sites-enabled/000-default.conf

    sudo cp /vagrant/wp-config.php /var/www/wordpress/
    
    # Downloading and installation Drupal
    wget --no-show-progress https://ftp.drupal.org/files/projects/drupal-9.5.1.tar.gz
    echo "299e173f89f97ce333cf7fa21c4b1f254fb92d813b7170c047b1c6f27649cd6b *drupal-9.5.1.tar.gz" | shasum -c
    sudo tar xf drupal-9.5.1.tar.gz -C /var/www/
    sudo mv /var/www/drupal-9.5.1/ /var/www/drupal
    sudo chown -R root:root /var/www/drupal/

    ## Setting up Drupal
    sudo cp /vagrant/002-drupal.conf /etc/apache2/sites-available/
    sudo ln -s /etc/apache2/sites-available/002-drupal.conf /etc/apache2/sites-enabled/

    sudo mkdir var/www/drupal/sites/default/files
    sudo chmod  o+w var/www/drupal/sites/default/files
    sudo cp vagrant/settings.php var/www/drupal/sites/default/
    sudo chmod  o+w var/www/drupal/sites/default/settings.php

    # Setting up ports
    sudo rm /etc/apache2/ports.conf
    sudo cp /vagrant/ports.conf /etc/apache2/

    # Restart apache2
    sudo service apache2 restart

    SHELL
end