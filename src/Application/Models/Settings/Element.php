<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Importer @version 5.0.6.6 SourceGuardian (25.05.2023) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2023, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
