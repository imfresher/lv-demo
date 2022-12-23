<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class AbstractController extends Controller
{
    protected $prefix = null;

    protected $resource = null;

    protected $repository = null;

    /**
     * View render
     *
     * @param  string $view
     * @param  array  $data
     *
     * @return \Illuminate\View\View
     */
    public function view($view = '', $data = [])
    {
        $viewRoute = '';

        if ($this->prefix) {
            $viewRoute .= $this->prefix . '.';
        }

        if ($this->resource) {
            $viewRoute .= $this->resource . '.';
        }

        $viewRoute .= $view;

        return view($viewRoute, $data);
    }

    public function routeByAction($action, $preRoute = null)
    {
        $routeName = '';

        if ($preRoute) {
            $routeName = $preRoute.'.'.$action;
        } else {
            if ($this->prefix) {
                $routeName .= $this->prefix . '.';
            }

            if ($this->resource) {
                $routeName .= $this->resource . '.';
            }

            $routeName = $routeName.'.'.$action;
        }

        return route($routeName) ?: '/';
    }

    /**
     * Do request with callback.
     *
     * @param  callable $callback
     * @param  array  $successMsg
     * @param  array  $errorMsg
     * @param  mixed $redirect
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function doRequest($callback, $successMsg = [], $errorMsg = [], $redirect = null)
    {
        DB::beginTransaction();

        try {
            Log::info('fsfsfsfs');

            if (is_callable($callback)) {
                $response = call_user_func_array($callback, []);

                $this->e['status'] = $response ? true : false;
                $this->e['message'] = $response ? $successMsg : $errorMsg;
            }

            DB::commit();
        } catch (\Exception $e) {
            $errorMessage = $e->getMessage();

            if (is_string($errorMessage)) {
                $errorMessage = [$e->getMessage()];
            }

            Log::info($errorMessage);

            DB::rollBack();

            $this->e['status'] = false;
            $this->e['message'] = $errorMsg;
        }

        if (! $redirect) {
            $redirect = $this->routeByAction('index');
        }

        return redirect($redirect)->with('flash_message', json_encode($this->e, true));
    }
}
