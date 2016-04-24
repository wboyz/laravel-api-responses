<?php

namespace WBoyz\LaravelApiResponses;

use Response;
use Illuminate\Http\Response as IlluminateResponse;

class WResponse
{
    protected static $response = null;

    /**
     * @var int
     */
    protected $statusCode = IlluminateResponse::HTTP_OK;

    /**
     * @param $statusCode
     * @return $this
     */
    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;

        return $this;
    }

    /**
     * @return int
     */
    public function getStatusCode()
    {
        return  $this->statusCode;
    }

    /**
     * @param string $message
     * @return mixed
     */
    public function respondNotFound($message = 'Not Found!')
    {
        return $this->setStatusCode(IlluminateResponse::HTTP_NOT_FOUND)->respondWithError($message);
    }

    /**
     * @param string $message
     * @return mixed
     */
    public function respondInternalError($message = 'Internal Error!')
    {
        return $this->setStatusCode(IlluminateResponse::HTTP_INTERNAL_SERVER_ERROR)->respondWithError($message);
    }

    /**
     * @param string $message
     * @return mixed
     */
    public function respondInvalidParameters($message = 'Invalid Parameters!')
    {
        return $this->setStatusCode(IlluminateResponse::HTTP_UNPROCESSABLE_ENTITY)->respondWithError($message);
    }

    /**
     * @param string $message
     * @param object $model
     * @return mixed
     */
    public function respondCreated($message = 'Resource Successfully Created.', $model = null)
    {
        $data = [ 'message' => $message ];
        if ($model) {
            $data['model'] = $model;
        }

        return $this->setStatusCode(IlluminateResponse::HTTP_CREATED)->respond($data);
    }

    /**
     * @param $data
     * @param array $headers
     * @return mixed
     */
    public function respond($data, $headers = [])
    {
        return Response::json($data, $this->getStatusCode(), $headers);
    }

    /**
     * @param string $message
     * @return mixed
     */
    protected function respondWithError($message)
    {
        return $this->respond([
            'error' => [
                'message' => $message,
                'status_code' => $this->getStatusCode()
            ]
        ]);
    }
}
