<?php

namespace almod90\JsonResponse;

use GuzzleHttp\Client;

class Json
{
    private function getPayload($success = false)
    {
        $obj = new \stdClass();
        $obj->success = $success;

        return $obj;
    }

    private function response($data)
    {
        return response()->json($data);
    }

    public function success($message = "", $object = null)
    {
        $data = $this->getPayload(true);
        if (strlen($message) > 0) {
            $data->message = $message;
        }
        if (!is_null($object)) {
            $data->data = $object;
        }
        return $this->response($data);
    }

    public function error($errors = null)
    {
        $data = $this->getPayload(false);
        if (!is_null($errors)) {
            $data->errors = $errors;
        }
        return $this->response($data);
    }
}
