<?php

class Functions
{
    public const MIN_AMOUNT = 1000;
    public const MAX_AMOUNT = 10000;
    public const MIN_PERIOD = 6;
    public const MAX_PERIOD = 24;

    public function load(array $data): array
    {
        foreach ($_POST as $key => $value) {
            if (array_key_exists($key, $data)) {
                $data[$key]['value'] = trim($value);
            }
        }
        return $data;
    }

    public function validation(array $data): string
    {
        $error = '';
        foreach ($data as $key => $value) {
            if ($data[$key]['required'] && empty($data[$key]['value'])) {
                $error .= "Field  " . $key . " not filled";
            }
        }

        if (!empty($data['amount']['value']) && (int)$data['amount']['value'] < self::MIN_AMOUNT) {
            $error .= "Amount less than the minimum amount " . self::MIN_AMOUNT;
        }

        if (!empty($data['amount']['value']) && (int)$data['amount']['value'] > self::MAX_AMOUNT) {
            $error .= "Amount more than the maximum amount " . self::MAX_AMOUNT;
        }

        if (!empty($data['amount']['value']) && (int)$data['period']['value'] < self::MIN_PERIOD) {
            $error .= "Period less than the minimum " . self::MIN_PERIOD;
        }

        if (!empty($data['period']['value']) && (int)$data['period']['value'] > self::MAX_PERIOD) {
            $error .= "Period more than the maximum " . self::MAX_PERIOD;
        }

        if (!empty($_POST['inn'])) {
            $identificationNumber = $data['inn']['value'];
            $this->validateInn($identificationNumber);
        }

        return $error;
    }

    public function validateInn(string $innString)
    {
        $mul_1 = [1,2,3,4,5,6,7,8,9,1];
        $mult_2 = [3,4,5,6,7,8,9,1,2,3];

        $control = (int)substr($innString, -1);

        $stringWithoutLastCharter = substr($innString, 0, -1);

        $total = 0;

        for ($i = 0; $i < 10; $i++) {
            $total += $stringWithoutLastCharter[$i] * $mul_1[$i];
        }
        $mod = $total % 11;

        $total = 0;
        if ($mod === 10) {
            for ($i = 0; $i < 10; $i++) {
                $total += $stringWithoutLastCharter[$i] * $mult_2[$i];
            }
            $mod = $total % 11;

            if (10 === $mod) {
                $mod = 0;
            }
        }
        return $control === $mod;
    }
}
