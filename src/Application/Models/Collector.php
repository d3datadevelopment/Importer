<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Importer @version 5.0.6.6 SourceGuardian (25.05.2023) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2023, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
