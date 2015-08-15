## blog resource code
### Laravel Version 5.0.*
BAE PHP版本为5.4仅支持Laravel 5.0.*以及以下

### Laravel的修改
- @see Illuminate\Database\Connectors\MySqlConnector:connect
注释掉了默认设置连接字符集的执行, 因为与BAE的数据库连接字符集有冲突
