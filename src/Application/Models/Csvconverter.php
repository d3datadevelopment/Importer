<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Importer @version 5.0.6.5 SourceGuardian (30.03.2023) @author  Thomas Dartsch support@shopmodule.com @copyright (C) 2023, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
