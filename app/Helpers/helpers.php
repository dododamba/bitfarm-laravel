<?php

use App\File as File;
use App\Log as SenseiLogger;
use Auth as LaravelAuth;
use Carbon\Carbon;
use Illuminate\Support\Str as Str;
use Illuminate\Support\Facades\Config as Conf;


  /**
   * Convert image to base64
   *
   * @return Object
   * @author Dominique DAMBA
   * @version 0.0.1
   */

    if(!function_exists('convertToBase64')) {

         function convertToBase64($base64_string, $output_file) {
            $file = fopen($output_file, "wb");
            $data = explode(',', $base64_string);
            fwrite($file, base64_decode($data[1]));
            fclose($file);
            return $output_file;
        }
    }



if (!function_exists('getIpAdress')) {
    function getIpAdress()
    {
        if (isset($_SERVER['HTTP_CLIENT_IP'])) {
            return $_SERVER['HTTP_CLIENT_IP'];
        } elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            return $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            return (isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '');
        }
    }
}

if (!function_exists('getCurrentUser')) {
    function getCurrentUser()
    {
        if (LaravelAuth::guard('web')->check()) {
            return Auth::user()->first_name . '  ' . Auth::user()->last_name;

        }

        return 'Visiteur';

    }
}

if (!function_exists('getLocation')) {
    function getLocation()
    {
        return '';
    }
}


if (!function_exists('sous_chaine')) {
    function sous_chaine($chaine,$debut,$fin)
    {
        return substr($chaine,$debut,$fin);
    }
}


/**
 *
 * @param mixed $length
 * @return string
 * @author Dominique DAMBA
 */

if (!function_exists('str_randomize')) {
    function str_randomize($length)
    {

        $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            return $randomString;
        }

}





if (!function_exists('file_manager')) {
    function file_manager()
    {
        $file = new File();
        return $file;
    }
}

if (!function_exists('name_generator')) {
    function name_generator($prefix, $length)
    {
        $generated = Str::random($length);

        return $prefix . '_' . $generated;
    }
}


if (!function_exists('tableName')) {
    function tableName($model)
    {

        return (new $model())->getTable();
    }
}


if (!function_exists('itemId')) {
    function itemId($model)
    {
        return (new $model())->id;
    }
}


if (!function_exists('lastChild')) {

    function lastChild($model)
    {
        $last_child = (new $model())::orderBy('created_at', 'desc')->first();
        return $last_child->id;
    }
}



if (!function_exists('number_randomize')) {
    function number_randomize($length)
    {

        $characters = '0123456789';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

}


if (!function_exists('defaultLog')) {
    function defaultLog($model)
    {
        SenseiLogger::create(
            [
                'action' => Conf::get('constants.DEFAULT_ACTION'),
                'adresseIp' => getIpAdress(),
                'location' =>getLocation(),
                'user' => getCurrentUser(),
                'table' =>tableName($model),
                'logger_token'=>str_randomize(70)
            ]
        );
    }
}


if (!function_exists('createLog')) {
    function createLog($model)
    {
        SenseiLogger::create(
            [
                'action' => Conf::get('constants.CREATE_ACTION'),
                'adresseIp' => getIpAdress(),
                'location' =>getLocation(),
                'user' => getCurrentUser(),
                'table' =>tableName($model),
                'logger_token'=>str_randomize(70)
            ]
        );
    }
}


if (!function_exists('createFailureLog')) {
    function createFailureLog($model)
    {
        SenseiLogger::create(
            [
                'action' => Conf::get('constants.CREATE_FAILURE_ACTION'),
                'adresseIp' => getIpAdress(),
                'location' =>getLocation(),
                'user' => getCurrentUser(),
                'table' =>tableName($model),
                'logger_token'=>str_randomize(70)
            ]
        );
    }
}


if (!function_exists('showLog')) {
    function showLog($model,$id)
    {
        SenseiLogger::create(
            [
                'action' => Conf::get('constants.SHOW_ACTION').', item id : '.$id,
                'adresseIp' => getIpAdress(),
                'location' =>getLocation(),
                'user' => getCurrentUser(),
                'table' =>tableName($model),
                'logger_token'=>str_randomize(70)
            ]
        );
    }
}


if (!function_exists('showFailureLog')) {
    function showFailureLog($model,$id)
    {
        SenseiLogger::create(
            [
                'action' => Conf::get('constants.SHOW_FAILURE_ACTION').', item id : '.$id,
                'adresseIp' => getIpAdress(),
                'location' =>getLocation(),
                'user' => getCurrentUser(),
                'table' =>tableName($model),
                'logger_token'=>str_randomize(70)
            ]
        );
    }
}


if (!function_exists('editLog')) {
    function editLog($model,$id)
    {
        SenseiLogger::create(
            [
                'action' => Conf::get('constants.EDIT_ACTION').', item id : '.$id,
                'adresseIp' => getIpAdress(),
                'location' =>getLocation(),
                'user' => getCurrentUser(),
                'table' =>tableName($model),
                'logger_token'=>str_randomize(70)
            ]
        );
    }
}


if (!function_exists('editFailureLog')) {
    function editFailureLog($model,$id)
    {
        SenseiLogger::create(
            [
                'action' => Conf::get('constants.EDIT_FAILURE_ACTION').', item id : '.$id,
                'adresseIp' => getIpAdress(),
                'location' =>getLocation(),
                'user' => getCurrentUser(),
                'table' =>tableName($model),
                'logger_token'=>str_randomize(70)
            ]
        );
    }
}


if (!function_exists('updateLog')) {
    function updateLog($model,$id)
    {
        SenseiLogger::create(
            [
                'action' => Conf::get('constants.UPDATE_ACTION').', item id : '.$id,
                'adresseIp' => getIpAdress(),
                'location' =>getLocation(),
                'user' => getCurrentUser(),
                'table' =>tableName($model),
                'logger_token'=>str_randomize(70)
            ]
        );
    }
}


if (!function_exists('updateFailureLog')) {
    function updateFailureLog($model,$id)
    {
        SenseiLogger::create(
            [
                'action' => Conf::get('constants.UPDATE_FAILURE_ACTION').', item id : '.$id,
                'adresseIp' => getIpAdress(),
                'location' =>getLocation(),
                'user' => getCurrentUser(),
                'table' =>tableName($model),
                'logger_token'=>str_randomize(70)
            ]
        );
    }
}



if (!function_exists('storeLog')) {
    function storeLog($model)
    {
        SenseiLogger::create(
            [
                'action' => Conf::get('constants.STORE_ACTION').', item id : ',
                'adresseIp' => getIpAdress(),
                'location' =>getLocation(),
                'user' => getCurrentUser(),
                'table' =>tableName($model),
                'logger_token'=>str_randomize(70)
            ]
        );
    }
}


if (!function_exists('storeFailureLog')) {
    function storeFailureLog($model)
    {
        SenseiLogger::store(
            [
                'action' => Conf::get('constants.STORE_FAILURE_ACTION').', item id : ',
                'adresseIp' => getIpAdress(),
                'location' =>getLocation(),
                'user' => getCurrentUser(),
                'table' =>tableName($model),
                'logger_token'=>str_randomize(70)
            ]
        );
    }
}


if (!function_exists('deleteLog')) {
    function deleteLog($model,$id)
    {
        SenseiLogger::store(
            [
                'action' => Conf::get('constants.DELETE_ACTION').', item id : '.$id,
                'adresseIp' => getIpAdress(),
                'location' =>getLocation(),
                'user' => getCurrentUser(),
                'table' =>tableName($model),
                'logger_token'=>str_randomize(70)
            ]
        );
    }
}


if (!function_exists('deleteFailureLog')) {
    function deleteFailureLog($model,$id)
    {
        SenseiLogger::store(
            [
                'action' => Conf::get('constants.DELETE_FAILURE_ACTION').', item id : '.$id,
                'adresseIp' => getIpAdress(),
                'location' =>getLocation(),
                'user' => getCurrentUser(),
                'table' =>tableName($model),
                'logger_token'=>str_randomize(70)
            ]
        );
    }
}



if (!function_exists('countElement')) {
    function countElement($model)
    {
        return (new $model())::all()->count();
    }
}

if (!function_exists('forHumans')) {
    function forHumans($date)
    {
        return Carbon::parse($date)->diffForHumans();
    }
}
