<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Importer @version 5.0.6.3 SourceGuardian (05.07.2022) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2022, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('7A3737B365EF26A6AAQAAAAXAAAABHAAAACABAAAAAAAAAD/Lus+owXytgw9cN54Q/OjhmfXR0xEXaaTkuy+jiJINeK2wAyT8c+ip/ayPY+CO4w0XmsnxC0j/vlEjvXmHSyHheVTDuiQ6y78oRIOBXVg0fHUooSz1Aq4gb69lYquQoU7sKP0lOrd911yuWUl6Tf9UAgAAAB4AgAAZ04u8E9dp2iCZejqBs94yRo2+KnCQsURHA6izDBcw0uhAcSSInBcwY87Inxe3j75ub8B3MWN0VfW8cu4jbgsGOp5MAaudYkpleieg5EJ0uvnYBuENIIKLm3GCfZfbgbSP0ps+xT5Vxcvk450NTXrpOnSkhSuBdPHHue1watipp8wXgNWC07nIYSOp0nJrmawxJFtwbOI1+9BeTvrVEloGIonCDlQDauP40HjUo5vrnoJ18tLMCoqk+1moafl9xtXEGSAkJr/zB61Nt1lCAIJ1XsYvuN4IE9skVe3+fO71yYdStRCukJkJRvUOkiS0Le1O3OtffPOXki/GEdhgkV4XobA70r0uIm+T4ciR4ZHjYA8VL9dCp9yh+v5FoqUPbxiZToX2FADLPXfXn3gwbICfWfa9a+t5JnvM54+YX1hMIuHGsQpmZpOxdObY0E+3efe3EYI7f+Kh8bsksDB/lWS3wPlDfSBgyvxGzy2B1Qq36pO5xcZRqW1xlOU7gkrJHNMGOLlSbr0Y4+UEQjNPDUXrNaSItoRJ8WA1zyZysgTSbvqUS9FKHxPYcL9Ad1e+UQRZn3/PgHgCpgNiqB4O9iOa3gP4I5YUzMFZom2mZm8dvioN8Dc/DJLWma1ZqrCMVNR5RtxIxKJ7GekJUnYOhGYsqb7UWX9P7RbmfTGbf13VfsZvCvYP8FtK5jAgQ+0sFom+LyczsxULHiFH/KXQdnRkhmFAUmuwfDiFL9xwfWjseFfnbGi+TcUmGUjcUV6JnRSa1d+lXQPXiZ/2EX8XJ4TO6Ud1f/afOHQOhxpu3Zk2Rm4Ek0x5cfqAYYYIpTPlEB5c/McEgOeiU9RAAAAcAIAAK4QHpNTpLPqy/R3eMq38vIeKKzj6+Tv+b8zoF2zpMLx12+KJByC6eCMRdIECP7KSrcHlyS+LVE+Ex/8s/U6Fw4aQFwVl/eHrQcJSDPvhWWdLiU+eLpHUrMZ69NvVHBoQtnyrE5o72/st0zHMdXNKI8hId9pwxUX5JQaZ9Bdd9BIeEucRkHLqi6mr+Xwm3pvFp5J0sKyy8eGKGM/bdSpYtYtgFRUHv/YATzyP/9gNQenmELOAmgvMWOA1GzogBsR4kFCsrBUA8lNK20vrQtYnxLQ+1sDEaTs1TfFuFrBiofcKq+22MK8XXBuwreihvV8F6wvIk1aJCp27sdezOa5gtZwuCK1RmUsNX+3jlhjdphAX0LWKAA+CNQ+UR650PWmyqz6hUQPk1GLK5eBGZyAzwI6np4gf+UcObuQ6Vr7vb/S9C4qdZhsVMcY6fyUh/zhRqWjxRj8TK02vW0lmDDqstc1/wik45KjrBq5svK/JuQCbLNm2lbDI58NvIy3X18MUdA2+nNY0eutYJz9VN1nJO69pqcCNkzx2JwkF2zvyhSkoSs0UG8lxiI2OraIZ7R1Au+UZNKdNuq0yz8I4dOKftJDajrzcn1pphL/II0hmheX+qh6oD1ceYnrTZW1NZUnh8iqC5mm3TccBKFg1wzFes5npQyB1/Cl7lLd2B/JH4YMCP0WOn9+SpRhDy96OWQ9Hk3hkwss2I4rziHEE0ERgP+V2DW3xdxlGSZwPCuWgNplohWOm9Xjkmsf15yVCT03FcS9DA5TQzckgWLn/pHYesVSVMQgAuQcfp89EWSuykWSBZCkX+Ne8oMy0aFWObZP2QAAAAA=');
