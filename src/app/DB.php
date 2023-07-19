<?php

namespace App;
/**
 * @mixin \PDO
 */
class DB
{
    private \PDO $pdo;
    public function __construct(array $config)
    {
        $defaultOption = [
          \PDO::ATTR_EMULATE_PREPARES => false,
          \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC
        ];
        try {
            $this->pdo= new \PDO($config['driver'] .':host=' . $config['host'] . ';dbname=' .$config['database'],$config['user'],
            $config['pass'],[
                $config['options'] ?? $defaultOption
                //set default fetch mode
//                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
            ]);
        }catch(\PDOException $e){
            throw new \PDOException($e->getMessage(), (int) $e->getCode());
        }
    }
    //CHỖ NÀO CALL MÀ KHÔNG CÓ OBJECT SE4 CHẠY __CALL
    public function __call(string $name, array $arguments)
    {
        return call_user_func_array([$this->pdo, $name], $arguments);
    }
}