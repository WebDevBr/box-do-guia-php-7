# acessa o diretório compartilhado
cd /vagrant

# descompacta e acessa o diretório com o source do PHP 7
wget http://br2.php.net/distributions/php-7.0.0.tar.bz2
tar -jxvf php-7.0.0.tar.bz2
cd php-7.0.0

# instala pacote necessário para o build do PHP 7
sudo apt-get update
sudo apt-get install -y \
    build-essential \
    pkg-config \
    git-core \
    autoconf \
    bison \
    libxml2-dev \
    libbz2-dev \
    libmcrypt-dev \
    libicu-dev \
    libssl-dev \
    libcurl4-openssl-dev \
    libltdl-dev \
    libjpeg-dev \
    libpng-dev \
    libpspell-dev \
    libreadline-dev

# configura o PHP 7
./buildconf --force

CONFIGURE_STRING="--prefix=/usr/local/php7 \
                  --with-config-file-scan-dir=/usr/local/php7/etc/conf.d \
                  --enable-intl \
                  --enable-mbstring \
                  --with-mcrypt \
                  --with-mhash"
./configure $CONFIGURE_STRING

# instala o PHP 7
sudo make
sudo make install

# faz o PHP 7 rodar globalmente
export PATH="/usr/local/php7/bin:$PATH"

# testa a instalação
php -v