<?php

namespace App\Model;

class StockManager extends AbstractManager
{
    const TABLE = "stock";

    public function __construct()
    {
        parent::__construct(self::TABLE);
    }

    public function decrementStock(int $id)
    {
        $statement = $this->pdo->prepare("UPDATE " . self::TABLE . " SET `quantity` = :quantity - 1 WHERE id=:id");
        $statement->bindValue('id', $id['id'], \PDO::PARAM_INT);
        $statement->bindValue('quantity', $id['quantity'], \PDO::PARAM_STR);

        return $statement->execute();
    }
}
