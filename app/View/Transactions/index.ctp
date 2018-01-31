<div class="row">
    <div class="page-heading col col-md-offset-1 col-xs-6 col-md-6">
        <h1>Transactions</h1>
    </div>
    <div class="cta col col-md-offset-1 col-xs-6 col-md-offset-0 col-md-4">
        <?php echo $this->Html->link('Add Transaction', array('controller' => 'transactions', 'action' => 'add'), array('class' => 'btn btn-default', 'role' => 'button')); ?>
    </div>
</div>
<div class="row">
    <div class="transactions col col-md-offset-1 col-xs-12 col-md-10">
        <?php $cashTotal = $eqptTotal = $acctTotal = $notesTotal = $revTotal = $cogsTotal = $sexpTotal = $mexpTotal = 0; ?>
        <table>
            <tr>
                <th colspan="2"></th>
                <th colspan="3">ASSETS</th>
                <th>=LIABILITIES</th>
                <th colspan="4">+OWNER EQUITY</th>
            </tr>
            <tr>
                <th>Transaction</th>
                <th>Date</th>
                <th>Cash</th>
                <th>Equipment</th>
                <th>Accounts Receivable</th>
                <th>Notes Payable</th>
                <th>Revenue</th>
                <th>Cost of Goods Sold</th>
                <th>Selling Expenses</th>
                <th>Misc Expenses</th>
            </tr>
            <?php foreach ($transactions as $transaction): ?>
                <tr>
                    <td><?php echo $transaction['Transaction']['name']; ?></td>
                    <td style="whitespace: nowrap;"><?php echo date("M j, Y", strtotime($transaction['Transaction']['created'])); ?></td>
                    <td><?php echo $transaction['Transaction']['cash']; ?></td>
                    <td><?php echo $transaction['Transaction']['equipment']; ?></td>
                    <td><?php echo $transaction['Transaction']['accounts_receivable']; ?></td>
                    <td><?php echo $transaction['Transaction']['notes_payable']; ?></td>
                    <td><?php echo $transaction['Transaction']['revenue']; ?></td>
                    <td><?php echo $transaction['Transaction']['cost_of_goods_sold']; ?></td>
                    <td><?php echo $transaction['Transaction']['selling_expenses']; ?></td>
                    <td><?php echo $transaction['Transaction']['misc_expenses']; ?></td>
                </tr>
                <?php 
                    $cashTotal += $transaction['Transaction']['cash'];
                    $eqptTotal += $transaction['Transaction']['equipment'];
                    $acctTotal += $transaction['Transaction']['accounts_receivable'];
                    $notesTotal += $transaction['Transaction']['notes_payable'];
                    $revTotal += $transaction['Transaction']['revenue'];
                    $cogsTotal += $transaction['Transaction']['cost_of_goods_sold'];
                    $sexpTotal += $transaction['Transaction']['selling_expenses'];
                    $mexpTotal += $transaction['Transaction']['misc_expenses'];
                ?>
            <?php endforeach; ?>
            <tr>
                <td colspan="2">Total</td>
                <td><?php echo $cashTotal; ?></td>
                <td><?php echo $eqptTotal; ?></td>
                <td><?php echo $acctTotal; ?></td>
                <td><?php echo $notesTotal; ?></td>
                <td><?php echo $revTotal; ?></td>
                <td><?php echo $cogsTotal; ?></td>
                <td><?php echo $sexpTotal; ?></td>
                <td><?php echo $mexpTotal; ?></td>
            </tr>
        </table>
    </div>
</div>