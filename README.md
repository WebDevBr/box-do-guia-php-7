## Links para baixar

Unix: http://php.net/downloads.php
Windows: windows.php.net
Box para Vagrant do Rasmus Lerdorf: https://github.com/rlerdorf/php7dev.git

Eu achei mais simples usar o Box que disponibilizo no link a seguir, mas apenas para efeitos de testes, ok! Eu só instalei o PHP 7 e nada mais

[Link da box](https://github.com/WebDevBr/box-do-guia-php-7)

[Baixar o Git](http://www.git-scm.com/)

obs.: Para rodar a box da primeira vez é necessário 1 dose de internet e 2 de paciência, mas isso é só da primeira vez.

## Para usar os binários do Windows

Em muitos casos é só baixar e descompactar, mas se rolar um erro de dll tente instalar o Microsoft Visual C++ Redistributable 2015 neste link

[https://www.microsoft.com/en-us/download/details.aspx?id=48145](https://www.microsoft.com/en-us/download/details.aspx?id=48145)

## Para compilar no Linux

Execute o comando configure com as flags que você achar necessárias, todas são opcionais.

	sudo ./configure

Flags para o comando configure (Personalizar a instalação do PHP 7): http://php.net/manual/en/configure.about.php

Quando terminar rode este comando:

	sudo make

E depois:

	sudo make install

Ele estará disponível em /opt/php/bin e nenhum arquivo php.ini estará disponível, você pode copiar um do source baixado (existem 2, php.ini-development e o php.ini-production, escolha 1) para o diretório /opt e remover tudo depois de - e deixe apenas o php.ini).

Para adicionar as variáveis de ambiente:

	export PATH=$PATH:/opt/php/bin

## Para usar a box do Rasmus

Rode os comandos na seguinte ordem

	git clone https://github.com/rlerdorf/php7dev.git
	cd php7dev
	vagrant up

Para acessar:
	vagrant ssh

Senha e usuários: **vagrant**.

### Para acessar:

Você pode usar o ip 192.168.7.7, ou adicionar isso ao seu arquivo hosts:

	192.168.7.7 php7dev

O arquivo hosts fica em /etc/hosts na maioria dos Linux e C:\Windows\System32\drivers\etc no Windows.

Qualquer instancia de terminal ou cmd deve ser fechada e servidores web reiniciados para as ações terem efeito, em alguns casos até reiniciar computador, se ligue nisso!.