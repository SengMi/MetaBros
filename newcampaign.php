<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BDMS</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="../icofont/icofont.min.css">

    <style>
        
        .form-control{
            box-shadow: 10px 10px 5px rgb(225,97,97,56%);
        }
    
    </style>
</head>

<body>

    <div id="wrapper">

        <?php include 'includes/nav.php'?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">ကန်ပိန်းအသစ်ကြေညာမည်။</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        ကန်ပိန်းအသစ်ကြေညာ‌ရန်အောက်ပါဖောင်အားဖြည့်ပါ။
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="addedcampaign.php" method="post">
                                     
                                        <div class="form-group">
                                            <label>ကျင်းပမည့်ခေါင်းစဉ်</label>
                                            <input class="form-control" type="text" placeholder="ကျင်းပမည့်ပွဲခေါင်းစဉ်အားထည့်ပါ။" name="cname" required>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>အဖွဲ့အစည်းအမည်</label>
                                            <input class="form-control" type="text" placeholder="ပွဲပြုလုပ်သောအဖွဲ့အစည်းအမည်အားထည့်ပါ။" name="oname" required>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>ဆက်သွယ်ရန်ဖုန်းနံပါတ်</label>
                                            <input class="form-control" placeholder="09876543210" type="number" name="phn" required>
                                        </div>

                                        <div class="form-group">
                                            <label>ကျင်းပမည့်ရက်</label>
                                            <input class="form-control" type="date" name="cdate" required>
                                        </div>

                

                                        <div class="form-group">
                                            <label>ကျင်းပမည့်နေရာနှင့်ကန်ပိန်းအကြောင်းအသေးစိတ်</label>
                                            <textarea class="form-control" type="text" rows="4" name="descp" required></textarea>
                                        </div>
                                       
                                    
                                
                                        <button type="submit" href="" class="btn btn-success" style="border-radius:2px">အတည်ပြုမည်။</button>
                
                                    </form>
                                </div>
                                
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

<footer>
        <p>&copy; <?php echo date("Y"); ?>: Developed By MetaBros</p>
    </footer>
	
	<style>
	footer{
   background-color: #8A0302;
    bottom: 0;
    left: 0;
    right: 0;
    height: 35px;
    text-align: center;
    color: #CCC;
}

footer p {
    padding: 10.5px;
    margin: 0px;
    line-height: 100%;
}
	</style>

</html>
