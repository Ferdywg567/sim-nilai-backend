<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    public $found_msg    = "Terkait Telah Berhasil Didapatkan!";
    public $created_msg  = "Terkait Telah Berhasil Dibuat!";
    public $edited_msg   = "Terkait Telah Berhasil Diubah!";
    public $notfound_msg = "Terkait Tidak Ditemukan Di Database...";
    public $saved_msg    = "Terkait Berhasil Disimpan!";
    public $deleted_msg  = "Terkait Berhasil Dihapus!";
    public $added_msg  = "Terkait Berhasil Ditambahkan!";

    /**
     * success response method.
     *
     * @param string $message
     *
     * @return \Illuminate\Http\Response json()
     */
    public function sendSuccess($message)
    {
        $response = [
            'success' => true,
            'message' => $message,
        ];

        return response()->json($response, 200);
    }

    /**
     * success response method with data.
     *
     * @param array $data
     * @param string $message
     * @param int $code
     *
     * @return \Illuminate\Http\Response json()
     */
    public function sendResponse(mixed $data, $message, $code = 200)
    {
        $response = [
            'success' => true,
            'message' => $message,
        ];

        $response['data'] = $data ?? [];

        return response()->json($response, $code);
    }


    /**
     * return error response.
     *
     * @param string $message
     * @param array $errors
     * @param int $code
     *
     * @return \Illuminate\Http\Response json()
     */
    public function sendError($message, $errors = [], $code = 404)
    {
        $response = [
            'success' => false,
            'message' => $message,
        ];

        if (!empty($errors)) {
            $response['data'] = $errors;
        }

        return response()->json($response, $code);
    }
}
