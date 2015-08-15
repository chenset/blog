## blog resource code

### Laravel的修改
- @see Illuminate\Database\Connectors\MySqlConnector:connect
    - 注释掉了默认设置连接字符集的执行, 因为与BAE的数据库连接字符集有冲突
