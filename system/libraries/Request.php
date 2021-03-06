<?php

class Request
{

    static function get()
    {
        return json_decode(json_encode($_GET));
    }

    static function post()
    {
        $data = json_decode(json_encode($_POST));

        if(isset($_SERVER['CONTENT_TYPE']) && $_SERVER['CONTENT_TYPE'] == "application/json")
        {
            $data = json_decode(file_get_contents('php://input'));
        }

        return $data;
    }

    public function validate($data, $attr = array())
    {
        $invalid = [];
        foreach($attr as $key => $val)
        {
            foreach($val as $rule)
            {
                if($rule == 'required')
                {
                    if(!isset($data[$key]) || empty($data[$key]) || $data[$key] == NULL)
                    {
                        $invalid[] = $key;
                        continue;
                    }
                }
                else
                {
                    $ex_rule = explode(':',$rule);
                    if($ex_rule[0] == 'unique')
                    {
                        $model = new $ex_rule[1];
                        $model = $model->where($key,$data[$key])->first();
                        if(!empty($model))
                        {
                            $invalid[] = $key;
                            continue;
                        }
                    }
                }
            }
        }
        return $invalid;
    }

}