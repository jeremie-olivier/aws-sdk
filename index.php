<?php

	require 'vendor/autoload.php';

  use Aws\Common\Aws;
  use Aws\S3\Exception\S3Exception;

  // Instantiate an S3 client
  $aws = Aws::factory('config.php');
    echo 'init';

  // $aws = Aws::factory('/path/to/config.php');

  $s3 = $aws->get('s3');


  $bucket = 'elasticbeanstalk-us-east-1-753379908416';


  $path = 'cubbyhole/baptiste.gouby/';
  $nameFileForUpload = 'ma super photo FB';

  $destinationFile = $path + $nameFileForUpload;
  $sourceFile = '/Users/jeremie/Desktop/baptiste.png';




function deleteFile(){

}

function downloadFile(){


}


function changeFileName(){


}


function uploadFile(){
    try {
      $s3->upload($bucket,$destinationFile , fopen($sourceFile, 'r'), 'public-read');
  } catch (S3Exception $e) {
      echo "There was an error uploading the file.\n";
  }
}


?>
