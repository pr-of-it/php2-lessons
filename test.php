<?php

class Errors extends Exception implements Countable
{
    protected array $errors = [];

    public function addError(Throwable $e) {
        $this->errors[] = $e;
    }

    public function getErrors(): array
    {
        return $this->errors;
    }

    public function count()
    {
        return count($this->errors);
    }
}

function validate(int $value)
{
    $errors = new Errors();

    if (true) {
        $errors->addError(new Exception('Значение должно быть >0'));
    }

    if ($value % 2 !== 0) {
        $errors->addError(new Exception('Значение должно быть чётным'));
    }

    if (count($errors) > 0) {
        throw $errors;
    }

    return $value;
}

try {

    echo validate(-41);

} catch (Errors $e) {
    foreach ($e->getErrors() as $error) {
        echo $error->getMessage();
    }
}
