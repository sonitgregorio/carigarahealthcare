
<?php   
    $pid = $this->session->userdata('pid');
    $payslip = $this->payrollmd->get_payslip($pid, $ppid);
 ?>
<style type="text/css">

    .table>thead>tr>th, .table>tbody>tr>th, .table>tfoot>tr>th, .table>thead>tr>td, .table>tbody>tr>td, .table>tfoot>tr>td{
        padding :2px;
          vertical-align: inherit;
       
    }
    td input{
        text-align: right;
    }
    .right{
        text-align: right;
    }
   
</style>
<div class="col-md-3"></div>
<div class="col-md-9 body-container">
    <div class="panel p-body">
        <div class="panel-heading search">
            <div class="col-md-6">
                <h4 style="font-size:25px">Payroll</h4>
            </div>
        </div>
        <div class="panel-body">
        <form class="form" method="post" action="/insert_payslip">
            <input type="hidden" name="pid" value="<?php echo $pid ?>">
            <input type="hidden" name="ppid" value="<?php echo $ppid ?>">
            <input type="hidden" name="total_earnings" id="total_e" value="<?php echo $payslip['total_earnings'] ?>">
            <input type="hidden" name="total_deduction" id="total_d" value="<?php echo $payslip['total_deduction'] ?>">
            <table class="table table-bordered table-hover">
                <thead>
                <tr style="text-align: center;">
                    <td>Earnings</td>
                    <td style="width:2%"></td>
                    <td style="width:20%">Amount</td>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Regular Pay</td>
                        <td>:</td>
                        <td class="right"><?php echo $payslip['regular_pay'] ?></td>
                    </tr>
                    <tr>
                        <td>Overtime Pay</td>
                        <td>:</td>
                        <td class="right"><?php echo $payslip['overtime'] ?></td>
                    </tr>
                    <tr>
                        <td>Night Diff.</td>
                        <td>:</td>
                        <td  class="right"><?php echo $payslip['night_diff'] ?></td>
                    </tr>
                    <tr>
                        <td>Bonuses</td>
                        <td>:</td>
                        <td class="right"><?php echo $payslip['bonuses'] ?></td>
                    </tr>
                    <tr>
                        <td>NonTaxable Allowances</td>
                        <td>:</td>
                        <td class="right"><?php echo $payslip['nontaxable_allowance'] ?></td>
                    </tr>
                     <tr>
                        <td><b>Other NonTaxable Benifits</b></td>
                        <td>:</td>
                        <td class="right"><?php echo $payslip['other_nontaxable_benifits'] ?></td>
                    </tr>
                    <thead>
                        <tr>
                            <td colspan="2" style="text-align:center"><b>Total Earnings</b></td>
                            <td style="text-align: right;font-weight: bolder;">
                                <span id="total_earnings"><?php echo $payslip['total_earnings'] ?></span>
                            </td>
                        </tr>
                    </thead>
                    <thead>
                        <tr>
                            <td colspan="2" style="text-align:center">Deduction</td>
                            <td style="text-align:center">
                                Amount
                            </td>
                        </tr>
                    </thead>
                    <tr>
                        <td>Tardiness</td>
                        <td>:</td>
                        <td class="right"><?php echo $payslip['tardiness'] ?></td>
                    </tr>
                    <tr>
                        <td>Undertime</td>
                        <td>:</td>
                        <td class="right"><?php echo $payslip['undertime'] ?></td>
                    </tr>
                    <tr>
                        <td>Absences</td>
                        <td>:</td>
                        <td class="right"><?php echo $payslip['absences'] ?></td>
                    </tr>
                    <tr>
                        <td>Cash Advance</td>
                        <td>:</td>
                        <td class="right"><?php echo $payslip['cash_advance'] ?></td>
                    </tr>
                    <thead>
                        <tr>
                            <td colspan="3" style="text-align:center">
                                <b>Government Contribution</b>
                            </td>
                        </tr>
                    </thead>
                    <tr>
                        <td>SSS</td>
                        <td>:</td>
                        <td class="right"><?php echo $payslip['sss'] ?></td>
                    </tr>
                    <tr>
                        <td>PHIC</td>
                        <td>:</td>
                        <td class="right"><?php echo $payslip['phic'] ?></td>
                    </tr>
                     <tr>
                        <td>HDMF</td>
                        <td>:</td>
                        <td class="right"><?php echo $payslip['hdmf'] ?></td>
                    </tr>
                     <tr>
                        <td>WithTax</td>
                        <td>:</td>
                        <td class="right"><?php echo $payslip['with_tax'] ?></td>
                    </tr>
                    <thead>
                        <tr>
                            <td colspan="2" style="text-align: center"><b>TOTAL DEDUCTIONS</b></td>
                            <td style="text-align: right;font-weight: bolder;">
                            <strong>
                                <span id="total_deduction"><?php echo $payslip['total_deduction'] ?></span>
                            </strong>
                                
                            </td> 
                        </tr>
                         <tr>
                            <td colspan="2" style="text-align: center"><b>Net Income</b></td>

                            <td  style="text-align: right;font-weight: bolder;">
                                <span id="net_income"><?php echo number_format($payslip['total_earnings'] - $payslip['total_deduction'], 2, '.', ',') ?></span>
                            </td> 
                        </tr>
                    </thead>
                </tbody>
            </table>
        </form>
        </div>
    </div>
</div>
