<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Importer @version 5.0.6.5 SourceGuardian (30.03.2023) @author  Thomas Dartsch support@shopmodule.com @copyright (C) 2023, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
