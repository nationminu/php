# php

php 5.6 install on centos 7

```
yum group install "Development Tools"
yum install pcre-devel zlib-devel openssl-devel
```

```
wget http://apache.tt.co.kr//httpd/httpd-2.4.43.tar.gz

./configure \
--prefix=/usr/local/apache \
--enable-mods-shared=all \
--enable-ssl \
--enable-cache \
--enable-deflate \
--enable-rewrite \
--with-apr=/usr \
--with-apr-util=/usr \
--with-pcre=/usr \
--with-ssl=/usr \
--with-z=/usr \
--with-mpm=worker \
--enable-mpms-shared=all \
--enable-mods-shared

make
make install
```

```
# yum install epel-release
# yum -y install libxml2-devel bzip2-dvel libcurl-devel db4-devel libjpeg-devel libvpx-devel gdbm-devel libpng-devel libXpm-devel freetype-devel t1lib-devel gmp-devel libc-client-devel openldap-devel libmcrypt-devel libedit-devel libtidy-devel 

yum install libxml2-devel 
yum install bzip2-dvel 
yum install libcurl-devel 
yum install db4-devel
yum install libjpeg-devel
yum install libvpx-devel
yum install gdbm-devel
yum install libpng-devel
yum install libXpm-devel
yum install freetype-devel
yum install t1lib-devel
yum install gmp-devel
yum install libc-client-devel
yum install openldap-devel
yum install libmcrypt-devel
yum install libedit-devel
yum install libtidy-devel 

ln -s /usr/lib64/libgdbm_compat.so /usr/local/lib64/libdbm.so \
```

```
wget https://www.php.net/distributions/php-5.4.45.tar.gz

./configure \
--prefix=/usr/local/php \
--with-apxs2=/usr/local/apache/bin/apxs \
--with-config-file-path=/usr/local/apache/conf \
--with-mysql=mysqlnd \
--with-pdo-mysql=mysqlnd \
--with-mysqli=mysqlnd \
--libdir=/usr/lib64 \
--with-libdir=lib64 \
--with-regex=php \
--with-openssl \
--with-pcre-regex \
--with-zlib \
--with-bz2 \
--with-curl \
--with-gdbm \
--with-db4=/usr \
--with-dbm \
--with-pcre-dir=/usr \
--with-openssl-dir=/usr \
--with-libxml-dir=/usr \
--with-gd \
--with-vpx-dir=/usr \
--with-jpeg-dir=/usr \
--with-png-dir=/usr \
--with-zlib-dir=/usr \
--with-xpm-dir=/usr \
--with-freetype-dir=/usr \
--with-t1lib=/usr \
--with-gettext \
--with-gmp \
--with-mhash \
--with-imap \
--with-imap-ssl \
--with-kerberos \
--with-icu-dir=/usr \
--with-ldap \
--with-ldap-sasl \
--with-libmbfl \
--with-onig \
--with-mcrypt \
--with-libedit \
--with-readline \
--with-tidy \
--with-libexpat-dir=/usr \
--with-xmlrpc

make
make install

conf/extra/httpd-php.conf
AddType application/x-httpd-php .php .phtml
AddType application/x-httpd-php-source .phps

```
```
memcache

/usr/local/php/pecl install memcached-2.2.0

/usr/local/apache/conf/php.ini
[memcache]
extension_dir=/usr/lib64/php/modules/
extension=memcache.so
;memcache.allow_failover=1
;memcache.max_failover_attempts=100
;memcache.chunk_size=32768
;memcache.default_port=11211
session.save_handler=memcache
session.save_path="127.0.0.1:11211"
```

