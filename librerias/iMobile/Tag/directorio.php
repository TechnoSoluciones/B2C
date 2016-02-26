<?php

  /* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function ScanDirectory($Directory){

  $MyDirectory = opendir($Directory) or die('Error');
	while($Entry = @readdir($MyDirectory)) {
		if(is_dir($Directory.'/'.$Entry)&& $Entry != '.' && $Entry != '..') {
                         echo '<p>'.$Directory;
			ScanDirectory($Directory.'/'.$Entry);
                        echo '</p>';
		}
		else {
			echo 'require_once($raiz."librerias/iMobile/Tag/'.$Entry.'");<br>';
                }
	}
  closedir($MyDirectory);
}

ScanDirectory('.');
?>