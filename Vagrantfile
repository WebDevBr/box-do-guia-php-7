# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure(2) do |config|
  config.vm.box = "ubuntu_14.04.i386"
  config.vm.box_url = "https://cloud-images.ubuntu.com/vagrant/trusty/current/trusty-server-cloudimg-i386-vagrant-disk1.box"

  config.vm.provision "shell", path: "install_php_7.sh"
  config.vm.provision "shell", inline: "echo PHP 7 Instalado com sucesso"
end
