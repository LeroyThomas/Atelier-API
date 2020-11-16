<?php

namespace App\Controller;

use App\Model\StockManager;

class StockController extends AbstractAPIController
{
    public function all(): string
    {
        $stockManager = new StockManager();
        $stock = $stockManager->selectAll();

        return json_encode($stock);
    }

    public function buy(int $id)
    {
        $stockManager = new StockManager();
        $stock = $stockManager->decrementStock($id);

        return json_encode($stock);
    }
}
