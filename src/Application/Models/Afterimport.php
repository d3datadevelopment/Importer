<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Importer @version 5.0.6.5 SourceGuardian (30.03.2023) @author  Thomas Dartsch support@shopmodule.com @copyright (C) 2023, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
