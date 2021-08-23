<?php
// 	class File {
		
// 		private $supportFormats = ['image/png', 'image/jpeg', 'image/jpg'];
				
// 		public function uploadFile($file){
			
// 			if(in_array($file['type'], $this->supportFormats)) {
			
// 			move_uploaded_file($file['tmp_name'], 'uploads/'. $file['name']);
// 			echo "File has been uploaded";
// 			}
// 			else {
// 				die("File format is not supported");	
// 			}	
// 	}
// }	
?>


<?php
 
 class File{
	 private $format = ['image/jpg', 'image/jpeg', 'image/png'];

	 public function uploadfile($file){
		 if(in_array($file['type'], $this->format)){
			 move_uploaded_file($file['tmp_name'], 'upload'.$file['name']);
			 echo "success";

		 } else {
			 die("File Format not allow");
		 }
	 }

 }


?>
