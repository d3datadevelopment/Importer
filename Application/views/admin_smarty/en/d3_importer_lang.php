<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Importer @version 6.0.0.0 SourceGuardian (25.01.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('7A3737B337EF2777AAQAAAAhAAAABKgAAACABAAAAAAAAAD/E4f1NJNLnuno2Ivixo0FWfhWcrrL6fArfGj2iNGqo4is27NDPD6yoHoN6KxjVAotrxFdhZ5okMTd0mi4ynQqbiuwJOWkl7MkznT/tm7tzDCpJGeoSw3PlsBr5Bd6JXbDt9FADREfaCRJEkGS41wwH9a3dhuHkz9CxsWgAY4llrkurnDGoKdkLc2mN0aj7bYb6lBFIEROkvnTzdlfystpJnU5/i0Vbn5BCAAAAHABAAB2ieFgyslqastioFnwtGsf15PtYDpPZF4HS67fasyRWbBzfErgdbf1/miSdkEFBT1ImXNz25ixzCA5iokjofZgmaXbD3SkLdVdWhf+NadI4Bh/6L0gSOcDeVVvU7hd+0ykTw5VYzTgXbbjfMWn+xUXykPsJii5XFvLEYtgJedPHynCC9mNU3YBxWvPsrmqUl4I18YUCwXV4aGT/sMvUN9abVpJ7/Ww7dEMdATANbPP2obs+//tpyMvMJmmvTsFqnCJJgiFnaoB31t9daUIz2UPVSjcbG/3w3Lw7wNgsOeU4ARTsa8o9YEbXANywADILM1soly3PO4as+yQG7gIib49VrseV/aIKD5rzl6QHj2HWhjCLKckfbkV9EAeEKKHBWTaiC4iBT901aIlJIcpAupTerlimHHYTnzwSQs5OZ0Vod5I+kYmc55uHI2rmYmc9T649hG/SzYU7WIIgDWQWv5VfKOQJV4DqsUXzO7+rnqLqlEAAABoAQAAVJOz758bNka+SRKa7vMoB4LdU48vbafzcRGebEdl56sPKh1QsukUVUSxxF7kzGUy1QDM5YnXTgPg5pE70H1G4QJLjCAF+9BWQ5077YgLiS3qudvgLMqZEPAAWMmz9Yge5oAbShc36DeNVYOyoZAWJcD2kdu270Y6/dmPBl0VBoLc9oQJQSQLiO4wFg2eim/YkmI7FAsaMuadbY1PRxPDWLjBhsbTEwSF/Q8IkRQ8Lzyl20QZbBTurMw2jG35Ls3M4EL7PCZe/2oddnDUeC2iwNBSJfnHIrCbnli7luntCSDDPkyRjNjXp3d2cRJgF6tQVPqqtdKXOjrzQuYVk1qsNwXLv4GrfCroprNTXctRWnse1zonwzB5afGS+ZjsUbxMs+WqLMia5s4U894v7zCPjSIie9VOQK5lzaCfzFuWKXnrv/bqI5oOaB42vo4Yvf0D2KCg9UuF+pwDCCV+3nZ2c4iDgjS1jPr3UgAAAGABAAB711x5NCBkZFaTib6YXuNs63ssFhLKsp56DzU4K1r4vow5qDMzDz64oX+3EwCryMt0ifx/93YGnLERatpQpPPI6dl8h7GxbnkozOBN2Wkqdl5D0Xr3CJfk2RNKld2yv56qao/U/fbgdfJ5vGpj5R/jHcExDtHXFTBZtF4bqxpff2K574uhKvFt4IqhOsEVZNF85KiXLGN+pECXrV8x+/6NvzFSiQE9mDcVIaVLNyoZs9ZDcKQVQwnhTMx17rYyI184qBpLkMHbq3Wta9muMw+L8zvoBKh9IBCwFGpRDBDdjV43ugmceANZGtHI9JuVkiywL44Pla3pu5C2AMHPHqUhbhkNLU7CWwKvhoaWsEa9QVS3Jz4cpJmGBYfxazBD3l8BJRD9J0TFfO4yzSFRf5yRq9FhU0Lt3rx4n5KUlQehu8wBVaBzWBwU/MGdHOHCv3ufI5rtme6coPt7VNg+F9wXAAAAAA==');
