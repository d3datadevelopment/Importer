<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Importer @version 6.0.0.0 SourceGuardian (25.01.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('7A3737B337EF2777AAQAAAAhAAAABKgAAACABAAAAAAAAAD/E4f1NJNLnuno2Ivixo0FWfhWcrrL6fArfGj2iNGqo4is27NDPD6yoHoN6KxjVAotrxFdhZ5okMTd0mi4ynQqbiuwJOWkl7MkznT/tm7tzDCpJGeoSw3PlsBr5Bd6JXbDt9FADREfaCRJEkGS41wwH9a3dhuHkz9CxsWgAY4llrkurnDGoKdkLc2mN0aj7bYb6lBFIEROkvnTzdlfystpJnU5/i0Vbn5BCAAAAPgCAABvpDThwku2+qmoXtMI6RtYQqyeJCYNJVpiRyllCyqcZVo+e7LjBOUNn6pfXN9Z2aOv+27c611HE16UicNkn979Yh6oHay9BSmHF0oCJawEbXIqSsqRA8Dw+coL2GtRyQvkVhcGqxorzRl3iYdZKseGSK2mpAk3cfKsliFMgHBc+GSPRAKwsXKLFegihvYlRfOC/r0RZcq4tzM+26EC3Noy+FKBgBIZr0kWjpAqO7J3bF6JxyPI9J0wvVebVdfCQ9WVzOZw08AyJAqgjxG1KMAqgj+Zt5zS3FWUrNk6i20wqoaPoxkxM0heLTJYCQBLniWcfkLfc+gsN/FxRK69pKvQC21zabR3rWkF9FU/NcAfbsdrns+MJTgOjDdceLgNQXwMAuopmXe4DWFesbKSebk+dLK7g001SCi4qi1Hzlq3wVLhSxOOcKdbFBHxJJQrmnG6TpxbeVHdk0To02mDCiGEmSPys3L1EzblA5OSFfyMCZGPLyPE5BauXpHOXu9acR6ihTqHXkXR3Gwr5pnJ3TEUVFMnHTla9FftOE4mxNuwtkwudxQqg8VioedLYzwDWada1ElhgBqVcLRGJEQswpIvN5QTiTQzCgFkmnl55/08HCy8wpZ3Xths4b1mpP/xNdYnVIZ20bNG//5xAf7B8u67GVdlEumZFpKOQl/RV+jEIhqQRNXS5vTKmIMWniX/9/aBMriaW0K1NLgM7Vjudh/gaKiw34Sg/esAoNjUoATnpKyBS5ngQKlr8SpLbQ1WhsppC5VQG6MK+hjfKvWDh5KFVrqezFmlxLgT11rWNpzwjJGJxpRFuDUtdBY+kLMo3Yk4vSOPjn7UqqaGqudLVdW9XmnaFLIAB7pLkaVb5NIsIy2s20hrUn5fZ9fOOyjJ10cuot4MfoG2t/6QXfTtB1DkonXxaS4zpJ5TDj3ZHFDKg1ZS75HKMOb28+PImrUDqZxfd3YFhnBFwCE4Wcz8U7ZxAgXnYmPiqak4TikJgZ7FpluSCLuYea5dUQAAAPgCAADITIxluo5IuV/zXzC+NLK7OHCARJrgHNTVRAZvtz6R06JDEyvaAPmcFQQU6hYDlpN+cSck1M1cYoEk/SN6YHOGdSzC7R/6DyFSunEzaG02plDLiYovyZfZo2MzOF0rmAx7ZIE+68qsemWAfPE8fpnYlkSU2Ilze0jxAnlT0IaNsihwnS4wOazmBSDgRwDMfgK77Uz1nlFr1R92LJ3FnlpGTT++W84sFHdD3f3ZK2Ig2aaGdLRB/EPTnwyWoc0KVu8sEbF0TJNeuJWvDChYAH2c/ATKPxQEYp2iS1Zbwc1M+bbjJZaYnai8m+VEUnkJCBhCa6W+/pKO8IGl92M6J6R3X0rs3GheHTQfWcFhAObDAkHmVxm8Ql2G07R26rCV7lNnTY5b5rNc+Z/vhkWaebiUupP6kTrETsxBqL3t8hNSHnXMhJBMOzYbxnnhX82lgnZD6iXraPjyWZ6nZ6B57/k71Jk9HR1BOu6WOnIgGlFEQfUdhi//5B/a3aPnTVmZL8OH0GYGDkDmyO5KU2EUYKMz5+LuOKaX4bcK9ZZvziw1smZiMk9ZQbrYvGLlzztwKcRMt66IXMbnQFoUEx726sQ8dA4zMq2TR00IZOoBI1Um/YnvzBn9TORZIDSI1hPjX2U31zk54KpVCsP1bWShdBL3kNDRpuReYscEdiImhr+i+EAf2WSeheyzN/Qp3STyL1GLMfvQWRKrwZtzyjbQYxoMb68/4qH2S4MaNAAoEB5Rt1BI9ckV0RA+uXunH+pBHgTjpEsatLoNYcynnL+MgAb8uqxZdzAtFCspzgar+rKGhCKx56lxAb2/Fi3M5opKLHTYRLZHdLZes5Gv7ARurrqCvpm+Kh42LcKrTLzfM70rp6AHuLxK05z8rHLlbzZNyGqhoh3pQ+jlcg6Q/hRZXodC78iagci8zCQkL9fLioH5L0x9K/CXk3eaHBQhwDUqZ4VX9AYya33HEPypy+ePe6PRQPvLvUBQEueSW8h5YL96wPhz4l6Zn/MKUgAAAPgCAAANirzveqU9TrL9JkMza3luybN7b/Puc0OkeZkqMyVIpVzvH4FgQJH8npG8pe2dX48nR28lMI+9ilZIdjn2vb/P7EMVa8n3xMTUuGpid1QHxHN2OPyN66YIG1NJ5cKC5zTFWXGU/e1lflJzlmFmBQZKsm8lDhbk8MLJyHoDXmd0bY2E31qUvPTAbSlgNv70X7yVodFFCFfoR6sKYCJzT0xSEe+EPP7qEyOy3RdewFUkGhcXqjiZZQBo5o5oQsejbKafGt/hd7e4OEDt7mWt2+MPcxNdkKY3t2509F3m5vdF6H/P1tg0lhKhxn4pITMl3SM6mk8c8q8/w2ckXlXN4Xolb2vXEbVsu4BCOIwGh3HyyvnYvk3ChN8s0Esa8vgmVqDdGlKKliZjpYBvjSxm/Yyx86sBvI+jfIFiqQuCulAFaha/2Meer8kGs+lvg/i4BJ58LaK+fEVM28+GCja9/xpTTq91rT63uvwmmd8vh0YN2s8wPHulXHaD7EkZFCUZ2BvLU8pdVwjaqSba74Unjqv8Jg8YGR88ggUqDofeGn5ningiZCuRcvoDc/eVa9MdnkYuryeCD4Spc2Beou2uKHgPgGD092+5HPiojkMueCKlmIULJMpf85LoVOTofHY+4Yd6O+C13dETk2NPWsSnJkL3AU+Am0jLao9CtRFSrJVjbZSbGWtyAlT6NG2MbHeLGgkKV/Qa3I7Y7d86UBS73eQyUlripUv5RIZ3F1Iwq75m9yZDQgaSwCPrhAzWQmZAkLONbWDVdw7mmZsKgJkjt24zuBU3E+ozqi8iS9lGaNjzW+H2s/aAF6IMrVBMs3owN1cD7zNV0FUSUHP+mBPS/4fcz5rBYx2tLPi42RDtn69V/wPOEM6KcRsdya3VnTjCvmkzeD5znj5l+xECh1OKeenSjDYjl/H0pu6s6knRSy5vKXvbandRwknp0CEaAmmrF7AcmmEQAOUzJU6chISQ8hSx1HQiZQxcvqPVLISTk1Ga4hvWdhOTs0RsAAAAAA==');