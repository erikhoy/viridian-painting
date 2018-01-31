<?php 
class Transaction extends AppModel {
    public function save_transaction($name, $cash, $accountsReceivable, $revenue, $cogs, $expenses) {
    	$this->create();
    	$this->set(array('name' => $name, 'cash' => $cash, 'accounts_receivable' => $accountsReceivable, 'revenue' => $revenue, 'cost_of_goods_sold' => $cogs, 'selling_expenses' => $expenses));
    	/*echo "cash: ".($cash)."<br>"; echo "acct: ".($accountsReceivable)."<br>";
    	echo "revenue: ".($revenue)."<br>"; echo "cogs: ".($cogs)."<br>";
        echo "expenses: ".($expenses)."<br>";
        echo $cash." + ".$accountsReceivable." = ".$revenue." + ".$cogs." + ".$expenses."<br>";
        //echo ($cash/* + $accountsReceivable)." = ".(/*$revenue + $cogs + $expenses)."<br>";
        //if (($accountsReceivable) == ($revenue)) {*/
        if (($cash + $accountsReceivable) == ($cogs + $expenses + $revenue)) {
            echo 'success';
            $this->save();
        }
        else {
        	echo 'error';
        }
    }
}
?>