<?php

namespace Mufasil\KeyEncryption\Traits;

trait Encryptable
{
    public function attributesToArray()
    {
        $attributes = parent::attributesToArray();
        foreach ($this->encryptable as $key) {
            if (isset($attributes[$key])) {
                $attributes[$key] = encrypt($attributes[$key]);
            }
        }
        return $attributes;
    }
}