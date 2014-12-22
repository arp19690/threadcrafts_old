<?php

    class Config extends CI_Controller
    {

        public function __construct()
        {
            parent::__construct();
        }

        public function changeCurrency($to_Currency = "USD")
        {
            require_once(APPPATH . 'hooks/CurrencyHook.php');
            $CurrencyHook = new CurrencyHook();
            $CurrencyHook->setCurrency($to_Currency);
            $CurrencyHook->setAllCurrencyConversionPrices();

            if ($this->input->get('url'))
            {
                $redirectUrl = urldecode($this->input->get('url'));
            }
            else
            {
                $redirectUrl = base_url();
            }

            redirect($redirectUrl);
        }

    }