<?php

  class JQueryMobile{

      public function header($arguments=array()){
          if(is_array($arguments)){
              $arguments["data-role"]=!isset($arguments["data-role"])?"header":$arguments["data-role"];
              $arguments["class"]    =!isset($arguments["class"])?"jqm-header":$arguments["class"];
              $atributos             =$this->makeAttributes($arguments);
              $html                  ="\n\t<div ".$atributos.">".$arguments["html"]."\n\t</div><!-- header -->";
              return($html);
          } else{
              return("JQueryMobile->header: Debe ingresar los valores en un vector.");
          }
      }

      public function title($arguments=array()){
          if(is_array($arguments)){
              $html="<h2 ".$atributos.">".$arguments["html"]."</h2>";
              return($html);
          } else{
              return("JQueryMobile->title: Debe ingresar los valores en un vector.");
          }
      }

      public function paragraph($arguments=array()){
          if(is_array($arguments)){
              $html="<p ".$atributos.">".$arguments["html"]."</p>";
              return($html);
          } else{
              return("JQueryMobile->paragraph: Debe ingresar los valores en un vector.");
          }
      }

      public function headerButton($arguments=array()){
          if(is_array($arguments)){
              if($arguments["direction"]=="left"){
                  $arguments["class"]="jqm-navmenu-link ui-btn ui-btn-icon-notext ui-corner-all ui-icon-bars ui-nodisc-icon ui-alt-icon ui-btn-left";
              } elseif($arguments["direction"]=="right"){
                  $arguments["class"]="jqm-search-link ui-btn ui-btn-icon-notext ui-corner-all ui-icon-search ui-nodisc-icon ui-alt-icon ui-btn-right";
              }
              $atributos=$this->makeAttributes($arguments);
              $html     ="\n\t\t<a ".$atributos.">".$arguments["html"]."</a>";
              return($html);
          } else{
              return("JQueryMobile->headerButton: Debe ingresar los valores en un vector.");
          }
      }

      public function makeAttributes($attributes){
          if(!is_array($attributes)){
              return("JQueryMobile->makeAttributes: Debe ingresar los valores en un vector.");
          }
          $opt=array();
          foreach($attributes as $key=> $value){
              if(strtolower($key)!="html"){
                  $opt[]=$key.'="'.$value.'" ';
              }
          }
          return(implode("",$opt));
      }

      public function content($arguments=array()){
          if(is_array($arguments)){
              $arguments["data-role"]=!isset($arguments["data-role"])?"content":$arguments["data-role"];
              $arguments["class"]    =!isset($arguments["class"])?"jqm-content":$arguments["class"];
              $atributos             =$this->makeAttributes($arguments);
              $html                  ="\n\t<div ".$atributos.">".$arguments["html"]."</div>";
              return($html);
          } else{
              return("JQueryMobile->header: Debe ingresar los valores en un vector.");
          }
      }

      public function page($arguments=array()){
          if(is_array($arguments)){
              $arguments["data-role"]=!isset($arguments["data-role"])?"page":$arguments["data-role"];
              $arguments["class"]    =!isset($arguments["class"])?"jqm-demos jqm-home":$arguments["class"];
              $atributos             =$this->makeAttributes($arguments);
              $html                  ="\n<div ".$atributos.">".$arguments["html"]."\n</div><!-- page -->";
              return($html);
          } else{
              return("JQueryMobile->header: Debe ingresar los valores en un vector.");
          }
      }

      public function footer($arguments=array()){
          if(is_array($arguments)){
              $arguments["data-role"]=!isset($arguments["data-role"])?"footer":$arguments["data-role"];
              $arguments["class"]    =!isset($arguments["class"])?"jqm-footer":$arguments["class"];
              $atributos             =$this->makeAttributes($arguments);
              $html                  ="\n\t<div ".$atributos.">".$arguments["html"]."\n\t</div><!-- footer -->";
              return($html);
          } else{
              return("JQueryMobile->header: Debe ingresar los valores en un vector.");
          }
      }

  }

?>
