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
                                $class=$myData[1];
                                
                                $query="INSERT INTO test_excel(id,name,class)VALUE(NULL,'$name','$class')";
                                $insert=mysqli_query($conn,$query);
                                
                        }
                        if($insert){
                                ?>
                        <script>
                        alert("Successful upload");
                        window.location.href='dates.html';
                        </script>
                        
                        <?php
                                
                                
                        } else{
                        ?>
                        <script>
                                alert("upload failed");
                                window.location.href='test.html';
                        </script>
                                
                        <?php
                        }
                        
        }else{
                ?>
                <script>window.alert("upload failed");
                </script>        
                <?php
        }
}
        
?>
