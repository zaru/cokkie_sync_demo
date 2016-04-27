# ターゲティングのデモ

### /etc/hosts

```
127.0.0.1 a-example.com
127.0.0.1 b-example.com
127.0.0.1 analytics-example.com
```

```
cd a-example.com
php -S 127.0.0.1:10000
```

```
cd b-example.com
php -S 127.0.0.1:10003
```

```
cd analytics-example.com
php -S 127.0.0.1:10002
```
