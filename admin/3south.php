<?php 
$conn=mysqli_connect("localhost","root","","mereport") or die(mysqli_error($conn));
if(isset($_POST['submit'])){
                $fileName=$_FILES['myfile']['name'];
                $fileTmpName=$_FILES['myfile']['tmp_name'];
                $fileExtension=pathinfo($fileName,PATHINFO_EXTENSION);
                $allowedType=array('csv');
                if(in_array($fileExtension,$allowedType)){
                        $handle= fopen($fileTmpName,'r');
                        fgetcsv($handle,1000,',');
                        while(($myData=fgetcsv($handle,1000,','))!==FALSE){
                                $name=$myData[0];
                                $nemis=$myData[1];

                                $query="INSERT INTO 3southcat1(id,name,nemis,mathematics,english,kiswahili,genscience,sst)VALUE(NULL,'$name','$nemis','$mathematics','$english','$kiswahili','$genscience','$sst')";
                                $insert=mysqli_query($conn,$query);
                                
                        }
                        if($insert){
                                ?>
                        <script>
                        alert("Successful upload of Form 3 South Results");
                        window.location.href='3southcat.php';
                        </script>
                        
                        <?php
                                
                                
                        } else{
                        ?>
                        <script>
                                alert("File upload failed");
                                window.location.href='3south.html';
                        </script>
                                
                        <?php
                        }
                        
        }else{
                ?>
                <script>window.alert("Invalid File Extension");
                window.location.href='3south.html'
                </script>        
                <?php
        }
}
        
?>
