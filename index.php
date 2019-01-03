<?php
    // Start Date : 2018-11-08 03:00 PM
    // Project Name : Salary Calculate Project

    netsalary = $_POST["netsalary"]!=""?$_POST["netsalary"]:0;
?>
<html>
<head><title>Calculate Your Salary Safetly</title></head>
<style>
    .showWhole{
        border:1;
        border-collapse:collapse;
    }
    .showTableWhole{

    }
</style>
<body>
    <div class="showWhole">
        <table class="showTableWhole">
        <tr>
            <td>Date</td>
            <td><input type="text" name="salarydate" id="salarydate" value="<?php echo $salarydate; ?>"></td>
        </tr>
        <tr>
            <td>Net Salary</td>
            <td><input type="text" name="netsalary" id="netsalary" value="<?php echo $netsalary; ?>"></td>
        </tr>
        <tr>
            <td>Income Tax</td>
            <td><input type="text" name="netsalary" id="netsalary" value="<?php echo $netsalary; ?>"></td>
        </tr>
        <tr>
            <td>Social Security</td>
            <td><input type="text" name="netsalary" id="netsalary" value="<?php echo $netsalary; ?>"></td>
        </tr>
        </table>
    </div>
</body>
</html>